<?php

use App\Http\Controllers\Admin\AccessoriesCategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PlantCategoriesController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
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
Route::controller(HomeController::class)->group(function () {

    Route::get('/','index')->name('user.home');
    Route::get('home','index');

    Route::post('/submit-contact', [ContactController::class, 'submit_contact'])->name('submit.contact');

    //authenticated routes
    Route::middleware(['auth','prevent-back-history'])->group(function(){

        Route::get('/account',[AccountController::class,'index'])->name('account.index');
    
    });

});
// cartController
Route::get('/cart',[CartController::class,'index'])->name('cart.index');
Route::post('/cart/add/{id}',[CartController::class,'add'])->name('cart.add');
Route::post('/cart/updateQuantity/{id}',[CartController::class,'updateQuantity'])->name('cart.updateQuantity');


Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout.index');
Route::get('/account',[AccountController::class,'index'])->name('account.index');
Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::get('/about',[AboutController::class,'index'])->name('about.index');
Route::get('/faq',[FaqController::class,'index'])->name('faq.index');
Route::get('/shop/{id?}',[ShopController::class,'index'])->name('shop.index');
Route::get('/shop/product/detail/{id?}',[ShopController::class,'detail'])->name('shop.detail');

Route::get('/wishlist',[WhishListController::class,'index'])->name('wishlist.index');
Route::post('/wishlist/add/{id}', [WishlistControlle::class,'addToWishlist'])->name('wishlist.add');
Route::post('/wishlist/remove/{id}', [WishlistControlle::class,'removeFromWishlist'])->name('wishlist.remove');



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
        Route::post('categories/AddAccesoriesCategory','store')->name('AddAccessoryCategories');
        Route::get('categories/editAccessoryCategory/{category}','edit')->name('editAccessoryCategories');
        Route::put('categories/UpdateAccessoryCategory','update')->name('UpdateAccessoryCategories');
        Route::get('categories/deleteAccessoryCategory/{category}','destroy')->name('deleteAccessoryCategories');
    });
    // Produc controller
    Route::controller(AdminProductController::class)->group(function () {
        //plant categories
        Route::get('product/allproducts','index')->name('showProducts');
        Route::get('product/addProducts','create')->name('AddProducts');
        Route::get('product/storeProducts','store')->name('StoreProducts');
        Route::get('product/product/edit/{category}','edit')->name('editProducts');
        Route::put('product/updateProducts','update')->name('UpdateProducts');
        Route::get('product/deleteProducts/{category}','destroy')->name('deleteProducts');
    });

});




require __DIR__.'/auth.php';
