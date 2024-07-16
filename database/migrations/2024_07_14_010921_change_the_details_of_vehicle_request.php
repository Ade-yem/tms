<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $duplicates = DB::select("SELECT model, COUNT(*) c FROM vehicles GROUP BY model HAVING c > 1");
        foreach ($duplicates as $duplicate) {
            $vehicles = DB::table('vehicles')->where('model', $duplicate->model)->get();
            foreach ($vehicles as $index => $vehicle) {
                if ($index > 0) { // Keep the first one unchanged
                    // Update model to make it unique, e.g., append id
                    DB::table('vehicles')->where('id', $vehicle->id)->update(['model' => $vehicle->model . '-' . $vehicle->id]);
                }
            }
        }

        // Now apply the unique constraint
        Schema::table('vehicles', function (Blueprint $table) {
            $table->string('model')->unique()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->dropUnique(['model']);
        });
    }
};
