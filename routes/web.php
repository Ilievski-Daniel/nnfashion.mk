<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SizeController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $products = Product::orderBy('created_at', 'desc')->paginate(8);
    return view('index', compact('products'));
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/product', function () {
    return view('product');
});
Route::get('/cart', function () {
    return view('cart');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/shop', [ProductController::class, 'shop'])->name('shop');
Route::get('/product/view/{id}', [ProductController::class, 'singleProduct'])->name('product.view');

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/add/product', [ProductController::class, 'create'])->name('product.add');
Route::post('/add/product', [ProductController::class, 'store'])->name('product.add');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/create', [CategoryController::class, 'store'])->name('category.create');
Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('categories/delete/{id}', [CategoryController::class, 'destroy'])->name('categories.delete');
Route::get('/category/view/{id}', [CategoryController::class, 'viewByCategory'])->name('category.view');


Route::get('/sizes', [SizeController::class, 'index'])->name('sizes');
Route::get('/sizes/create', [SizeController::class, 'create'])->name('sizes.create');
Route::post('/sizes/create', [SizeController::class, 'store'])->name('sizes.create');
Route::get('sizes/edit/{id}', [SizeController::class, 'edit'])->name('sizes.edit');
Route::put('sizes/update/{id}', [SizeController::class, 'update'])->name('sizes.update');
Route::delete('sizes/delete{id}', [SizeController::class, 'destroy'])->name('sizes.delete');

Route::get('/colors', [ColorController::class, 'index'])->name('colors');
Route::get('/colors/create', [ColorController::class, 'create'])->name('colors.create');
Route::post('/colors/create', [ColorController::class, 'store']);
Route::get('/colors/edit/{id}', [ColorController::class, 'edit'])->name('colors.edit');
Route::put('/colors/update/{id}', [ColorController::class, 'update'])->name('colors.update');
Route::delete('colors/delete/{id}', [ColorController::class, 'destroy'])->name('colors.delete');



Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/add/{id}', [CartController::class, 'store'])->name('add.cart');
