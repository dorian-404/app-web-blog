<?php


// Declaration des routes : endpoint
// return [
//     '/tuto-php/index'=> 'controllers/index.php',
//     '/tuto-php/contact'=> 'controllers/contact.php',
//     '/tuto-php/notes'=> 'controllers/notes/index.php',
//     '/tuto-php/about'=> 'controllers/about.php',
//     '/tuto-php/note'=> 'controllers/notes/show.php',
//     '/tuto-php/create-note' => 'controllers/notes/create.php'
// ];

$router->get('/tuto-php/index', 'controllers/index.php');

dd($router->routes);