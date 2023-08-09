<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\HomeController;
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

//Admin Routes
Route::middleware(['auth','isAdmin'])->prefix('admin')->name('admin.')->group(function () {

    //Dashboard Controller
    Route::controller(DashboardController::class)->group(function () {

        Route::get('/','index');
        Route::get('dashboard','index');

    });

});




require __DIR__.'/auth.php';
