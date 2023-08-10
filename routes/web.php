<?php

use App\Http\Controllers\AccessoriesCategoryController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PlantCategoriesController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\AccountController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\FaqController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ShopController;
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
    Route::middleware(['auth','prevent-back-history'])->group(function(){

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
Route::get('/shop/{id?}',[ShopController::class,'index'])->name('shop.index');
Route::get('/shop/product/detail/{id?}',[ShopController::class,'detail'])->name('shop.detail');


//Admin Routes
Route::middleware(['isAdmin','auth','prevent-back-history'])->prefix('admin')->name('admin.')->group(function () {
// Route::middleware(['auth','isAdmin'])->prefix('admin')->name('admin.')->group(function () {

    //Dashboard Controller
    Route::controller(DashboardController::class)->group(function () {
        
        Route::get('/','index')->name('dashboard');
        Route::get('dashboard','index')->name('dashboard');

    });
    //User Controller
    Route::controller(UserController::class)->group(function () {
        Route::get('usersList','index')->name('user');
        Route::get('deleteUser/{user}','destroy')->name('deleteUsers');

    });
    //PLant Categories controller
    Route::controller(PlantCategoriesController::class)->group(function () {
        //plant categories
        Route::get('categories/plantCategory','index')->name('showPlantCategories');
        Route::post('categories/AddPlantCategory','store')->name('addPlantCategories');
        Route::get('categories/editPlantCategory/{category}','edit')->name('editPlantCategories');
        Route::put('categories/UpdatePlantCategory','update')->name('UpdatePlantCategories');
        Route::get('categories/deletePlantCategory/{category}','destroy')->name('deletePlantCategories');
    });
    // PLant Categories controller
    Route::controller(AccessoriesCategoryController::class)->group(function () {
        //plant categories
        Route::get('categories/AccessoryCategory','index')->name('showAccessoryCategories');
        Route::post('categories/AddAccessoryCategory','store')->name('AddAccessoryCategories');
        Route::get('categories/editAccessoryCategory/{category}','edit')->name('editAccessoryCategories');
        Route::put('categories/UpdateAccessoryCategory','update')->name('UpdateAccessoryCategories');
        Route::get('categories/deleteAccessoryCategory/{category}','destroy')->name('deleteAccessoryCategories');
    });

});




require __DIR__.'/auth.php';
