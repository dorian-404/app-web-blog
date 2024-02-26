<?php

use Core\Validator;
use Core\Database;

$config = require('../config.php');
//creation d'un ouvel objet databse  
$db = new Database($config);

$errors = [];


     // validation qu'on entre quelque chose dans notre body et de la taille du charactere 
     if (! Validator::validate($_POST['body'], 1, 1000)) { 
        $errors['body'] = 'A body of no more than 1000 is required';
     }

    //  if (strlen($_POST['body']) > 1000) { 
    //     $errors['body'] = 'The body can not be more than 1000 characters';
    //  }

    // Verfier si y'a des erreurs 
     if(empty($errors)) {
        $db->query('INSERT INTO notes(body, users_id) VALUES(:body, :users_id)', [
            'body'=> $_POST['body'],
            'users_id'=> 2
         ]);


         header('location: /tuto-php/notes');
         die();
     }