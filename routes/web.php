<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', [PageController::class, 'welcome'])->name('welcome');
Route::get('/about-us', [PageController::class, 'about'])->name('about.us');
// about us
Route::get('/documentation', [PageController::class, 'documentation'])->name('documentation');
Route::get('/our-resource', [PageController::class, 'ourResource'])->name('our.resource');
Route::get('/quality-control', [PageController::class, 'qualityControl'])->name('quality.control');
Route::get('/process-production', [PageController::class, 'processProduction'])->name('process.production');
Route::get('/guideline', [PageController::class, 'guideLine'])->name('guide.line');
// products
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contact.us');
Route::get('/dried-ginger', [PageController::class, 'ginger'])->name('dried.ginger');
Route::get('/wet-ginger', [PageController::class, 'wetGinger'])->name('wet.ginger');
Route::get('/dried-turmeric', [PageController::class, 'driedTurmeric'])->name('dried.turmeric');
Route::get('/turmeric-powder', [PageController::class, 'tumericPowder'])->name('tumeric.powder');
Route::get('/finger-turmeric', [PageController::class, 'fingerTumeric'])->name('finger.tumeric');
Route::get('/testimonial', [PageController::class, 'testimonial'])->name('testimonial');