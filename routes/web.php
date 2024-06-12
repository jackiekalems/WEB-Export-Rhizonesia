<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', [PageController::class, 'about'])->name('about.us');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contact.us');
Route::get('/dried-ginger', [PageController::class, 'ginger'])->name('dried.ginger');