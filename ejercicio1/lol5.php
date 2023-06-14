<?php

    $edadUsuario = readline('Introduzca su edad');

    if($edadUsuario >= 18){
        echo "¿Tienes licencia? Escriba S si tiene licencia o escriba N si no tiene licencia";
        $licencia = readline('Escriba 1 si tiene licencia o escriba 0 si no tiene licencia ');
        if($licencia == 1){
            echo 'Puedes conducir';
        }else{
            echo 'Debes obtener una licencia de conducir primer';
        }
    }else{
        echo 'No puedes conducir';
    }
?>


