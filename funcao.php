<?php
    function maior($num1,$num2,$num3){
        if ($num1>$num2 && $num1>$num3){
            return "O maior número é: ".$num1;
        } else {
            if ($num2>$num1 && $num2>$num3){
                return "O maior número é: ".$num2;
            } if($num3>$num1 && $num3>$num2){
                return "O maior número é: ".$num3;
            }
        }
    }
    echo maior(2,4,9);
?>