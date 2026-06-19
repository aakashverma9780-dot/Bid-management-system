<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {

    // Login ke baad ye decide karega kis dashboard pe bhejna hai
    Route::get('/dashboard', [DashboardController::class, 'redirect'])->name('dashboard');

    // Admin only
    Route::middleware(['role:admin'])->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'admin'])->name('dashboard');
        Route::resource('users', UserController::class);
    });

    // Sales Manager only
    Route::middleware(['role:sales_manager'])->group(function () {
        Route::get('/sm/dashboard', [DashboardController::class, 'salesManager'])->name('sm.dashboard');
    });

    // Project Manager only
    Route::middleware(['role:project_manager'])->group(function () {
        Route::get('/pm/dashboard', [DashboardController::class, 'projectManager'])->name('pm.dashboard');
    });

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
