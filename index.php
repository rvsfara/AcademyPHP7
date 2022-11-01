<?php
    echo "Meu Código PHP!";
    echo "<br/>";
    echo "Rafael Vieira dos Santos";
    echo "<br/>";
    echo "rvsfara@gmail.com";
    echo "<br/>";
    echo "+55 (55) 9 9639 7802"."<br/>";
    $path = ".";//caminho onde quer listar
    $diretorio = dir($path);
    echo "Lista de Arquivos do diretório '<strong>".$path."</strong>':<br />";
    while($arquivo = $diretorio -> read()){
        echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br/>";
    }
    $diretorio -> close();
?>
