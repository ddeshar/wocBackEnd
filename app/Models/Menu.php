<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model{

    protected $table = 'menu';

    protected $fillable = ['group_id', 'order', 'parent', 'title', 'path', 'linktype', 'active', 'class', 'icon', 'small_class', 'small_text'];

    public function childs() {
        return $this->hasMany('App\Models\Menu','parent','id') ;
    }
}