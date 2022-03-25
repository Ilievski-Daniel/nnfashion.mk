<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index(){
        $colors = Color::all();
        return view('colors.index', compact('colors'));
    }
    public function create(){
        return view('colors.create');
    }
    public function store(Request $request){
        Color::updateOrCreate([
            'name' => $request->name
        ]);
        return redirect()->route('colors');
    }
    public function edit($id){
        $color = Color::find($id);
        return view('colors.edit', compact('color'));
    }
    public function update(Request $request, $id){
        Color::where('id', $id)->update([
            'name' => $request->editedname
        ]);

        return redirect()->route('colors');
    }
    public function destroy($id){
        Color::where('id', $id)->delete();
        return back();
    }
}
