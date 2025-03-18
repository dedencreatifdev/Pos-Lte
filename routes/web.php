<?php

use App\Livewire\App\Dashboard\DashboardIndex;
use App\Livewire\App\Produk\ProdukIndex;
use Illuminate\Support\Facades\Route;

Route::get('/',DashboardIndex::class)->name('admin.dashboard.index');
Route::get('/produk',ProdukIndex::class)->name('admin.produk.index');
