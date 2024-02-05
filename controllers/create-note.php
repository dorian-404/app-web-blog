<?php

$config = require('config.php');
//creation d'un ouvel objet databse  
$db = new Database($config);


$heading = 'Create Note';

//dd($_SERVER);
// effetue un envoie de donnees vers ma db, POST 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $db->query('INSERT INTO notes(body, users_id) VALUES(:body, :users_id)', [
        'body'=> $_POST['body'],
        'users_id'=> 2
     ]);
}



require 'views/create-note.view.php';

