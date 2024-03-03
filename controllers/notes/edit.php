<?php

$heading = 'Edit a note';

use Core\App;
$db = App::getContainer()->resolve('Core\Database');
$currenUserId = 2;

$id = $_GET['id'];

// le id repesente ici ma correspondance 
$note = $db->query('SELECT * FROM notes WHERE noteId = :id',['id' => $id])->findOrFail();

//dd($notes);
authorize($note['users_id'] == $currenUserId);



$filePath = dirname(__FILE__) . './../../views/notes/edit.view.php';


require $filePath;