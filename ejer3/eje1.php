<?php


    $listaNumero = readline("Ingrese cuantos numeros va a trabajar");

    $notas = [];
    $sum = 0;
    $promedio = 0;
    for($i = 1; $i <= $listaNumero; $i++){
        $notas[$i-1] = floatval(readline("ingrese la nota  $i \n"));
        $sum += $notas[$i-1];
    }
    echo $sum;

    $promedio = $sum/$listaNumero;
    echo "El promedio es de " . $promedio;



?>