<?php

    $numero1 = readline('Introduzca el primer numero');
    $numero2 = readline('Introduzca el segundo numero');

    if($numero1 > 10 && $numero2 > 10){
        echo "El primer numero ingresado es ". $numero1 . " el segundo numero ingresado es ". $numero2 . " por lo que los dos numeros son mayores que 10";
    }elseif($numero1 > 10 || $numero2 > 10){
        echo "El primer numero ingresado es ". $numero1 . " el segundo numero ingresado es ". $numero2 . " por lo que solo un numero es mayor a 10";
    }else{
        echo "El primer numero ingresado es ". $numero1 . " el segundo numero ingresado es ". $numero2 . " Por lo que ningun numero es mayor a 10";
    }

?>


