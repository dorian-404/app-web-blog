<?php

use Core\App;
use Core\Database;
use Core\Container;
// faut faire un require pour avoir le validator
require '../Core/Container.php';
require '../Core/App.php';

$container = new Container();

$container->bind('Core\Database', function() {
    $config = require('../config.php');
    //creation d'un ouvel objet databse  
    //$db = new Database($config);

    return new Database($config);
});

// on set notre conteneur 
App::setContainer($container);
