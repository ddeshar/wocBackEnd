<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model{
    protected $fillable = ['key', 'display_name', 'value', 'details', 'type', 'order', 'group'];
    protected $primaryKey = 'id'; // id set primaryKey
    protected $table = 'settings';
    public $timestamps = false;
}