<?php

$config = require('config.php');
//creation d'un ouvel objet databse  
$db = new Database($config);

$heading = "Note";

dd($_GET['id']);
$id = $_GET['id'];

$notes = $db->query('SELECT * FROM notes WHERE users_id = :id', ['users_id' => $id])->fetchAll(PDO::FETCH_ASSOC);

//dd($notes);

$filePath = dirname(__FILE__) . '/../views/notes.view.php';


require $filePath;
