<?php

function dd($items) {
    echo"<pre>";
    var_dump($items);
    echo "</pre>";

    die();
}

function abort($code = 404) {
       
    http_response_code($code);

    //require "./views/{$code}.php";
    require("../views/{$code}.php");

    die();
}

function authorize($condition){
    if (! $condition) {
        abort(Response::FORBIDDEN);
    }
}

// function basePath ($path) {
//     return BASE_PATH . $path;
// }