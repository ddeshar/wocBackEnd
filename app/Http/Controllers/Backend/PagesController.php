<?php

namespace App\Http\Controllers\Backend;

use DB;
use Auth;
use App\Models\Pages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\createPagesValidate;

class PagesController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $datas = Pages::all();
        
        return view('backend.pages.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        $datas = new Pages;

        return view('backend.pages.create', compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createPagesValidate $request){
        // dd($request);
        $input = $request->all();
        if (Auth::user()->id ) {
            $input['author_id'] = Auth::user()->id;  // ถ้าใช้ auth::user  ต้อง use auth;
        }
        Pages::create($input);

        return redirect()->route('pages.index')->with('Success','pages Create Successfully');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function show($request){

        $datas = Pages::findOrFail($request);
        
        return view('back.pages.show', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function edit($id){

        $datas = Pages::where('slug', $id)->firstorfail();
        
        return view('backend.pages.edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function update(createPagesValidate $request, $slug){

        $pages = Pages::findOrFail($slug);
        $input = $request->all();
        if (Auth::user()->id ) {
            $input['author_id'] = Auth::user()->id;  // ถ้าใช้ auth::user  ต้อง use auth;
        }
        $pages->update($input);

        return redirect()->route('pages.index')->with('success','Pages Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $data = Pages::find($id);
        $data->delete();

        return redirect()->back();
    }
}
