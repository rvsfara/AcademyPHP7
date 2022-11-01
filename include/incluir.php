<?php
    include "inc/biblioteca.php";//se ouver nesta página vai dar erro aqui
    //sempre preferir usar require_once
    require_once "inc/funcoes.php";//gera erro fatal se tiver problema, só inclui uma vez
    $resultado = somar(10, 25);
    echo $resultado;
?>
