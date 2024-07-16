<?php

use App\Http\Controllers\Schedule\ScheduleController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    Route::get('/schedule', [ScheduleController::class, 'index'])->name("schedule-index");
    Route::get("schedules/{schedule}", [ScheduleController::class, 'show'])->name("show-schedule");
});


Route::middleware(['auth', 'ensureAdminRole'])->group(function () {
    Route::get('/admin/schedules/create', [ScheduleController::class, 'create'])->name("create-schedule-view");
    Route::get('/admin/schedules/create/{vehicleRequest}', [ScheduleController::class, 'create_specific'])->name("create-specific-schedule");
    Route::post('/admin/schedules', [ScheduleController::class, 'store'])->name("create-schedule");
    Route::put('/admin/schedules/{schedule}', [ScheduleController::class, 'update'])->name("edit-schedule");
    Route::get('/admin/schedules/{schedule}/edit', [ScheduleController::class, 'edit'])->name("admin-edit-schedule-view");
    Route::get('/admin/schedules', [ScheduleController::class, 'admin_index'])->name("admin-view-schedules");
    Route::delete('/admin/schedules/{schedule}', [ScheduleController::class, 'destroy'])->name("delete-schedule");
});
