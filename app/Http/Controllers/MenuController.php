<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;

use DB;

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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $data = DB::table('menu')
        ->join('menu_group', 'menu.group_id', '=', 'menu_group.id')
        ->select('menu.id', 'menu.group_id', 'menu.order', 'menu.parent', 'menu.title', 'menu.path','menu.linktype', 'menu.active', 'menu.class', 'menu.icon', 'menu.small_class', 'menu.small_text', 'menu.created_at', 'menu.updated_at', 'menu_group.name', 'menu_group.value')
        // ->orderBy('menu.order', 'ASC')
        ->get();

        $menus = [];
        $menus['Group'] = [];
        foreach ($data as $d) {
            if ($d->value == '' || $d->value == 'Group') {
                $menus['Group'][] = $d;
            } else {
                $menus[$d->value][] = $d;
            }
        }
        if (count($menus['Group']) == 0) {
            unset($menus['Group']);
        }
       
        $groups_data = Group::select('value')->distinct()->get();
        $groups = [];
        foreach ($groups_data as $group) {
            if ($group->value != '') {
                $groups[] = $group->value;
            }
        }

        return view('backend.menu.index', compact('menus', 'groups', 'active'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        // $pages = Pages::pluck('title', 'slug_en');
        $pages = [];
        $gro = Group::pluck('value', 'id');
        $items = Menu::all();
        $groupdrop = DB::table('menu_group')->pluck("name","id");

        $app = app();
        $routes = $app->routes->getRoutes();

        $lists = [];
        
        foreach ($routes as $route ){

            $routeName = $route->getName();
            $length = explode(".", $routeName);

            if($length[0] == 'individual' || $length[0] == 'corporate' ){
                $data = $route->getActionMethod();
                $trans = trans('backTranslate.'.$data.'');
                if (strpos($trans, '/') !== false) {

                }else{
                    $lists[$data] = $trans;
                }
            }
        }

        return view('backend.menu.create', compact('pages', 'items','gro', 'lists' ,'groupdrop'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        // dd($request);
        $this->validate($request, [
            'group_id' => 'required',
            'order' => 'numeric|required',
            'title' => 'required',
            'active' => 'required'
        ]);

        $input = $request->all();
        $input['parent'] = empty($input['parent']) ? NULL : $input['parent'];

        // checking request if before saving to database occourding to layout type
        if($input['link_type'] == 'internal') {
            $input['path'] = $request->internal;
        }elseif($input['link_type'] == 'ext') {
            $input['path'] = $request->external;
        }elseif($input['link_type'] == 'page'){
            $input['path'] = $request->page;
        }
        
        Menu::create($input);


        return redirect()->route('menu.index')->with('Success','Menu Create Successfully');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Request $Request){
        return redirect()->route('menu.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit($id){

        $item = Menu::findOrFail($id);
        $test = $item->group_id;
        $items = Menu::all();
        
        $selectMenu =  DB::table("menu")->where("group_id",$test)->pluck("title","id");
        // dd($selectMenu);

        // $pages = Pages::pluck('title', 'slug_en');
        $pages = [];
        $gro = Group::pluck('value', 'id');

            if($item->linktype == 'internal'){
                $int = $item->path;
                $ext = '';
            }elseif($item->linktype == 'ext'){
                $ext = $item->path;
                $int = '';
            }else{
                $ext = '';
                $int = '';
            }

        $app = app();
        $routes = $app->routes->getRoutes();

        $lists = [];

        foreach ($routes as $route ){

            $routeName = $route->getName();
            $length = explode(".", $routeName);

            if($length[0] == 'individual' || $length[0] == 'corporate' ){
                $data = $route->getActionMethod();
                $trans = trans('backTranslate.'.$data.'');
                if (strpos($trans, '/') !== false) {

                }else{
                    $lists[$data] = $trans;
                }
            }
        }

        return view('backend.menu.create', compact('item', 'items', 'gro', 'int', 'ext','pages','lists','selectMenu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        $this->validate($request, [
            'group_id' => 'required',
            'order' => 'numeric|required',
            'title' => 'required',
            'active' => 'required'
        ]);

        $input = $request->all();
        $input['parent'] = empty($input['parent']) ? NULL : $input['parent'];

        // checking request if before saving to database occourding to layout type
        if($input['link_type'] == 'internal') {
            $input['path'] = $request->internal;
        }elseif($input['link_type'] == 'ext') {
            $input['path'] = $request->external;
        }elseif($input['link_type'] == 'page'){
            $input['path'] = $request->page;
        }

        $menu = Menu::findOrFail($id);
        $menu->update($input);

        return redirect()->route('menu.index')->with('success','Menu Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $menu = Menu::find($id);
        $menu->delete();

        return redirect()->back();
    }


    public function getGroupname($id) {
        $menuName = DB::table("menu")->where("group_id",$id)->pluck("title","id");

        return json_encode($menuName);
    }
}