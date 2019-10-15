<?php
    global $funcoesExecutadas;
    $funcoesExecutadas=0;
    include"funcao.php";
    echo $funcoesExecutadas." funções foram executadas acima"."<br>";
    //isso não funciona muito bem, aparece no erro que a variável funcoesExecutadas não foi definida