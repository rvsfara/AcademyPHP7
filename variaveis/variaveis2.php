<?php
    //url mais a interrogação
    //?a=123
    //http://localhost/rvs/section1/variaveis2.php?a=123
    $nome = $_GET["a"];
    var_dump($nome);
    echo "<br/>";
    $vlrConvertido = (int)$nome;
    var_dump($vlrConvertido);
    echo "<br/>";
    //duas variáveis na url
    //http://localhost/rvs/section1/variaveis2.php?a=123&b=456
    //pegar ip do usuário
    $ip = $_SERVER["REMOTE_ADDR"];
    echo $ip;
    $nomeScript = $_SERVER["SCRIPT_NAME"];
    echo $nomeScript;
?>
