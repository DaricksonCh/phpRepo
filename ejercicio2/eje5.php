<?php
    $day = readline("Escriba el dia: ");

    $resultado = match ($day) {
        '1' => "Lunes",
        '2' => "Martes",
        '3' => "Miercoles",
        '4' => "Jueves",
        '5' => "Viernes",
        '6' => "Sabado",
        '7' => "Domingo",
        default => "No existe el dia"
    };
    echo $resultado;
?>
