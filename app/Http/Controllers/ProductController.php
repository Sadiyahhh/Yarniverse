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

    public function item ($productID) 
    {
        // Method to fetch/return single product - used on pattern details page.
        $item = Product::findOrFail($productID);
        return view ('pattern', ['item' => $item]);
    }

    public function search(Request $request)
    {
        // Search function to filter searches by product name, category, creator. 
        // Products that appear are then sorted by price, lowest upward.
        $products = Product::when($request->search, function ($query, $search) {

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
}
