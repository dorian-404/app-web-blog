<?php

// utilisation de notre namespace
// use Core\Database;


// $config = require('../config.php');
// //creation d'un ouvel objet databse  
// $db = new Database($config);

use Core\App;
$db = App::getContainer()->resolve('Core\Database');

$heading = "Note";
$currenUserId = 2;

$id = $_GET['id'];

// le id repesente ici ma correspondance 
$note = $db->query('SELECT * FROM notes WHERE noteId = :id',['id' => $id])->findOrFail();

//dd($notes);
authorize($note['users_id'] == $currenUserId);


$filePath = dirname(__FILE__) . './../../views/notes/show.view.php';


require $filePath;
