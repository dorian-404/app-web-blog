<?php

$config = require('config.php');
//creation d'un ouvel objet databse  
$db = new Database($config);

$heading = "Notes";

$notes = $db->query('SELECT * FROM notes WHERE users_id = 2')->get();

//dd($notes);

$filePath = dirname(__FILE__) . '/../views/notes.view.php';


require $filePath;

