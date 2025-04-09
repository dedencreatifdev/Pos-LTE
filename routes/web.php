<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


// sudah login
Route::middleware(['auth'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin', 'indexAdmin')->name('dashboard.indexAdmin');
    });
});

// belum login
Route::middleware(['guest'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'indexToko')->name('dashboard.indexToko');
    });
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'authenticate')->name('login.Authenticate');
    });
});
