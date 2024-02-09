<?php

// const BASE_PATH = __DIR__;

// var_dump(BASE_PATH);

$url = parse_url($_SERVER['REQUEST_URI'])['path'];

var_dump($url);

require  '../functions.php';
require  '../Database.php' ;
require '../Response.php';
require  '../router.php';

// 






