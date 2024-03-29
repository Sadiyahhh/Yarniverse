<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/basket', function () {
    return view('basket');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/myprojects', function () {
    return view('myprojects');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/myprojects', function () {
    return view('myprojects');
});

Route::get('/purchasehistory', function () {
    return view('purchasehistory');
});

//Route for all products
Route::get('/shop', [ProductController::class, 'allProducts'])->name('products.allProducts');

//Route for a single product
Route::get('/pattern/{id}', [ProductController::class, 'item']);

// Route for search function
Route::get('/search', [ProductController::class, 'search'])->name('search');
