<?php

namespace App\Models;

use App\Models\Settings;

use Illuminate\Http\Request;

use Lang;
use DB;
use Cookie;

use Illuminate\Database\Eloquent\Model;

class WocSettings extends Model{
    
    protected $settings;
    protected $keyValuePair;

    public function __construct($settings){
        $this->Settings = $settings;
        foreach ($settings as $setting){
            $this->keyValuePair[$setting->key] = $setting->value;
        }
    }
    

    public function has(string $key){
        /* check key exists */ 
    }

    public function contains(string $key){
        /* check value exists */ 
    }

    public function value(string $key){
        /* get by key */ 
        $newa = Settings::where('key', $key)->first();
        return $newa->value;
    }

    public function getName(string $key){
        /* get by key */ 
        $newa = Settings::where('key', $key)->first();
        return $newa->display_name;
    }
}
