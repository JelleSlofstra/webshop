<?php

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

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [\App\Http\Controllers\HomeController::class, 'show'])->name('root');

//resource routes
Route::resource('categories', \App\Http\Controllers\CategoryController::class, ['parameters' => ['categories' => 'category:name']]);
Route::resource('products', \App\Http\Controllers\ProductController::class, ['parameters' => ['products' => 'product:slug']]);
Route::resource('manufacturers', \App\Http\Controllers\ManufacturerController::class, ['parameters' => ['manufacturers' => 'manufacturer:name']]);
Route::resource('orders', \App\Http\Controllers\OrderController::class)->middleware('auth');

//cart functionality
Route::get('/cart', [\App\Http\Controllers\CartController::class, 'show'])->name('cart');
Route::post('/emptycart', [\App\Http\Controllers\CartController::class, 'emptyCart'])->name('emptyCart');
Route::post('/addtocart', [\App\Http\Controllers\CartController::class, 'addToCart'])->name('addToCart');
Route::post('/removeonefromcart', [\App\Http\Controllers\CartController::class, 'removeOneFromCart'])->name('removeOneFromCart');
Route::post('/removeallFromCart', [\App\Http\Controllers\CartController::class, 'removeAllFromCart'])->name('removeAllFromCart');

//checkout functionality
Route::post('/checkout', [\App\Http\Controllers\OrderController::class, 'store'])->name('checkout');
Route::get('/payment', [\App\Http\Controllers\CartController::class, 'payment'])->name('payment')->middleware('auth');
