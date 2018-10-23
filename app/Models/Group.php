<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model{
    /**
     * @var string
     */
    protected $table = 'menu_group';

    /**
     * @var array
     */
    protected $fillable = ['id', 'name', 'value'];

    public function menu(){
        return $this->hasMany(Menu::class,'group_id');
    }
}
