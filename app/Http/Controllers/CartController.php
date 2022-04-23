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
    public function store(Request $request, $id){

                Cart::create([
                    'product_id' => $id,
                    'colors' => $request->colors,
                    'sizes' => $request->sizes,
                    'productName' =>  $request->productname,
                    'productPrice' => $request->productprice,
                    'quantity' => $request->quantity
                ]);
        return redirect()->route('shop');
    }
    public function destroy($id){
        $cart = Cart::where('id', $id)->first();
        Cart::where('id', $id)->delete();
        return back();
    }
    public function destroyAll(){
        $cart = Cart::all();
        foreach($cart as $deleteCart){
            $deleteCart->delete();
        }
        return back();
    }
}
