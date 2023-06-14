<?php
    $numero = readline("Escriba una letra: ");

    $resultado = match (strtolower($numero)) {
        'a','e','i','o','u' => "Esto es una vocal",
        default => "Es una letra del abcedario"
    };
    echo $resultado;
?>
