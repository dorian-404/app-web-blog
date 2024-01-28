<?php

require 'functions.php';
require 'Database.php' ;
//require 'router.php';

// 
$config = require('config.php');

//creation d'un ouvel objet databse  
$db = new Database($config);

$result = $db->query("select * from posts")->fetch(PDO::FETCH_ASSOC);

dd($result);
// foreach ($result as $row) {
//     echo "<li>" . $row['title'] . "</li>";
// }

