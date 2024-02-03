<?php

function dd($items) {
    echo"<pre>";
    var_dump($items);
    echo "</pre>";

    die();
}

function authorize($condition){
    if (! $condition) {
        abort(Response::FORBIDDEN);
    }
}