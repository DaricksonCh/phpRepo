
<?php


    $list = [];

    $n = readline("Ingrese el numero de elementos que quiere ingresar: ");
    for($i = 1; $i <= $n; $i++){
        $element = readline("Ingrese el elemento " . $i . " : ");
        $list[] = $element;
    }
    $elementoSearch = readline("Ingrese el elementos que quiere buscar: ");

    $position = array_search($elementoSearch,$list);

    if($position !== false){
        echo "El elemento ". $elementoSearch . " Se encuentra en la posicion ".  ($position + 1) . " de la lista";
    }else{
        echo "El elemento ". $elementoSearch . " No no encontro en la lista ";
    }

?>
