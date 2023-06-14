<?php
    $string = readline("Escriba cualquier cosa ");


    $resultado = match(true){
        strlen($string) >= 10 =>"Esta es una cadena larga",
        default => "Es una cadena corta"
    };
    echo $resultado;
?>