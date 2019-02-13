<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model{
    protected $fillable = ['title', 'excerpt', 'body', 'image', 'desk', 'mob', 'slug', 'event', 'new', 'status', 'view_count', 'metaKeywords', 'metaDescription', 'author_id'];
    protected $primaryKey = 'pageId'; // id set primaryKey
    protected $table = 'pages';
}