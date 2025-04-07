<?php

use App\Http\Controllers\DashboardController;
use App\Livewire\Dashboard\DashboardIndex;
use Illuminate\Support\Facades\Route;

Route::get('/',DashboardIndex::class)->name('dashboard.index');
