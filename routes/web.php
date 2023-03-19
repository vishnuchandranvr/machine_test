<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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



Route::group([], function () {
   
    Route::get('/', [UserController::class, 'show'])->name('user_login.show');
    Route::get('/registration', [UserController::class, 'registration'])->name('user_registration.show');
    Route::post('/register', [UserController::class, 'register'])->name('user_register');
    Route::post('/login', [UserController::class, 'login'])->name('login');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

    Route::middleware(['auth'])->group(function () {
        Route::group(['prefix' => 'product'],function (){

            Route::get('/', [ProductController::class, 'index'])->name('product.index'); 
        });

    });
    
});
