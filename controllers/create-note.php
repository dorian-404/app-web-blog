<?php

$config = require('config.php');
//creation d'un ouvel objet databse  
$db = new Database($config);


$heading = 'Create Note';

//dd($_SERVER);
// effetue un envoie de donnees vers ma db, POST 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$errors = [];

     // validation qu'on entre quelque chose dans notre body
     if (strlen($_POST['body']) === 0) { 
        $errors['body'] = 'A body is required';
     }

     // validation de la taille du charactere 
     if (strlen($_POST['body']) > 1000) { 
        $errors['body'] = 'The body can not be more than 1000 characters';
     }

     if(empty($errors)) {
        $db->query('INSERT INTO notes(body, users_id) VALUES(:body, :users_id)', [
            'body'=> $_POST['body'],
            'users_id'=> 2
         ]);
     }

}



require 'views/create-note.view.php';

