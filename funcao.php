<?php
    $numeroMagico=22;
    function maior($num1,$num2,$num3=""){
        global $funcoesExecutadas;
        $funcoesExecutadas++;
        global $numeroMagico;
        if($num3=""){
            if ($num1>$num2 && $num1>$num3){
            return "O maior número é: ".$num1;
        } else {
            if ($num2>$num1 && $num2>$num3){
                return "O maior número é: ".$num2;
            } if($num3>$num1 && $num3>$num2){
                return "O maior número é: ".$num3;
            }
        }
    } else {
        $num3=$numeroMagico;
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
}
    echo maior(1,4);


    echo "<br>"."<br>";
?>

<?php

    function tabela($inicio,$fim=""){
    global $funcoesExecutadas;
    $funcoesExecutadas++;
    global $numeroMagico;
    $numeros=[];
    if($fim=""){
    for($i=$inicio;$i<=$fim;$i++){
        $numero[]=$i;
        return $numeros."<br>";
        } 
        }  else {
            $fim=$numeroMagico;
            for ($i=$inicio;$i<=$fim; $i++) { 
                $numeros[]=$i;
            }
            return $numeros;
        }
    }
        $array=tabela(13);
        foreach($array as $seq){
            echo $seq."<br>";
        }

    echo "<br>"."<br>";
?>