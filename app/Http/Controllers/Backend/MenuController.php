<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Facades\Menu;
use Illuminate\Http\Request;
// use App\Http\Requests;
use App\Models\Menus;
use App\Models\MenuItems;

class MenuController extends Controller{
    public function index(){
        return view('backend.menu.index');
    }
    public function createnewmenu(){
        $menu = new Menus();
        $menu->name = request()->input("menuname");
        $menu->save();
        return json_encode(array("resp" => $menu->id));
    }

    public function deleteitemmenu(){
        $menuitem = MenuItems::find(request()->input("id"));
        $menuitem->delete();
    }

    public function deletemenug(){
        $menus = new MenuItems();
        $getall = $menus->getall(request()->input("id"));
        if (count($getall) == 0) {
            $menudelete = Menus::find(request()->input("id"));
            $menudelete->delete();
            return json_encode(array("resp" => "you delete this item"));
        } else {
            return json_encode(array("resp" => "You have to delete all items first", "error" => 1));

        }
    }

    public function updateitem(){
        $arraydata = request()->input("arraydata");
        if (is_array($arraydata)) {
            foreach ($arraydata as $value) {

                $menuitem = MenuItems::find($value['id']);
                $menuitem->label = $value['labeledit'];

                // checking request if before saving to database occourding to layout type
                if($request->$value['linktype'] == 1) {
                    $menuitem->link = $value['external'];
                }elseif($request->$value['linktype'] == 2) {
                    $menuitem->link = $value['internal'];
                }elseif($request->$value['linktype'] == 3){
                    $menuitem->link = $value['page'];
                }

                $menuitem->class = $value['classedit'];
                $menuitem->linktype = $value['linktype'];
                $menuitem->icon = $value['icon'];
                $menuitem->active = $value['active'];
                if (config('menu.use_roles')) {
                    $menuitem->role_id = $value['role_id'];
                }
                $menuitem->save();
            }
        } else {

            $menuitem = MenuItems::find(request()->input("id"));
            $menuitem->label = request()->input("labeledit");
            // $menuitem->link = request()->input("url");
            // checking request if before saving to database occourding to layout type
            if(request()->input("linktype") == 1) {
                $menuitem->link = request()->input("external");
            }elseif(request()->input("linktype") == 2) {
                $menuitem->link = request()->input("internal");
            }elseif(request()->input("linktype") == 3){
                $menuitem->link = request()->input("page");
            }
            $menuitem->class = request()->input("classedit");
            $menuitem->linktype = request()->input("linktype");
            $menuitem->icon = request()->input("icon");
            $menuitem->active = request()->input("active");
            if (config('menu.use_roles')) {
                $menuitem->role_id = request()->input("role_id");
            }
            $menuitem->save();
        }
    }

    public function addcustommenu(){
        $menuitem = new MenuItems();
        $menuitem->label = request()->input("label");
        
        // checking request if before saving to database occourding to layout type
        if(request()->input("linktype") == 1) {
            $menuitem->link = request()->input("external");
        }elseif(request()->input("linktype") == 2) {
            $menuitem->link = request()->input("internal");
        }elseif(request()->input("linktype") == 3){
            $menuitem->link = request()->input("page");
        }

        $menuitem->class = request()->input("class");
        $menuitem->linktype = request()->input("linktype");
        $menuitem->icon = request()->input("icon");
        if (config('menu.use_roles')) {
            $menuitem->role_id = request()->input("role_id");
        }
        $menuitem->menu = request()->input("idmenu");
        $menuitem->sort = MenuItems::getNextSortRoot(request()->input("idmenu"));
        $menuitem->save();
    }

    public function generatemenucontrol(){
        $menu = Menus::find(request()->input("idmenu"));
        $menu->name = request()->input("menuname");

        $menu->save();
        if (is_array(request()->input("arraydata"))) {
            foreach (request()->input("arraydata") as $value) {

                $menuitem = MenuItems::find($value["id"]);
                $menuitem->parent = $value["parent"];
                $menuitem->sort = $value["sort"];
                $menuitem->depth = $value["depth"];
                if (config('menu.use_roles')) {
                    $menuitem->role_id = request()->input("role_id");
                }
                $menuitem->save();
            }
        }
        echo json_encode(array("resp" => 1));

    }
}
