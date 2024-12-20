<?php

use App\Http\Controllers\admin\AdminDashboard;
use App\Http\Controllers\user\UserDashboard;
use Illuminate\Support\Facades\Route;


Route::name('Admin.')->prefix('Admin')->middleware('auth', 'admin')->group(function () {
    Route::get('/Dashboard', [AdminDashboard::class, 'index'])->name('Dashboard');
});
