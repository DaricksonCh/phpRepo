
<?php


    $cont = [];

    $numero = readline("Ingrese un numero o 'q' para terminr de ingresar numeros ");
    while($numero !== 'q'){
        $cont[] = intval($numero);
        $numero = readline("Ingrese otro numero o 'q' para terminr de ingresar numeros ");
    }
    $reverso = array_reverse($cont);

    foreach($reverso as $num){
        echo $num . " ";
    }
    

?>
