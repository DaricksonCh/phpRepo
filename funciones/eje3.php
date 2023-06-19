<?php

    $lista = readline("Escriba una lista de numeros separados por comas ");
    function ordernarArray($lista) {
        $nums = explode(",", $lista);

        foreach ($nums as &$num) {
            $num = intval(trim($num));
        }
        
        $longitud = count($nums);
        for ($i = 0; $i < $longitud - 1; $i++) {
            for ($j = 0; $j < $longitud - $i - 1; $j++) {
                if ($nums[$j] < $nums[$j + 1]) {
                    $temp = $nums[$j];
                    $nums[$j] = $nums[$j + 1];
                    $nums[$j + 1] = $temp;
                }
            }
        }
        return $nums;
    } 
    $resultado = ordernarArray($lista);
    echo "Lista ordenada: " . implode(", ", $resultado);




?>