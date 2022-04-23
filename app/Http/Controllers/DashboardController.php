<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Order;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $products = Product::all();
        $colors = Color::all();
        $sizes = Size::all();
        return view('dashboard', compact('products', 'colors', 'sizes'));
    }
    public function viewOrders(){
        $orders = Order::all();
        return view('orders', compact('orders'));
    }
}
