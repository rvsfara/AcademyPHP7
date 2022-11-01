<?php
    $nome = "Rafael";
    $nome2 = 'Vieira';
    var_dump($nome, $nome2);
    echo "<br/>";
    echo "ABC $nome";
    echo "<br/>";
    echo "ABC $nome2";
    echo "<br/>";
    $nome = strtoupper($nome);//maiuscula
    $nome2 = strtolower($nome2);//minuscula
    echo $nome . " " . $nome2;
    echo "<br/>";
    $nomeSobrenome = $nome . " " . $nome2;
    $nomeSobrenome = strtolower($nomeSobrenome);
    echo ucfirst($nomeSobrenome);//a primeira palavra da String toda
    echo "<br/>";
    echo ucwords($nomeSobrenome);//a primeira de cada palavra
    echo "<br/>";
    $senhaComum = "Senha";
    $senhaComum = str_replace("a", "4", $senhaComum);//Troca uma caracter por outro
    $senhaComum = str_replace("e", "3", $senhaComum);
    echo $senhaComum;
    echo "<br/>";
    $frase = "A repetição é mãe da retenção.";
    $palavra = "mãe";
    $q = strpos($frase, $palavra);//primeiro o alvo depois o que procuramos
    $texto = substr($frase, 0, $q);//alvo , a partir do inicio, até onde
    var_dump($texto);
    $texto2 = substr($frase, $q + strlen($palavra), strlen($frase));//alvo , indice, final
    echo "<br/>";
    var_dump($texto2);
    echo "<br/>";
    echo $texto . $palavra . $texto2;
?>
