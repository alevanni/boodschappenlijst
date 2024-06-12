<?php

class Validator {

    public static function string($value, $min = 1, $max = INF) {
           $value = trim($value);
           return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function integer($value, $min) {
        $value = trim($value);
        return $value>=$min;
    }
    
    public static function decimal($value, $min, $max) {
        $value = trim($value);
        if (!strpos($value, '.')) {
            $decimals = 0;
        }
        else {
            $decimals = strlen($value)-1 - strpos($value, '.'); 
        }
        
        return is_numeric($value) && ($decimals<=$max && $decimals >= $min) ;
    }
}
?>