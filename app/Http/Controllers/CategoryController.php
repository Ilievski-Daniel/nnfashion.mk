<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }
    public function create(){
        return view('categories.create');
    }
    public function store(Request $request){
        Category::updateOrCreate([
            'name' => $request->name
        ]);
        return redirect()->route('categories');
    }
    public function edit($id){
        $category = Category::find($id);
        return view('categories.edit', compact('category'));
    }
    public function update(Request $request, $id){
        Category::where('id', $id)->update([
            'name' => $request->editedname
        ]);
        return redirect()->route('categories');
    }
    public function destroy($id){
        Category::where('id', $id)->delete();
        return back();
    }
    public function viewByCategory($id){
        $categories = Category::where('id', $id)->first();
        $categories1 = Category::all();
        $sizes = Size::all();
        return view('categories.view', compact('categories', 'categories1', 'sizes'));
    }
}
