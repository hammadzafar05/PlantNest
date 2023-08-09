<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\AccountController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\FaqController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\WhishListController;
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

//User Routes

//Home Controller
Route::controller(HomeController::class)->name('user.')->group(function () {

    Route::get('/','index')->name('home');
    Route::get('home','index');

    //authenticated routes
    Route::middleware(['auth'])->group(function(){

        Route::get('home','index');

    });

});
// cartController
Route::get('/cart',[CartController::class,'index'])->name('cart.index');
Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout.index');
Route::get('/wishlist',[WhishListController::class,'index'])->name('wishlist.index');
Route::get('/account',[AccountController::class,'index'])->name('account.index');
Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::get('/about',[AboutController::class,'index'])->name('about.index');
Route::get('/faq',[FaqController::class,'index'])->name('faq.index');

//Admin Routes
Route::middleware(['auth','isAdmin'])->prefix('admin')->name('admin.')->group(function () {

    //Dashboard Controller
    Route::controller(DashboardController::class)->group(function () {

        Route::get('/','index');
        Route::get('dashboard','index');

    });

});




require __DIR__.'/auth.php';
