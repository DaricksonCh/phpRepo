<?php

require_once("classOperaciones.php");
// instanciar un objeto de la clase operaciones con la palabra new
// el objeto lo creamos como calculadora
$calculadora = new Operaciones(1,2);

$resSuma = $calculadora -> suma();
$resDivi = $calculadora -> division();

echo $resSuma . "<br>" . $resDivi;

?>