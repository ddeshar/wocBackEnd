<?php

namespace App\Models;

use App\Models\Posts;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model{
    protected $fillable = ['parent_id', 'order', 'name', 'slug'];
    protected $primaryKey = 'id'; // id set primaryKey
    protected $table = 'categories';

    public function post(){
        return $this->hasMany(Posts::class,'category_id');
    }
}