<?php
    echo "Funções";
    echo "<br/>";
    $nome = "Rafael";
    function teste(){
        global $nome;
        echo $nome . " teste1";
    }
    function teste2(){
        $nome = "João";
        echo $nome . " agora no teste2";
    }
    teste();
    echo "<br/>";
    teste2();
    echo "<br/>";
    echo "Operadores em PHP";
    echo "<br/>";
    $valorTotal = 0;
    $valorTotal += 100;
    $valorTotal += 25;
    $valorTotal += -10;
    $valorTotal *= .9;
    echo $valorTotal;
    $a = 10;
    $b = 2;
    echo $a + $b;
    echo "<br/>";
    echo $a - $b;
    echo "<br/>";
    echo $a * $b;
    echo "<br/>";
    echo $a / $b;
    echo "<br/>";
    echo $a % $b;//sobra 0
    echo "<br/>";
    echo $a ** $b;//exponenciação 10 elevado ao quadrado

?>
