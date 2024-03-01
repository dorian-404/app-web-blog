<?php

// utilisation de notre namespace
use Core\Database;

// chaque qu'on construit notre base de donnees on lui passe les config necessaire.

$config = require('../config.php');
//creation d'un ouvel objet databse  
$db = new Database($config);

$heading = "Note";
$currenUserId = 2;

// suppresion d'une note

    $id = $_POST['id'];

    // le id repesente ici ma correspondance , affichage des notes
    $note = $db->query('SELECT * FROM notes WHERE noteId = :id',['id' => $id])->findOrFail();
    
    // verfication de l'utilisaateur
    authorize($note['users_id'] == $currenUserId);

    // formulaire a ete envoye, supprimer la note actuelle 
    $db->query('DELETE FROM notes WHERE noteId = :id', [
        'id' => $_POST['id']
    ]);
    // redirection vers la page des notes
    header('location: /tuto-php/notes');
    die();

    //var_dump($heading);
// $filePath = dirname(__FILE__) . './../../views/notes/show.view.php';


// require $filePath;
