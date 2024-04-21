<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Basket;
use App\Models\Product;
use App\Models\Purchase;

class BasketController extends Controller
{
    public function index() {
        $basket =  DB::table('baskets')
        ->where('baskets.userID', '=', auth()->id())
        ->join('products', 'baskets.productID', '=', 'products.productID')
        ->select('baskets.basketID', 'products.*')
        ->get();

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

        return back()->with('add', 'Added to basket.');
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
        Basket::where('basketID', $request->basketID)->delete();

        return back()->with('success', 'Product removed from your basket.');
    }

    //Checkout function 
    public function checkout()
    {
        $basket =  DB::table('baskets')
        ->where('baskets.userID', '=', auth()->id())
        ->select('baskets.*')
        ->get();

        foreach ($basket as $item) {
            $purchase = Purchase::create([
                'userID' => $item->userID,
                'productID' => $item->productID, 
            ]);
        }

        DB::table('baskets')->where('userID', '=', auth()->id())->delete();

        return view('basket');

    }
}