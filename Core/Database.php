<?php

// Namespacing
namespace Core;
use PDO;

class Database {

    // proprietes
    public $connection;
    public $statement;

    // constructeur
    public function __construct($config, $username = 'root', $password = '') {

        //connection to our mysql database dsn , veut dire data source nam
        $dsn = 'mysql:' . http_build_query($config, '', ';');
           //$dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']};";

           // creation de la nouvelle instance PDO
          $this->connection= new PDO($dsn, $username, $password);
    }

    public function query($query, $params = []) {
      
        // On prepare la premiere requete a executer 
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        // On va chercher tous les resultats dans un tableau associatif 
         return $this;


    }

    public function find(){
        return $this->statement->fetch();
    }

    public function findOrFail() {
        $result = $this->find();

        // on verifie si la note n'existe pas dans notre database
        if (!$result) {
             abort();
        }

        return $result;

    }

    public function get() {
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }
}