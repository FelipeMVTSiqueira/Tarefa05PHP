<?php
    function triangulo($ladoUm,$ladoDois,$ladoTres){
        $superficie=$ladoUm+$ladoDois+$ladoTres;
        return $superficie;
    }
    echo "A superície do triângulo é de: ".triangulo(8,8,8)." metros.";