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


    echo "<br>"."<br>";
?>

<?php
    function tabela($inicio,$fim){
    $array=[];
    $i=0;
    foreach (range($inicio, $fim) as $numeros) {
        array_push($array,$numeros);
        echo $array[$i]."<br>";
        $i++;
    }
}
    echo tabela(3,19);

    echo "<br>"."<br>";
?>