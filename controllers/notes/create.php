<?php

require '../Validator.php';

$config = require('../config.php');
//creation d'un ouvel objet databse  
$db = new Database($config);


$heading = 'Create Note';

// email valide 


//dd($_SERVER);
// effetue un envoie de donnees vers ma db, POST 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$errors = [];

      // creation d'un nouvel objet validator


     // validation qu'on entre quelque chose dans notre body et de la taille du charactere 
     if (! Validator::validate($_POST['body'], 1, 1000)) { 
        $errors['body'] = 'A body of no more than 1000 is required';
     }

     
    //  if (strlen($_POST['body']) > 1000) { 
    //     $errors['body'] = 'The body can not be more than 1000 characters';
    //  }

     if(empty($errors)) {
        $db->query('INSERT INTO notes(body, users_id) VALUES(:body, :users_id)', [
            'body'=> $_POST['body'],
            'users_id'=> 2
         ]);
     }

}

$filePath = dirname(__FILE__) . './../../views/notes/create.view.php';


require $filePath;


//require './../../views/notes/create.view.php';

