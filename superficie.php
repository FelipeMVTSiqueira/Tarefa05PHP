<?php
    function triangulo($base,$altura){
        $superficie=($base*$altura)/2;
        return $superficie;
    }
    echo "A área de superície do triângulo é de: ".triangulo(3,8)." metros.";

    echo "<br>"."<br>";

    function retangulo($base,$altura){
        $superficie=($base*$altura);
        return $superficie;
    }
    echo "A área de superície do retângulo é de: ".retangulo(3,8)." metros.";