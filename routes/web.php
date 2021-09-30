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
Route::get('/cart', [\App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::get('/', [\App\Http\Controllers\HomeController::class, 'show'])->name('root');
Route::post('/updatecart', [\App\Http\Controllers\CartController::class, 'updateCart'])->name('updateCart');

//resource routes
Route::resource('categories', \App\Http\Controllers\CategoryController::class, ['parameters' => ['categories' => 'category:name']]);
Route::resource('products', \App\Http\Controllers\ProductController::class, ['parameters' => ['products' => 'product:slug']]);
Route::resource('manufacturers', \App\Http\Controllers\ManufacturerController::class, ['parameters' => ['manufacturers' => 'manufacturer:name']]);

// checkout
Route::get('/checkout', [\App\Http\Controllers\CartController::class, 'store'])->name('checkout');