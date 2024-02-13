<?php

namespace Core;

class Router {

   // Proprietes
   protected $routes = [];


   // Methodes 
   public function get($url, $controllerPath) {

      $this->routes[] = [
         'url' => $url,
         'controllerPath' => $controllerPath,
         'method' => 'GET'
      ];

   }

   public function post($url, $controllerPath) {

      $this->routes[] = [
         'url' => $url,
         'controllerPath' => $controllerPath,
         'method' => 'POST'
      ];
   }

   public function delete($url, $controllerPath) {

      $this->routes[] = [
         'url' => $url,
         'controllerPath' => $controllerPath,
         'method' => 'DELETE'
      ];
   }


   public function patch($url, $controllerPath) {

      $this->routes[] = [
         'url' => $url,
         'controllerPath' => $controllerPath,
         'method' => 'PATCH'
      ];
   }

   public function put($url, $controllerPath) {

      $this->routes[] = [
         'url' => $url,
         'controllerPath' => $controllerPath,
         'method' => 'PUT'
      ];
   }
}


// // On recuupere l'url
//  $url = parse_url($_SERVER['REQUEST_URI'])['path'];

//  $routes = require('../routes.php');


// // On peut representer ceci en un tableau associatif de nos url et nos controllers correspondants 
// function routeToController($url, $routes) {
//     // Array_keys_exists
//  if (array_key_exists($url, $routes)) {
//     require __DIR__. '/../'. ($routes[$url]);
//  } else { 
//     abort();
//  }

// }

// // En cas de page inconnu
// function abort($code = 404) {
    
//     http_response_code($code);

//     //require "./views/{$code}.php";
//     require("../views/{$code}.php");

//     die();

// }

// //./views/{$code}.php
// routeToController($url,$routes);




