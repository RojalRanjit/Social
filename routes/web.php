<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/login', [HomeController::class, 'login'])->name('login');
// Route::get('/login', function(){
// return view('login');
// });

Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'registerUser'])->name('registerUser');