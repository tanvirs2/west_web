<?php

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

Route::get('/', function () {
    return view('web.home.index');
})->name('home');


Route::get('/about_us', function () {
    return view('web.about_us.index');
})->name('about_us');

Route::get('/products', function () {
    return view('web.products.index');
})->name('products');

Route::get('/testimonials', function () {
    return view('web.testimonials.index');
})->name('testimonials');

Route::get('/contact', function () {
    return view('web.contact.index');
})->name('contact');


