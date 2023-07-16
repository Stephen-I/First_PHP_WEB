<?php

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

$routes = [
    "/" => "controllers/home.php",
    "/part_1" => "controllers/part_1.php",
    "/part_2" => "controllers/part_2.php",
    "/part_3" => "controllers/part_3.php",
    "/characters" => "controllers/characters.php",
    "/explore" => "controllers/explore.php" 
];

function abort($code = 404) {
    http_response_code($code);
    require "error_handling/{$code}.php";
    die();
}

function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)){
        require $routes[$uri];
    } else {
        abort();
    }
}

routeToController($uri, $routes);