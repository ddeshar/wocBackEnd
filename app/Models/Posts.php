<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model{
    protected $fillable = ['title', 'description', 'image', 'slug', 'event', 'new', 'status', 'view_count', 'metaKeywords', 'metaDescription', 'category_id', 'author_id' ];
    protected $primaryKey = 'id'; // id set primaryKey
    protected $table = 'posts';
}