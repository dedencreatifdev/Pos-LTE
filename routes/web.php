<?php

use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::controller(DashboardAdminController::class)->group(function () {
    Route::get('/', 'index')
        ->name('admin.dashboard.index');
});

Route::controller(ProdukController::class)->group(function () {
    Route::get('/produk', 'index')
        ->name('admin.produk.index');
});
