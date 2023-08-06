<?php

include_once "Cliente.php";
include_once "Vehiculo.php";
include_once "Parqueadero.php";

$cliente1 = new Cliente("Darickson", 123456789);
$vehiculo1 = new Vehiculo($cliente1, "ABC123", "Toyota", "Rojo");
$puestoParqueadero = new Parqueadero($cliente1, $vehiculo1, '10:00:00', '12:00:00');
print_r($puestoParqueadero->setAgregarPisoPuesto());




$allDates = $puestoParqueadero->getAllInformacion();

foreach($allDates as $key){
    echo $key;
}
print_r($puestoParqueadero->getCosto());



// print_r($puestoParqueadero->mostar());