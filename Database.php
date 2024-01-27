<?php

class Database {

    // proprietes
    public $connection;

    // constructeur
    public function __construct() {

        $config = [
            "host"=> "localhost",
            "dbname"=> "myapp",
            "charset"=> "utf8mb4",  
        ] ;
           // connection to our mysql database dsn , veut dire data source name
           $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']};";

           // creation de la nouvelle instance 
          $this->connection= new PDO($dsn, 'root');
    }

    public function query($query) {
      
        // On prepare la premiere requete a executer 
        $statement = $this->connection->prepare($query);
        $statement->execute();

        // On va chercher tous les resultats dans un tableau associatif 
         return $statement;
    }
}