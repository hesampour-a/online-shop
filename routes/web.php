<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('product.index');
});

Route::resource('product', ProductController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('shopping-cart', [CartController::class, 'show'])->name('shopping-cart.show');

//Route::resource('cart-item', CartItemController::class)->only('store');
Route::resource('cart-item', CartItemController::class)->only('update', 'destroy');
Route::post('cart-item/{product}', [CartItemController::class, 'store'])->name('cart-item.store');
