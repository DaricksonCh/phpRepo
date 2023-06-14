<?php

    $hora = readline("Escriba la hora ");
    $minuto = readline("Escriba los minutos ");



    $resultado = match (true) {
        $hora >= 0 && $hora <= 6 => "Madrugada",
        $hora >= 7 && $hora <= 11 => "Por la mañana",
        $hora >= 12 && $hora <= 13 => "Medio dia",
        $hora >= 14 && $hora <= 18 => "Es por la tarde",
        $hora >= 19 && $hora <= 24 => "Es por la noche",
        default => "No existe en la franja horaria"
    };
    echo $resultado ;
?>
