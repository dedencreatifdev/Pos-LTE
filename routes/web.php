<?php

use App\Livewire\Admin\Dashboard\DasboardIndex;
use App\Livewire\Admin\Produk\ProdukEdit;
use App\Livewire\Admin\Produk\ProdukIndex;
use App\Livewire\Admin\Produk\ProdukTambah;
use Illuminate\Support\Facades\Route;

// Route::controller(DashboardAdminController::class)->group(function () {
//     Route::get('/', 'index')
//         ->name('admin.dashboard.index');
// });

// Route::controller(ProdukController::class)->group(function () {
//     Route::get('/produk', 'index')
//         ->name('admin.produk.index');
// });

Route::get('/', DasboardIndex::class)->name('admin.dashboard.index');
Route::get('/produk', ProdukIndex::class)->name('admin.produk.index');
Route::get('/produk-tambah', ProdukTambah::class)->name('admin.produk.tambah');
Route::get('/produk-edit/{id}', ProdukEdit::class)->name('admin.produk.edit');
