<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index(){
        $sizes = Size::all();
        return view('sizes.index', compact('sizes'));
    }
    public function create(){
        return view('sizes.create');
    }
    public function store(Request $request){
        Size::updateOrCreate([
            'sizename' => $request->name
        ]);
        return redirect()->route('sizes');
    }
    public function edit($id){
        $size = Size::find($id);
        return view('sizes.edit', compact('size'));
    }
    public function update(Request $request, $id){
        Size::where('id', $id)->update([
            'sizename' => $request->editedname
        ]);

        return redirect()->route('sizes');
    }
    public function destroy($id){
        Size::where('id', $id)->delete();
        return back();
    }
}
