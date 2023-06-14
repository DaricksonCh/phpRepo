
<?php


    $numero = readline("Escriba un numero: ");
    $numero = intval($numero);
    $cont = 0;

        for($i=1;$i <= $numero;$i++){
            if($numero%$i==0){
                $cont++;
            }
        }
        if($cont>2){
            echo "El numero no es primo";
        }else{
            echo "El numero es primo";
        }


?>



