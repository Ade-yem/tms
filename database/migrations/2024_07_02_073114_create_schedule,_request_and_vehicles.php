<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->timestamp('start_time')->nullable();
            $table->timestamp('end_time')->nullable();
            $table->string('vehicle');
            $table->integer('numOfPassangers');
            $table->string('user');
            $table->timestamps();
        });
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string('nameOfVehicle');
            $table->string('vehicleModel');
            $table->string('email')->nullable(false);
            $table->string('whereTo');
            $table->string('reason');
            $table->timestamps();
        });
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('model');
            $table->integer('quantity');
            $table->integer('numOfSeats');
            $table->integer('rate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
        Schema::dropIfExists('requests');
        Schema::dropIfExists('vehicles');
    }
};
