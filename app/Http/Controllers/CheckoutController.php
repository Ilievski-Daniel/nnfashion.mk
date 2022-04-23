<?php

namespace App\Http\Controllers;

use App\Mail\CheckoutMail;
use App\Models\Cart;
use App\Models\Country;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function index(){
        $cartproducts = Cart::all();
        $countries = Country::all();
        return view('checkout', compact('cartproducts', 'countries'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'country' => 'required',
            'adress' => 'required',
            'city' => 'required',
            'email' => 'required|email',
        ]);
        DB::transaction(function() use($request) {
        $cartproducts = Cart::all();
        foreach($cartproducts as $cartproduct){
            Order::create([
                'product_id' => $cartproduct->product_id,
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'country' => $request->country,
                'color' => $cartproduct->colors,
                'size' => $cartproduct->sizes,
                'adress' => $request->adress,
                'city' => $request->city,
                'postalCode' => $request->postalNum,
                'email' => $request->email,
                'number' => $request->contact,
                'complaint' => $request->zabeleska
            ]);
        }
        
        Mail::to('stojanovdavid4@gmail.com')->send(new CheckoutMail);
        
    });
    
    return redirect()->back()->with('message', 'You have ordered your products');

    }

}
