<?php

namespace App\Http\Controllers\Backend;

use DB;
use Auth;
use App\Models\Tags;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class TagsController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){

        $datas = Tags::all();
        
        return view('backend.Tags.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        $datas = new Tags;

        return view('backend.tags.create', compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $input = $request->all();
        Tags::create($input);

        return redirect()->route('tags.index')->with('Success','Tags Create Successfully');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tags  $Tags
     * @return \Illuminate\Http\Response
     */
    public function show($id){

        $datas = Tags::findOrFail($id);

        return view('backend.tags.show', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tags  $Tags
     * @return \Illuminate\Http\Response
     */
    public function edit($id){

        $datas = Tags::findOrFail($id);

        return view('backend.tags.edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tags  $Tags
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id){

        $Tags = Tags::findOrFail($id);
        $input = $request->all();
        $Tags->update($input);

        return redirect()->route('tags.show', $Tags->id)->with('Success','Tags Create Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tags  $Tags
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){

        $data = Tags::find($id);
        $data->delete();

        return redirect()->back();
    }
}
