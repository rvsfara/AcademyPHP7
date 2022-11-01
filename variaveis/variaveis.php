<?php
    $nomeCompleto = "Rafael Vieira dos Santos";//camelCase
    $anoNascimento = 1991; //camelCase
    echo $nomeCompleto," ",$anoNascimento;
    echo "<br/>"; //quebrar uma linha
    var_dump($nomeCompleto); //Exibir tipo e tamanho da variável
    echo "<br/>";
    unset($nomeCompleto, $anoNascimento); //limpar variáveis
    if(isset($nomeCompleto)){ //verifica se a variável foi definida
        echo $nomeCompleto;
    }else{
        echo "Variável não definida";
    }
    echo "<br/>";
    //concatenação
    $nomeCompleto = "Rafael Vieira dos Santos";
    $anoNascimento = 1991;
    $nomeComAno  = $nomeCompleto . " " . $anoNascimento;
    echo $nomeComAno;
    echo "<br/>";
    $site = 'rvsfara.github.com';
    $salario = 5500.99;
    $bloqueado = false;
    //lista
    $frutas = array("abacaxi", "laranja", "manga");
    echo $frutas[1];
    echo "<br/>";
    //data
    $nascimento = new DateTime();
    var_dump($nascimento);
    echo "<br/>";
    //abrir arquivo no diretório atual
    $arquivo = fopen("index.php", "r");
    var_dump(arquivo);
    echo "<br/>";

    exit;
    echo "Não deve ser impresso porque encerrei antes";

?>
