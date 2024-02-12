<?php

// Appelle de notre namespace
use Core\Database;

$config = require('../config.php');
//creation d'un ouvel objet databse  
$db = new Database($config);

$heading = "Notes";

$notes = $db->query('SELECT * FROM notes WHERE users_id = 2')->get();

//dd($notes);

$filePath = dirname(__FILE__) . './../../views/notes/index.view.php';


require $filePath;

//require_once('.../views/notes/index.view.php');

