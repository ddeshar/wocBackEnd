<?php

namespace App\Helpers;

use App\Models\Menu;

class WocmenuClass{
    public static function generate_tree($categories){
        foreach ($categories as $category) {
            echo '<li id="categoryId_' . $category->id . '">';
            echo $category->title_th;
            if ($category->children) {
                echo '<ul>';
                generate_tree($category->children);
                echo '</ul>';
            }
            echo '</li>';
        }
    }

    public static function GenerateMenu(int $data){
        $menus = Menu::where('group_id', '=', $data)->get();
        
        return $menus;
    }

}