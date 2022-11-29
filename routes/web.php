<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;


Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard')->middleware(['auth']);
// Route::post('/', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'loginUser'])->name('loginUser');

Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'registerUser'])->name('registerUser');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');