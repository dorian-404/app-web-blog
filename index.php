<?php

require 'functions.php';

//require 'router.php';

class Database {

    // proprietes
    public $connection;

    // constructeur
    public function __construct() {
           // connection to our mysql database dsn , veut dire data source name
           $dsn = "mysql:host=localhost;dbname=myapp;charset=utf8mb4;";

           // creation de la nouvelle instance 
          $this->connection= new PDO($dsn, 'root');
    }

    public function query($query) {
      
        // On prepare la premiere requete a executer 
        $statement = $this->connection->prepare($query);
        $statement->execute();

        // On va chercher tous les resultats dans un tableau associatif 
         return $statement->fetch(PDO::FETCH_ASSOC);  
    }
}

$db = new Database();
$result = $db->query("select * from posts where id = 1");


foreach ($result as $row) {
    echo "<li>" . $row['title'] . "</li>";
}

