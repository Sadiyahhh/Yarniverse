<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function allProducts () 
    {
        $products = Product::all();
        return view ('shop', ['products' => $products]);
    }

    public function item ($productID) 
    {
        $item = Product::findOrFail($productID);
        return view ('pattern', ['item' => $item]);
    }
}
