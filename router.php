<?php

$routes = [
    "/" => "controllers/world/home.php",
    "/part_1" => "controllers/story/part_1.php",
    "/part_2" => "controllers/story/part_2.php",
    "/part_3" => "controllers/story/part_3.php",
    "/characters" => "controllers/characters/multiple.php",
    "/character" => "controllers/characters/single.php",
    "/explore" => "controllers/world/explore.php",
    "/reviews" => "controllers/reviews/multiple.php",
    "/review" => "controllers/reviews/single.php",
    "/review/create" => "controllers/reviews/create.php"
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

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

routeToController($uri, $routes);