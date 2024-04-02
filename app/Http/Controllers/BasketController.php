<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Basket;
use App\Models\Product;

class BasketController extends Controller
{
    public function index() {
        $basket =  DB::table('baskets')
        ->where('baskets.userID', '=', auth()->id())
        ->join('products', 'baskets.productID', '=', 'products.productID')
        ->select('baskets.basketID', 'products.*')
        ->get();

        // if (count($basket) == 0) {
        //     return view('emptybasket');
        // }

        return view('basket', [
            'basket' => $basket,
        ]);
    }

    // Function to add product to basket
    public function add(Request $request)
    {
        $productID = $request->product;

        $basket = Basket::create([
            'userID' => auth()->id(),
            'productID' => $productID, 
        ]);

        return back()->with('success', 'Product added to your basket.');
        return view('basket', [ 'products' => $products ]);
    }

    //
    public function get(Request $request) {
        return DB::table('baskets')
        ->where('baskets.userID', '=', auth()->id())
        ->select('baskets.*');
    }

    //Get total amount of users basket (does not need total column on basket table)
    public function getBasketTotalAmount(Request $request) {
        return DB::table('baskets')
            ->where('baskets.userID', '=', auth()->id())
            ->join('products', 'baskets.productID', '=', 'products.productID')
            ->sum('products.productPrice');
    }

    //Get basket for user with product price included (does not need total column on basket table)
    public function getDetailedBasket(Request $request) {
        return DB::table('baskets')
        ->where('baskets.userID', '=', auth()->id())
        ->join('products', 'baskets.productID', '=', 'products.productID')
        ->select('baskets.*', 'products.productPrice');
    }

    //Removing product from basket
    public function remove(Request $request)
    {
        error_log($request->basketID);
        Basket::where('basketID', $request->basketID)->delete();

        return back()->with('success', 'Product removed from your basket.');
    }

    //Checkout function 
    public function checkout(Request $request)
    {
    $basket = Basket::where('userID', auth()->id())->where('completed', false)->firstOrFail();

    // Here, you might add payment processing before completing the order
    // For simplicity, we're directly marking it as completed

    $basket->completed = true;
    $basket->save();

    return redirect()->route('shop')->with('success', 'Checkout completed successfully.');
    }
}