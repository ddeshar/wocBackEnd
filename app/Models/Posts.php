<?php

namespace App\Models;

use App\Models\Tags;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model{
    protected $fillable = ['title', 'description', 'image', 'slug', 'event', 'highlight', 'new', 'status', 'view_count', 'metaTitle', 'metaKeywords', 'metaDescription', 'category_id', 'author_id' ];
    protected $primaryKey = 'id'; // id set primaryKey
    protected $table = 'posts';

    public function Tags(){
        return $this->belongsToMany(Tags::class);
    }
}