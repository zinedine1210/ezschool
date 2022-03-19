<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\InfoController;
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

    Route::get('/my-cart', [CartController::class, 'index']);

    Route::get('/product', [InfoController::class, 'index']);
    Route::get('/address', [InfoController::class, 'address']);
    Route::get('/shipment-method', [InfoController::class, 'shipment']);
    Route::get('/edit-my-profile', [InfoController::class, 'editprofile']);
    Route::get('/my-profile', [InfoController::class, 'profile']);
    Route::get('/account-setting', [InfoController::class, 'account']);
    Route::get('/chat', [InfoController::class, 'chat']);
    Route::get('/history', [InfoController::class, 'history']);
    Route::get('/transaksi', [InfoController::class, 'transaksi']);
    Route::get('/my-address', [InfoController::class, 'myAddress']);
    Route::get('/edit-my-address', [InfoController::class, 'editMyAddress']);


    Route::post('/pay-now', [InfoController::class, "payNow"]);
});
