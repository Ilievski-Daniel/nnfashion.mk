<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    
    public function create(){
        return view('products.add');
    }
    public function store(Request $request){
        DB::transaction(function() use ($request) {
            Product::create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price
            ]);
        });

        return redirect()->route('dashboard');
    }
}
