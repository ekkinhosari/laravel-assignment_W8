<?php

use App\Http\Controllers\FirstController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    dd('Hello World');
    return view('welcome');
});

Route::get('/hi', function () {
    return "Hi All!";
})->name('hi');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/home/sum', [FirstController::class, 'sum'
])->name('home.sum');

Route::get('/home', [HomeController::class, 'show'
])->name('home.show');

Route::get('/store', function () {
    return view('store');
})->name('store');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/store', [StoreController::class, 'show'
])->name('store');