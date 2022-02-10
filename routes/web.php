<?php

use App\Http\Controllers\ChangePasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignController;
use App\Http\Controllers\LoginController;

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
    return view('index');
})->name('login');

Route::middleware(['guest'])->group(function () {
    Route::post('/verification', [LoginController::class, 'verification']);
    Route::get('/get-started-in', [LoginController::class, 'index']);
    Route::post('/get-started-in', [LoginController::class, 'authenticate']);
    Route::resource('/get-started-up', SignController::class);

    // forgot password
    Route::get('/forgot-my-password', [ChangePasswordController::class, 'identification']);
    Route::post('/verification-my-password', [ChangePasswordController::class, 'verification']);
    Route::post('/process', [ChangePasswordController::class, 'store']);
    Route::post('/change-password', [ChangePasswordController::class, 'changepassword']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/gate', [LoginController::class, 'gate']);


    Route::get('/cooperative', [LoginController::class, 'cooperative']);
    Route::get('/library', [LoginController::class, 'library']);
});
