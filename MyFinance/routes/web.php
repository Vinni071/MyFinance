<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Public routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');

// Authentication routes (Laravel Fortify handles these automatically)
// Just make sure the views are properly named

// Protected routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
});

require __DIR__.'/settings.php';