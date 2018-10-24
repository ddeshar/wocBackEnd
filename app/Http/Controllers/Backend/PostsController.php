<?php

namespace App\Http\Controllers\Backend;

use DB;
use Auth;
use App\Models\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\createPostsValidate;
class PostsController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $datas = Posts::all();
        
        return view('backend.posts.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        $datas = new Posts;

        return view('backend.posts.create', compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createPostsValidate $request){

        $input = $request->all();
        if (Auth::user()->id ) {
            $input['author_id'] = Auth::user()->id;  // ถ้าใช้ auth::user  ต้อง use auth;
        }
        Posts::create($input);

        return redirect()->route('posts.index')->with('Success','Posts Create Successfully');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show($request){

        $datas = Posts::findOrFail($request);
        
        return view('back.posts.show', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit($id){

        $datas = Posts::where('slug', $id)->firstorfail();
        
        return view('backend.posts.edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(createPostsValidate $request, $slug){

        $post = Posts::findOrFail($slug);
        $input = $request->all();
        if (Auth::user()->id ) {
            $input['author_id'] = Auth::user()->id;  // ถ้าใช้ auth::user  ต้อง use auth;
        }
        $post->update($input);

        return redirect()->route('posts.index')->with('success','Posts Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $data = Posts::find($id);
        $data->delete();

        return redirect()->back();
    }
}
