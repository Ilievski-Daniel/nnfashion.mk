<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    
    public function index(){
        $products = Product::all();
        return view('products.index', compact('products'));
    }


    public function create(){
        $colors = Color::all();
        $sizes = Size::all();
        $categories = Category::all();
        return view('products.add', compact('colors', 'sizes', 'categories'));
    }
    public function store(Request $request){
        DB::transaction(function() use ($request) {


         $productId  = Product::insertGetId([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price
            ]);

            foreach($request->category as $key => $categoryId){
                DB::table('category_product')->insert([
                    'product_id' => $productId,
                    'category_id' => $categoryId
                ]);
            }

            foreach($request->size as $key => $sizeId){
                DB::table('product_size')->insert([
                    'product_id' => $productId,
                    'size_id' => $sizeId,
                ]);
            }
            foreach($request->colors as $key => $colorId){
                DB::table('product_color')->insert([
                    'product_id' => $productId,
                    'color_id' => $colorId,
                ]);
            }
        });

        return redirect()->route('dashboard');
    }
    public function shop(){
        $sizes = Size::all();
        $products = Product::orderBy('created_at', 'desc')->paginate(12);
        $categories = Category::all();
        return view('shop', compact('sizes', 'products', 'categories'));
    }
    public function singleProduct($id){
        $product = Product::find($id);
        $related = $product->categories;
        foreach($related as $relatedproduct){
            $categoryId = ($relatedproduct->id);
        }
        $category = Category::where('id', $categoryId)->first();
       return view('products.product', compact('product', 'category'));
    }
}
