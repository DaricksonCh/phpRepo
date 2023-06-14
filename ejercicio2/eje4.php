<?php
    $day = readline("Escriba el dia: ");
    $month = readline("Escriba el mes: ");
    $year = readline("Escriba el año: ");


    $resultado = match ($month) {
        '01' => "Mes inicial del año",
        '02' => "Mes siguiente del primero",
        '03' => "Mes siguiente del siguiente",
        '04' => "Mes siguiente del siguiente del siguiente",
        '05' => "Un mes antes de la mitad del año",
        '06' => "Mes mitad del año",
        '07' => "Mes despues de la mitad del año",
        '08' => "Mes despues del despues de la mitad del año",
        '09' => "Mes despues del despues del despues de la mitad del año",
        '10' => "Dos meses para que se acabe el año",
        '11' => "Un mes antes del ultimo año",
        '12' => "Mes final del año",
        default => "No existe la fecha que ingresaste"
    };
    echo $resultado;
?>
