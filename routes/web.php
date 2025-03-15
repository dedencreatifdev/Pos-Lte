<?php

use App\Livewire\App\Dashboard\DashboardIndex;
use Illuminate\Support\Facades\Route;

Route::get('/',DashboardIndex::class)->name('admin.dashboard.index');
