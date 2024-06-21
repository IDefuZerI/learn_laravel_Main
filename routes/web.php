<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use \App\Http\Controllers\ContactController;
use \App\Http\Controllers\CheckController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{cat}', [ProductController::class, 'showCategory'])->name('showCategory');
Route::get('/category/{cat}/{product_id}', [ProductController::class, 'show'])->name('showProduct');
Route::get('/cart', [CartController::class, 'index'])->name('cartIndex');
Route::get('/contact', [ContactController::class, 'contact'])->name('contactShow');
Route::get('/check', [CheckController::class, 'check'])->name('checkShow');




