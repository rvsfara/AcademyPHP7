<?php
    $condicao = true;
    while ($condicao){
        $numero = rand(1, 10);
        if($numero === 3){//se o numero randomico for 3
            echo "TRÊS!!!";
            $condicao = false; //sai do laço
        }
        echo $numero." ";
    }
    $total = 150;
    $desconto = 0.9;
    //exemplo do while vai executar uma vez
    do{
        $total *= $desconto;//pelo menos 1 vez vai ter desconto
    }while($total > 100);
    echo $total;
?>
