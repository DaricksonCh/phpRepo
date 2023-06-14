<?php
    $number = readline("Escriba un numero del 1 al 5: ");

    $resultado = match ($number) {
        '1' => "Te toco cantar una algo",
        '2' => "Tenes que bailar",
        '3' => "Tenes que hacer ejercicio",
        '4' => "Tenes que programar",
        '5' => "Mira series o peliculas",
        default => "No existe esa accion"
    };
    echo $resultado;
?>
