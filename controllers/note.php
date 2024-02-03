<?php

$config = require('config.php');
//creation d'un ouvel objet databse  
$db = new Database($config);

$heading = "Note";
$currenUserId = 2;

//dd($_GET['id']);
$id = $_GET['id'];

// le id repesente ici ma correspondance 
$note = $db->query('SELECT * FROM notes WHERE noteId = :id',['id' => $id])->fetch(PDO::FETCH_ASSOC);

//dd($notes);
// on verifie si la note n'existe pas dans notre database
if (!$note) {
    abort();
}

// on verfie que la note n'est pas utilise par l'utilisateur actuelle
if ($note['users_id'] != $currenUserId) {
    abort(Response::FORBIDDEN);
}


$filePath = dirname(__FILE__) . '/../views/note.view.php';


require $filePath;
