<?php

function app($key){
    if(file_exists(__DIR__."/../app.php")){
        $app = include(__DIR__."/../app.php");
        return $app[$key];
    }
    return false;
}

function auth($key){
    if(file_exists(__DIR__."/../auth.php")){
        $auth = include(__DIR__."/../auth.php");
        return $auth[$key];
    }
    return false;
}


function database($key){
    if(file_exists(__DIR__."/../database.php")){
        $database = include(__DIR__."/../database.php");
        return $database[$key];
    }
    return false;
}

