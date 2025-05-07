<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'handleLogin'])->name('login.post');

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [PageController::class, 'profile'])->name(name: 'profile');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/logout', action: [PageController::class, 'logout'])->name('logout');
Route::post('/logout', [PageController::class, 'logout'])->name('logout');
