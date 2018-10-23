<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller{

private static function mapTree($dataset, $parent = 0){
	$tree = array();

	foreach ($dataset as $id => $node){
		if ($node->parent_id != $parent) continue;
		$node->children = self::mapTree($dataset, $node->id);
		$tree[$id] = $node;
	}

	return $tree;
}

/**
 * GenerateMenu
 */
private static function prepareMenu($tree){
    $data = '<ul class="nav navbar-nav">';

    foreach ($tree as $item){
        $data .= '<li><a href="' . $item->url . '">' . $item->title . '</a></li>';

        if (count($item->children) > 0){
            $data .= self::prepareMenu($item->children);
        }
    }

    $data .= '</ul>';

    return $data;
}

/**
 * Create menu
 */
public static function generateMenu(){
	$urls = parent::all();
	$tree = self::mapTree($urls);
	$data = self::prepareMenu($tree);

	return $data;
}



public function manageCategory(){
    $categories = Menu::where('parent', '=', NULL)->get();
    $allCategories = Menu::pluck('title_th','id')->all();

    return view('backend.menu.index',compact('categories','allCategories'));
}


/**
 * Show the application dashboard.
 *
 * @return \Illuminate\Http\Response
 */
public function addCategory(Request $request){
    $this->validate($request, [
            'title' => 'required',
        ]);
    $input = $request->all();
    $input['parent'] = empty($input['parent']) ? NULL : $input['parent'];
    
    Menu::create($input);
    return back()->with('success', 'New Category added successfully.');
}


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }
}