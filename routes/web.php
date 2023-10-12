<?php

use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

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

Route::get('/main', [MainController::class, 'index'])->name('main');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/registrasi', [RegistrationController::class, 'index'])->name('registrasi');

Route::get('/forgotpassword', [ForgotPasswordController::class, 'index'])->name('forgotpassword');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/setting', [SettingController::class, 'index'])->name('setting');
