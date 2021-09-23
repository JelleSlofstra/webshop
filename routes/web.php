<?php


use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/laravel', function () {
    return view('welcome', [
        'categories' => Category::all() 
    ]);
});

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cart', [\App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::get('/', [\App\Http\Controllers\HomeController::class, 'show'])->name('root');

//cart functionality
Route::post('/addtocart', [\App\Http\Controllers\CartController::class, 'addToCart'])->name('addToCart');
Route::post('/removefromcart', [\App\Http\Controllers\CartController::class, 'removeFromCart'])->name('removeFromCart');
Route::get('/emptycart', [\App\Http\Controllers\CartController::class, 'emptyCart'])->name('emptyCart');

//resource routes
Route::resource('/categories', \App\Http\Controllers\CategoryController::class);
Route::resource('/products', \App\Http\Controllers\ProductController::class);
Route::resource('/manufacturers', \App\Http\Controllers\ManufacturerController::class);

// checkout
Route::get('/checkout', [\App\Http\Controllers\CartController::class, 'store'])->name('checkout');