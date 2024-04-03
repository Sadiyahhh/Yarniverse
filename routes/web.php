<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\ProjectController;



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

Route::get('/checkout', function () {
    return view('checkout');
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

//Route for amigurumi patterns
Route::get('/amigurumi', [ProductController::class, 'amigurumi'])->name('amigurumi');

//Route for clothing patterns
Route::get('/clothing', [ProductController::class, 'clothing'])->name('clothing');

//Route for accessories patterns
Route::get('/accessories', [ProductController::class, 'accessories'])->name('accessories');

//Route for pets patterns
Route::get('/pets', [ProductController::class, 'pets'])->name('pets');

//Route for home decor patterns
Route::get('/homedecor', [ProductController::class, 'homedecor'])->name('homedecor');

//Basket routing
Route::get('/basket', [BasketController::class, 'index'])->name('basket');

// Adding a product to basket
Route::post('/basket/add', [BasketController::class, 'add'])->name('basket.add');

//Removing product from basket
Route::post('/basket/remove', [BasketController::class, 'remove'])->name('basket.remove');

//Checkout function
Route::post('/basket/checkout', [BasketController::class, 'checkout'])->name('basket.checkout');

//Route to show subtotal
// Route::get('/basket', [BasketController::class, 'getBasketTotalAmount']);

//Project routes
Route::get('/myprojects', [ProjectController::class, 'index']);
Route::post('/addproject', [ProjectController::class, 'store'])->name('addproject');