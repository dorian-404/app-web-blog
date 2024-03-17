<?php


//dd('updating');

// find the corresponding note 
// utilisation de notre namespace
// use Core\Database;


// $config = require('../config.php');
// //creation d'un ouvel objet databse  
// $db = new Database($config);

use Core\App;
$db = App::getContainer()->resolve('Core\Database');

$heading = "Note";
$currenUserId = 2;

$id = $_POST['id'];

// le id repesente ici ma correspondance 
$note = $db->query('SELECT * FROM notes WHERE noteId = :id',['id' => $id])->findOrFail();

// authoruiize that the curre



//