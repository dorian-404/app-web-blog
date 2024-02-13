<?php

// Declaration des routes : endpoint
// liste de routes pouvant repondre a une requete particuliere
$root->get('/tuto-php/index', 'controllers/index.php');
$root->get('/tuto-php/about', 'controllers/about.php');
$root->get('/tuto-php/contact', 'controllers/contact.php');


$root->get('/tuto-php/notes', 'controllers/notes/index.php');
$root->get('/tuto-php/note', 'controllers/notes/show.php');
$root->delete('/tuto-php/note', 'controllers/notes/destroy.php');

$root->get('/tuto-php/notes/create-note', 'controllers/notes/create.php');
$root->post('/tuto-php/notes', 'controllers/notes/store.php');


//dd($router->routes);


// return [
//     '/tuto-php/index'=> 'controllers/index.php',
//     '/tuto-php/contact'=> 'controllers/contact.php',
//     '/tuto-php/notes'=> 'controllers/notes/index.php',
//     '/tuto-php/about'=> 'controllers/about.php',
//     '/tuto-php/note'=> 'controllers/notes/show.php',
//     '/tuto-php/create-note' => 'controllers/notes/create.php'
// ];