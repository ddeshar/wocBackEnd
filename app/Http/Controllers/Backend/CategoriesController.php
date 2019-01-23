<?php

namespace App\Http\Controllers\Backend;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller{

    public function index(){
        $categories = Categories::all();

        return view('backend.categories.index', compact('categories'));
    }

    public function create(){

        $Category = new Categories;
        $select_Category = Categories::all()->pluck('name','id');

        return view('backend.categories.create', compact('Category','select_Category'));
    }

    public function store(Request $request){

        $input = $request->all();
        Categories::create($input);

        return redirect()->route('categories.index')->with('Success','Category Create Successfully');
    }
    
    public function show($id){

        $Category = Categories::findOrFail($id);

        return view('backend.categories.show', compact('Category'));
    }
    
    public function edit($id){

        $Category = Categories::findOrFail($id);        
        $select_Category = Categories::all()->pluck('name','id');

        return view('backend.categories.edit', compact('Category','select_Category'));
    }
    
    public function  update(Request $request, $id){

        $Category = Categories::findOrFail($id);
        $input = $request->all();
        $Category->update($input);

        return redirect()->route('categories.show', $Category->id)->with('Success','Category Update Successfully');
    }
    
    public function destroy($id){
        $data = Categories::find($id);
        $data->delete();

        return redirect()->back();
    }
    
}
