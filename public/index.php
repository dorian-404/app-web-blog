<?php

require_once '../Core/Router.php';


use Core\Router;

// const BASE_PATH = __DIR__;

// var_dump(BASE_PATH);

// $url = parse_url($_SERVER['REQUEST_URI'])['path'];

// var_dump($url);

require  '../Core/functions.php';
require  '../Core/Database.php' ;
require '../Core/Response.php';
//require  '../Core/router.php';


// creation d'une instance de la classe Route
$root = new Router();
// 
// On recuupere l'url
 $url = parse_url($_SERVER['REQUEST_URI'])['path'];
 $routes = require('../routes.php');

 // on verfie que la methode post contient bien la methode qu'on lui a envoye sinon prend la methode par defaut
$method =  isset($_POST['method']) ? $_POST['method'] : $_SERVER['REQUEST_METHOD'];

 $root->route($url, $method);





