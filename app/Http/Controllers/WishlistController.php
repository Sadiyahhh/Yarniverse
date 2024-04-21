<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Wishlist;

class WishlistController extends Controller
{

    public function index() {
        $wishlist =  DB::table('wishlists')
        ->where('wishlists.userID', '=', auth()->id())
        ->join('products', 'wishlists.productID', '=', 'products.productID')
        ->select('wishlists.wishlistID', 'products.*')
        ->get();

        return view('wishlist', [
            'wishlist' => $wishlist,
        ]);
    }

    // Function to add product to the wishlist
    public function addToWishlist(Request $request)
    {
        $productID = $request->product;

        $wishlist = Wishlist::create([
            'userID' => auth()->id(),
            'productID' => $productID, 
        ]);

        return back()->with('wishlist-add', 'Added to wishlist.');
        return view('wishlist', [ 'products' => $products ]);
    }

    //Function to remove product from wishlist
    public function removeFromWishlist(Request $request)
    {
        Wishlist::where('wishlistID', $request->wishlistID)->delete();

        return back()->with('success', 'Product removed from your wishlist.');
    }

}
