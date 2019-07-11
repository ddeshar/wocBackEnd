<?php

namespace App\Helpers;

use DB;
use Illuminate\Support\Facades\Route;
use App\Models\Pages;

class WocglobalClass{
    public static function bytesToHuman($bytes){
        $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];

        for ($i = 0; $bytes > 1024; $i++) {
            $bytes /= 1024;
        }

        return round($bytes, 2) . ' ' . $units[$i];
    }

    public static function wocWords($value, $words = 100, $end = '...'){
        return \Illuminate\Support\str::words($value, $words, $end);
    }

    public static function DateThai($strDate){
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		$strHour= date("H",strtotime($strDate));
		$strMinute= date("i",strtotime($strDate));
		$strSeconds= date("s",strtotime($strDate));
		$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$strMonthThai=$strMonthCut[$strMonth];
		// return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
		return "$strDay $strMonthThai $strYear";
    }
    
    public static function backStatus(){
        $status = DB::table("status")->pluck("deatil","id");
        return $status;
    }

    public static function RouteMenu(){
        
        $app = app();
        $routes = $app->routes->getRoutes();
        
        $lists = [];

        foreach($routes as $route){
                $length = $route->uri;
                $uri = explode("/", $length);

                $restriUri = ["login", "logout", "register", "routes"];
                $restriPrefix = ["/admin", "laravel-filemanager"];

            if(!in_array($route->getPrefix(), $restriPrefix) && !in_array($length, $restriUri) && count($uri) < 2 ){
                $data = $route->getName();
                $lists[$data] = $data;

                // $route->uri;
                // $route->getName();
                // $route->getPrefix();
                // $route->getActionMethod();
                
            }
        }

        return $lists;
    }

    public static function pageMenu(){
        $pages = Pages::pluck('title', 'slug');

        return $pages;
    }
}