
<?php


    $palabra = readline("Ingrese una palabra que quiere verificar si es palindroma ");

    $palabraAlrevez = strrev($palabra);

    if(str_replace(" ","",$palabra) === str_replace(" ","",$palabraAlrevez)){
        echo "La palabra $palabra es polindroma";
    }else{
        echo "La palabra $palabra no es polindroma";
    }


?>



