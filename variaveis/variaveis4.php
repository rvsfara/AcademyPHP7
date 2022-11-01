<?php
    $a = 55.0;
    $b = 55;
    var_dump($a > $b);
    echo "<br/>";
    var_dump($a < $b);
    echo "<br/>";
    var_dump($a == $b);//comparando valores
    echo "<br/>";
    var_dump($a === $b);//comparando valores e tipos
    echo "<br/>";
    var_dump($a != $b);//compara valores se é diferente
    echo "<br/>";
    var_dump($a !== $b);//verifica se são identicos valor e tipo de dados
    $a = 50;
    $b = 35;
    //space ship do php 7
    //se o a for maior traz 1
    //se os dois forem igual traz 0
    //se o b for maior traz -1
    var_dump($a <=> $b);//se o a for maior traz 1
    echo "<br/>";
    $a = 35;
    $b = 35;
    var_dump($a <=> $b);//se os dois forem igual traz 0
    echo "<br/>";
    $a = 50;
    $b = 60;
    var_dump($a <=> $b);//se o b for maior traz -1
    $a = NULL;
    $b = 8;
    $c = 10;
    echo $a ?? $b ?? $c;//verifica se o valor é nulo ele pula o valor
    echo "<br/>";
    $a = 10;
    echo $a++ . " Depois " . $a;//mostra e depois soma
    echo "<br/>";
    $a = 10;
    echo ++$a . " Depois " . $a;//soma depois mostra
    echo "<br/>";
    $a = 10;
    echo $a-- . " Depois " . $a;//diminui depois mostra
    echo "<br/>";
    $a = 10;
    echo --$a . " Depois " . $a;//mostra depois diminui
    echo "<br/>";
    $resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3;// (6 > 5) e (15 < 3)
    var_dump($resultado);
    echo "<br/>";
    $resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3;//(6 > 5) ou (15 < 3)
    var_dump($resultado);
?>
