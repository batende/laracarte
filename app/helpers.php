<?php

if (! function_exists('page_title')){
    function page_title($title){
        $base = 'Laracarte-list of artisans';
        if($title===''){
            return $base;
        }else{
            return $title.'|'.$base;
        }
    }
}