<?php

namespace App\Models;

use App\Models\Posts;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model{
    protected $fillable = ['tag'];
    protected $primaryKey = 'id'; // id set primaryKey
    protected $table = 'tags';

    public function Posts(){
        return $this->belongsToMany(Posts::class);
    }
}