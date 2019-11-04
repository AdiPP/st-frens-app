<?php

namespace App\Config;

class globalFunc {

    public static function test(){
        return "This is from GlobalFunc class";
    }

    public static function randName(){
        return date("Ymd").'_'.rand(10000,99999);
    }
}