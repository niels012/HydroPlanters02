<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('dashboardlte1', \App\Http\Controllers\UserLoginController::class)->middleware('auth');

Route::get('usersignup', [\App\Http\Controllers\AuthController::class, 'usersignup'])->name('usersignup');
Route::post('register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');

Route::get('userlogin', [\App\Http\Controllers\AuthController::class, 'userlogin'])->name('userlogin');
Route::post('authenticate', [\App\Http\Controllers\AuthController::class, 'authenticate'])->name('authenticate');

Route::get('userlogout', [\App\Http\Controllers\AuthController::class, 'userlogout'])->name('userlogout');

