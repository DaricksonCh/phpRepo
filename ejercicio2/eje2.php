<?php
    $color = readline("Escriba un color: ");

    $resultado = match (strtolower($color)) {
        'rojo' => "Este color es cálido",
        'amarillo' => "Este color es agua",
        'azul' => "Este color es brillante",
        default => "Muestre un mensaje diferente"
    };

    echo $resultado;
?>
