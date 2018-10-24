<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model{
    protected $fillable = ['title', 'description', 'image', 'slug', 'event', 'highlight', 'new', 'status', 'view_count', 'metaTitle', 'metaKeywords', 'metaDescription', 'author_id'];
    protected $primaryKey = 'postId'; // id set primaryKey
    protected $table = 'posts';
}