<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Halaman Login
Route::get('/', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'authenticate'])->name('login.submit');

// Halaman Setelah Login
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');