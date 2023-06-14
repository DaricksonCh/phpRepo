<?php

    $computadores = readline('Introduzca la cantidad de pc que va a comprar');
    $PRECIO = 700;

    if($computadores <= 4){
        $descuento = $computadores * ($PRECIO - ($PRECIO * 0.1));
        echo $descuento;
    }elseif(($computadores >= 5) && ($computadores <= 9)){
        $descuento = $computadores * ($PRECIO - ($PRECIO * 0.2));
        echo $descuento;
    }else{
        $descuento = $computadores * ($PRECIO - ($PRECIO * 0.4));
        echo $descuento;
    }

?>


