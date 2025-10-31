<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Public routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/register', [PageController::class, 'register'])->name('register');
Route::get('/login', [PageController::class, 'login'])->name('login');  

// Authentication routes (Laravel Fortify handles these automatically)
// Just make sure the views are properly named

// Protected routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/app', [PageController::class, 'app'])->name('app');
});

require __DIR__.'/settings.php';