<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;

// Redirect root ke home
Route::get('/', function () {
    return redirect()->route('home');
});

// Home page
Route::get('/home', [HomeController::class, 'show'])->name('home');

// Store page
Route::get('/store', [StoreController::class, 'show'])->name('store');

// About page
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/product/insert-form', [StoreController::class, 'product_insert_form'])->name('product_insert_form');

Route::post('/product/insert', [StoreController::class, 'insert_product'])->name('insert_product');

Route::get('/product/edit/{product_id}', [StoreController::class, 'product_edit_form'])->name('product_edit_form');

Route::put('/product/update/{product_id}', [StoreController::class, 'update_product'])->name('update_product');

Route::delete('/product/delete/{product_id}', [StoreController::class, 'delete_product'])->name('delete_product');