<?php

use App\Http\Controllers\Vehicle\VehicleController;
use App\Http\Controllers\RequestVehicleController;
use Illuminate\Support\Facades\Route;

Route::middleware('ensureAdminRole')->group(function () {
    Route::get('admin/vehicles', [VehicleController::class, 'admin_index'])->name('admin-vehicles');
    Route::get('admin/vehicles/create', [VehicleController::class, 'create'])->name('vehicles.create');
    Route::post('admin/vehicles', [VehicleController::class, 'store'])->name('vehicles.store');
    Route::get('admin/vehicles/{vehicle}', [VehicleController::class, 'show'])->name('vehicles.show');
    Route::get('admin/vehicles/{vehicle}/edit', [VehicleController::class, 'edit'])->name('vehicles.edit');
    Route::put('admin/vehicles', [VehicleController::class, 'update'])->name('vehicles.update');
    Route::delete('admin/vehicles/{vehicle}', [VehicleController::class, 'destroy'])->name('vehicles.destroy');
    Route::get('/requests', [RequestVehicleController::class, 'viewRequests'])->name('view-requests');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/vehicles/request', [RequestVehicleController::class, 'create'])->name('vehicles.request');
    Route::get('/vehicles/request/{vehicle}', [RequestVehicleController::class, 'specific_create'])->name('vehicles.specific-request');
    Route::post('/vehicles/request/create', [RequestVehicleController::class, 'store'])->name('vehicles.request.store');
});

