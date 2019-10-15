<?php 
    include_once"boletos.php";
    echo "<br>"."<br>";
    //Começar o exercício 6)

    $frase = "Adoro php! -Eu também adoro php!";
    $encontrar   = "php";
    $pos = strpos($frase, $encontrar);
        echo $encontrar." foi encontrado primeiro na frase: ".$frase." - na posição ".$pos;
?>