<?php

require 'functions.php';

//require 'router.php';

// connection to our mysql database
new PDO('mysql',);

class Person {
    public $name;
    public $age;

    public function respirer() {
        echo $this->name . ' est entrain de respirer ';
    }

}

$person = new Person();

$person->name = 'Eren Jaeger';
$person->age = '22';

$person->respirer();