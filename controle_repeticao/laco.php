<?php
    for ($i = 0; $i < 100; $i+=5){
        if($i >= 20 && $i <=80){
            continue;
        }
        if($i === 90){
            break;
        }
        echo $i . "<br/>";
    }
    echo "Final do Primeiro Laço" . "<br/>";
    for($i = 0; $i<10; $i--){
        echo $i . " " . "<br/>";
        if($i === -50){
            break;
        }
    }
?>
