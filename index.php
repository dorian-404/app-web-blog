<?php

require 'functions.php';
require 'Database.php' ;
//require 'router.php';


$db = new Database();
$result = $db->query("select * from posts")->fetch(PDO::FETCH_ASSOC);

dd($result);
// foreach ($result as $row) {
//     echo "<li>" . $row['title'] . "</li>";
// }

