<?php

if (! function_exists('page_title')){
    function page_title($title){
        $base = config('app.name').'-list of artisans';
        if($title===''){
            return $base;
        }else{
            return $title.'|'.$base;
        }
    }
}

if (! function_exists('set_active_route')){
    function set_active_route($route){
        return Route::is($route)?'active':'';
    }
}