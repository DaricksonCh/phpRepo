<?php

$palabra = readline("Escriba una palabra para verificar si es palindroma ");
$palabraAlrevez = strrev($palabra);

function esPalindromo($palabra,$palabraAlrevez){
    if(str_replace(" ","",$palabra) === str_replace(" ","",$palabraAlrevez)){
        echo "La palabra ". $palabra. " es polindroma ";
    }else{
        echo "La palabra " .$palabra ." no es polindroma ";
    }
}

esPalindromo($palabra,$palabraAlrevez);


?>