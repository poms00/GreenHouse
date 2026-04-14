<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeviceController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/devices', [DeviceController::class, 'index'])->name('devices.index');
Route::get('/devices/{code}', [DeviceController::class, 'show'])->name('devices.show');