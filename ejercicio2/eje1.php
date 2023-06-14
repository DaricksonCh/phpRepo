<?php
    $numero = readline("Escriba un numero");


    $resultado = match($numero){
        '1'=>"Este es 1",
        '2'=>"Este es 2",
        '3'=>"Este es 3",
        default => "Muestre un mensaje diferente"
    };
    echo $resultado;
?>