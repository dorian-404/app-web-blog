<?php

// utilisation de notre namespace
use Core\Database;


$config = require('../config.php');
//creation d'un ouvel objet databse  
$db = new Database($config);

$heading = "Note";
$currenUserId = 2;

//dd($_GET['id']);
$id = $_GET['id'];

// le id repesente ici ma correspondance 
$note = $db->query('SELECT * FROM notes WHERE noteId = :id',['id' => $id])->findOrFail();

//dd($notes);
authorize($note['users_id'] == $currenUserId);

// on verfie que la note n'est pas utilise par l'utilisateur actuelle


$filePath = dirname(__FILE__) . './../../views/notes/show.view.php';


require $filePath;
