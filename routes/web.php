<?php

use App\Http\Controllers\Admin\AccessoriesCategoryController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ApiController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\orderController;
use App\Http\Controllers\Admin\PlantCategoriesController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\AccountController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\FaqController;
use App\Http\Controllers\User\FeedbackController;
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
    
    Route::get('/feedback',[FeedbackController::class,'index'])->name('feedback.index');
    Route::post('/submit-feedback', [FeedbackController::class, 'submit_feedback'])->name('submit.feedback');

    //authenticated routes
    Route::middleware(['auth','prevent-back-history'])->group(function(){

        Route::get('/account',[AccountController::class,'index'])->name('account.index');
        Route::put('/account/update',[AccountController::class,'update'])->name('account.update');

        Route::get('/order/{id}',[AccountController::class,'viewOrder'])->name('order.details');
        Route::get('/orderCancel/{id}',[AccountController::class,'cancelOrder'])->name('order.cancel');

        // cartController
        Route::get('/cart',[CartController::class,'index'])->name('cart.index');
        Route::get('/get/cart',[CartController::class,'cart'])->name('cart.cart');
        Route::post('/cart/add/',[CartController::class,'add'])->name('cart.add');
        Route::get('/cart/updateQuantity/',[CartController::class,'updateQuantity'])->name('cart.updateQuantity');
        Route::get('/cart/removeCartItem',[CartController::class,'remove'])->name('cart.remove');

        //Wishlist
        Route::get('/wishlist',[WhishListController::class,'index'])->name('wishlist.index');
        Route::get('/wishlist/add/{id}', [WhishListController::class,'addToWishlist'])->name('wishlist.add');
        Route::get('/wishlist/remove/{id}', [WhishListController::class,'removeFromWishlist'])->name('wishlist.remove');
        
        Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout.index');
        Route::post('/checkout/submit',[CheckoutController::class,'submit_checkout'])->name('checkout.submit');
        Route::post('/product/{id}/review/submit',[AccountController::class,'storeReview'])->name('product.review.submit');
    
    });

});

Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::get('/about',[AboutController::class,'index'])->name('about.index');
Route::get('/faq',[FaqController::class,'index'])->name('faq.index');
Route::get('/shop/{id?}',[ShopController::class,'index'])->name('shop.index');
Route::get('/shop/product/detail/{id?}',[ShopController::class,'detail'])->name('shop.detail');




//Admin Routes
Route::middleware(['isAdmin','auth','prevent-back-history'])->prefix('admin')->name('admin.')->group(function () {
// Route::middleware(['auth','isAdmin'])->prefix('admin')->name('admin.')->group(function () {

    Route::controller(AdminController::class)->group(function () {
        Route::get('/contact','contact')->name('showContact');
        Route::get('/feedback','feedback')->name('showFeedback');
    });
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
        //accessory categories
        Route::get('categories/AccessoryCategory','index')->name('showAccessoryCategories');
        Route::post('categories/AddAccesoriesCategory','store')->name('AddAccessoryCategories');
        Route::get('categories/editAccessoryCategory/{category}','edit')->name('editAccessoryCategories');
        Route::put('categories/UpdateAccessoryCategory','update')->name('UpdateAccessoryCategories');
        Route::get('categories/deleteAccessoryCategory/{category}','destroy')->name('deleteAccessoryCategories');
    });
    // Product controller
    Route::controller(AdminProductController::class)->group(function () {
        //products
        Route::get('product/allproducts','index')->name('showProducts');
        Route::post('product/allproducts','index')->name('showProducts');
        Route::get('product/addProducts','create')->name('AddProducts');
        Route::post('product/storeProducts','store')->name('StoreProducts');
        Route::get('product/editProducts/{id}','edit')->name('editProducts');
        Route::put('product/updateProducts','update')->name('UpdateProducts');
        Route::get('product/deleteProducts/{id}','destroy')->name('deleteProducts');
        Route::get('product/deleteImage/{id}','deleteImage')->name('deleteImage');
        Route::get('product/status/{id}','changeProductStatus')->name('changeProductStatus');
        // product reviews
        Route::get('product/productReviews','productReviews')->name('productReviewShows');
        Route::get('product/productsDetail/{id}','productDetail')->name('productDetailShows');

    });
    // Order controller
    Route::controller(orderController::class)->group(function () {
        //orders
        Route::get('orders/allOrders','index')->name('showOrder');
        Route::get('orders/orderStatus/{id}/{status}','orderStatusChange')->name('changeOrderStatus');
       
    });
    // Api Fetch subb category controller
    Route::controller(ApiController::class)->group(function () {
        Route::post('api/fetch-subcategory','fetchSubcategoryApi')->name('fetchSubCategory');
        Route::post('api/productsByCategory','productsByCategory')->name('productsByCategory');
    });

});




require __DIR__.'/auth.php';
