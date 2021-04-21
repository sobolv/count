<?php

namespace App\Models;

class Count {
    public static function subtract($num1, $num2){
        return $num1 - $num2;
    }

    public static function add($num1, $num2){
        return $num1 + $num2;
    }

    public static function multiply($num1, $num2){
        return $num1 * $num2;
    }

    public static function divide($num1, $num2){
        return $num1 / $num2;
    }

    public static function makeArray($num1, $num2){
        $size = $num1 - $num2;
        if($size > 0){
            $arr = array($size-1);
            for($i = 0; $i < $size-1; $i++){
                $arr[$i] = $num1 - $i - 1;
            }
        }else if($size < 0){
            $arr = array(($size+1)*(-1));
            for($i = 0; $i < ($size+1)*(-1); $i++){
                $arr[$i] = $num1 + $i + 1;
            }
        }else{
            $arr = array("Немає чисел між ними");
        }
        return $arr;
    }
}
