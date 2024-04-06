<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function allProducts (Request $request) 
    {
        // $products = Product::all();

        // Method to sort products by price filter if needed, otherwise display all products, 12 per page.
        if ($request->exists('sort')) {
            $products = Product::orderBy('productPrice', $request->query('sort'))->paginate(12);
       } else {
            $products = Product::paginate(12);
       }
        return view ('shop', ['products' => $products]);
    }

    public function carousel()
    {
        //Method created to get data from the 'product' table and to show them on the products view in carousel.
        $products = Product::skip(5)->take(16)->get();
        return $products;
    }

    public function item ($productID) 
    {
        // Method to fetch/return single product - used on pattern details page.
        $item = Product::findOrFail($productID);
        return view ('pattern', ['item' => $item]);
    }

    // Search function to filter searches by product name, category, creator. 
    public function search(Request $request)
    {
        // Products that appear are then sorted by price, lowest upward.
        $products = Product::when($request->search, function ($query, $search) {

            //Searchbar functionality to only show results that match name, category or creator.
            return $query->where(function ($query) use ($search) {
            $query->where('productName', 'like', $search = "%{$search}%")
                ->orWhere('productCategory', 'like', $search)
                ->orWhere('productCreator', 'like', $search);
            });

        })->when($request->category && $request->category != 'all', function ($query) use ($request) {

            return $query->whereHas('productCategory', function ($query) use ($request) {
                $query->where('slug', $request->category);
            });

        })->orderBy('productPrice')->paginate();

    return view('shop', compact('products'));
    }

    //Below functions are to fetch respective product categories when clicked on via navbar. 
    public function amigurumi (Request $request) {
        if ($request->exists('sort')) {
            $products = Product::where('productCategory' , 'Amigurumi')->orderBy('productPrice', $request->query('sort'))->paginate();
       } else {
            $products = Product::where('productCategory' , 'Amigurumi')->paginate();
       }
        return view('shop', [ 'products' => $products ]);
    }

    public function clothing (Request $request) {
        if ($request->exists('sort')) {
            $products = Product::where('productCategory' , 'Clothing')->orderBy('productPrice', $request->query('sort'))->paginate();
       } else {
            $products = Product::where('productCategory' , 'Clothing')->paginate();
       }
        return view('shop', ['products' => $products ]);
    }

    public function accessories (Request $request) {
        if ($request->exists('sort')) {
            $products = Product::where('productCategory' , 'Accessories')->orderBy('productPrice', $request->query('sort'))->paginate();
       } else {
            $products = Product::where('productCategory' , 'Accessories')->paginate();
       }
        return view('shop', ['products' => $products ]);
    }

    public function pets (Request $request) {
        if ($request->exists('sort')) {
            $products = Product::where('productCategory' , 'Pets')->orderBy('productPrice', $request->query('sort'))->paginate();
       } else {
            $products = Product::where('productCategory' , 'Pets')->paginate();
       }
        return view('shop', ['products' => $products ]);
    }

    public function homedecor (Request $request) {
        if ($request->exists('sort')) {
            $products = Product::where('productCategory' , 'Home Decor')->orderBy('productPrice', $request->query('sort'))->paginate();
       } else {
            $products = Product::where('productCategory' , 'Home Decor')->paginate();
       }
        return view('shop', ['products' => $products ]);
    }

}
