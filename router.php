<?php

// On recuupere l'url
$url = parse_url($_SERVER['REQUEST_URI'])['path'];

//var_dump($url);

 $routes = require('routes.php');


// On peut representer ceci en un tableau associatif de nos url et nos controllers correspondants 
function routeToController($url, $routes) {
    // Array_keys_exists
 if (array_key_exists($url, $routes)) {
    require $routes[$url];
 } else { 
    abort();
 }

}

// En cas de page inconnu
function abort($code = 404) {
    
    http_response_code($code);

    require "./views/{$code}.php";

    die();

}


routeToController($url,$routes);




