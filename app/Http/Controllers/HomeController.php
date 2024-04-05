<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

//have to import this to call any product database query
use Exception;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index () {
        //gets a list of all products from the products table and stores them in $products
        //limits number of products fetched to 12 for carousel
        $products = Product::skip(0)->take(12)->get();


        //returns the page to navigate to
        return view('welcome', [
            //passing $products into the welcome page as a products variable
            'products' => $products,
        ]);
    }
}

