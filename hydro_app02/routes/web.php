<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('dashboard', \App\Http\Controllers\UserController::class)->middleware('auth');

Route::get('login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('authenticate', [\App\Http\Controllers\AuthController::class, 'authenticate'])->name('authenticate');

Route::get('signup', [\App\Http\Controllers\AuthController::class, 'signup'])->name('signup');
Route::post('register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');

Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::resource('products', ProductController::class);