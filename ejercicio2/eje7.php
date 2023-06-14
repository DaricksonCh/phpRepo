<?php

    $nota = readline("Escriba su nota del 0 al 100: ") ;



    $resultado = match (true) {
        $nota >= 0 && $nota <= 19 => "Su nota fue muy mala",
        $nota >= 20 && $nota <= 39 => "Su nota ha sido mala",
        $nota >= 40 && $nota <= 49 => "Su nota fue casi la mitad",
        $nota >= 60 && $nota <= 79 => "Su nota estuvo proxima a pasar",
        $nota >= 80 && $nota <= 100 => "Pasaste la materia",
        default => "No existe la nota"
    };
    echo $resultado ;
?>
