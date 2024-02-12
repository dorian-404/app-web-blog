<?php

// Creation de notre espace de noms
namespace Core;


Class Validator { 

    // fonction pure 
    public static function validate($value, $min = 1, $max = INF) { 
       $value = trim($value);

       return strlen($value) >= $min && strlen($value) <= $max; 
    }

    // valid email adress
    public static function email($value) {
        filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}