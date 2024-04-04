<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Basket;
use App\Models\Product;
use App\Models\Purchase;

class PurchaseController extends Controller
{
    public function index() {
        $purchases =  DB::table('purchases')
        ->join('products', 'purchases.productID', '=', 'products.productID')
        ->where('purchases.userID', '=', auth()->id())
        ->select('products.*')
        ->get();
        return view('myprojects', [
            'purchases' => $purchases,
        ]);
    }
}