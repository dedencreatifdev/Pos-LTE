<?php

use App\Http\Controllers\DashboardController;
use App\Livewire\Dashboard\DashboardIndex;
use App\Livewire\Produk\ProdukIndex;
use Illuminate\Support\Facades\Route;

Route::get('/',DashboardIndex::class)->name('dashboard.index');
Route::get('/produk',ProdukIndex::class)->name('produk.index');
