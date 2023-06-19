<?php
$lista = readline("Escriba una lista de numeros separados por comas ");
function sumaArray($lista) {
    $nums = explode(",", $lista);

    $suma = 0;
    foreach ($nums as $num) {
        $suma += intval(trim($num));
    }

    return $suma;
}

$resultado = sumaArray($lista);
echo "La suma de los números es: " . $resultado;



?>