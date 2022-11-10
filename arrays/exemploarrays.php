<?php
    $frutas = array("laranja", "abacaxi", "melancia");
    print_r($frutas);
    //segundo exemplo
    echo "<br />";
    $carros[0][0] = "GM";
    $carros[0][1] = "Cobalt";
    $carros[0][2] = "Onix";
    $carros[0][3] = "Camaro";
    $carros[1][0] = "Ford";
    $carros[1][1] = "Fiesta";
    $carros[1][2] = "Fusion";
    $carros[1][3] = "Eco Sport";
    echo $carros[0][3];
    echo "<br />";
    echo end($carros[1]);//ultimo carro da ford
    echo "<br />";
    print_r($carros);
    echo "<br />";
    $pessoas = array();
    array_push($pessoas, array(
        'nome'=>'João',
        'idade'=>20
    ));
    array_push($pessoas, array(
        'nome'=>'Glaucio',
        'idade'=>25
    ));
    print_r($pessoas[0]['nome']);
    echo "<br />";
    print_r($pessoas);
?>
