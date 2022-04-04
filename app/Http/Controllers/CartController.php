<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $cartproducts = Cart::all();
        return view('cart.index', compact('cartproducts'));
    }
    public function store(Request $request){

        Cart::create([
            'productName' =>  $request->productname,
            'productPrice' => $request->productprice,
            'quantity' => $request->quantity
        ]);

        return redirect()->route('cart');
    }
}
