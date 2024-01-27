<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
//User
Route::get('/', [HomeController::class, 'index']);
Route::get('/sign-in', [HomeController::class, 'index'])->name('sign-in');
Route::post('/signincode', [HomeController::class, 'signincode'])->name('signincode');
Route::get('/sign-up', [HomeController::class, 'signup'])->name('sign-up');
Route::get('/forgot-password', [HomeController::class, 'forgot_password']);
Route::get('/reset-password', [HomeController::class, 'reset_password']);
Route::post('/signupcode', [HomeController::class, 'signupcode'])->name('signupcode');
Route::middleware('auth')->group(function () {
    Route::get('/profile',  [HomeController::class, 'user_profile'])->name('profile');
    Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
});

//Admin
Route::get('/admin/login', [AdminController::class, 'index']);
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
