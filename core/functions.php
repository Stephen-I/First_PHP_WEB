<?php

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlI($value) {
    return $_SERVER["REQUEST_URI"] == $value;
}

function base_path($path){
    return BASE_PATH . $path;
}

function views($path, $attributes = []){
    extract($attributes);
    return base_path("views/" . $path);
}