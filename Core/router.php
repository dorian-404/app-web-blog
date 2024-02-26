<?php


namespace Core;

class Router {

   // Proprietes
   protected $routes = [];


   // Methodes 

   public function add($method, $url, $controllerPath) {

      $this->routes[] = [
         'url' => $url,
         'controllerPath' => $controllerPath,
         'method' => $method
      ];
   }

   public function get($url, $controllerPath) {
      $this->add('GET', $url, $controllerPath);
   }

   public function post($url, $controllerPath) {
      $this->add('POST', $url, $controllerPath);
   }

   public function delete($url, $controllerPath) {
      $this->add('DELETE', $url, $controllerPath);
   }


   public function patch($url, $controllerPath) {
      $this->add('PATCH', $url, $controllerPath);
   }

   public function put($url, $controllerPath) {
      $this->add('PUT', $url, $controllerPath);
   }

   public function route($url, $method) {

      foreach($this->routes as $route) {
          // pour chaque item on verifie que notre url matches avec un url que the request method match aussi
         if ($route['url'] === $url && $route['method'] === strtoupper($method)) {
            return require __DIR__ . '/../' . ($route['controllerPath']);
         }
      }

      $this->abort();

   }
    protected function abort($code = 404) {
    
    http_response_code($code);

    //require "./views/{$code}.php";
    require("../views/{$code}.php");

    die();

}
}




// //./views/{$code}.php




