<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\SignController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\KategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;

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

    Route::post("/logout", [LoginController::class, "logout"]);

    Route::get('/cooperative', [LoginController::class, 'cooperative'])->name("home");
    Route::get('/library', [LoginController::class, 'library']);

    Route::get('/my-cart', [CartController::class, 'index']);


    Route::get('/chat', [InfoController::class, 'chat']);
    Route::get('/history', [InfoController::class, 'history']);
    // Route::get('/transaksi', [InfoController::class, 'transaksi']);
    Route::get('/edit-my-address', [InfoController::class, 'editMyAddress']);

    // MY PROFILE
    Route::get('/my-profile', [InfoController::class, 'profile']);
    Route::get('/edit-my-profile', [InfoController::class, 'editprofile']);
    Route::post("/edit-my-profile", [LoginController::class, "aksiEditProfile"]);

    Route::resource("/account-setting", AccountController::class);


    Route::post('/pay-now', [InfoController::class, "payNow"]);


    // ADDRESS
    Route::resource("/my-address", AddressController::class);


    // CHECKOUT
    Route::get('/checkout', [PaymentController::class, 'checkout']);
    Route::post('/checkout', [PaymentController::class, 'aksiCheckout']);

    Route::post("/cart", [CartController::class, "addCart"]);
    Route::get("/cart/{id}", [CartController::class, "deleteCart"]);
    Route::get('/product', [PaymentController::class, 'infoProduct']);



    // ADMIN
    Route::get("/admin", [AdminController::class, "index"]);


    Route::get("/admin-user", [AdminController::class, "user"]);
    Route::get("/user-delete/{id}", [LoginController::class, "deleteUser"]);
    Route::post("/user-edit", [LoginController::class, "editUser"]);

    Route::get("/admin-banner", [AdminController::class, "banner"]);
    Route::post("/admin-banner", [AdminController::class, "addBanner"]);
    Route::get("/admin-banner/{id}", [AdminController::class, "editBanner"]);



    Route::resource('/admin-chat', ChatController::class);
    Route::resource('/admin-products', ProductController::class);

    // ADD DETAIL PRODUCT
    Route::post("/admin-detail", [AdminController::class, "addDetail"]);
    Route::get("/admin-detail/{id}", [AdminController::class, "deleteDetail"]);

    Route::resource('/admin-category', KategoryController::class);
    Route::resource('/admin-order', OrderController::class);
});
