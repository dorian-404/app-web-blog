<?php

Class Validator { 

    // fonction pure 
    public static function validate($value, $min = 1, $max = INF) { 
       $value = trim($value);

       return strlen($value) >= $min && strlen($value) <= $max; 
    }
}