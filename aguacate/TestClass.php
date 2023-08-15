<?php
/* Conexión a la base de datos */
require_once("c://xampp/htdocs/phpRepo/aguacate/conexcion.php");
$conexion = new Db();
$pdo = $conexion->conexion();

/* Incluir clases */
include_once "Cliente.php";
include_once "Vehiculo.php";
include_once "Parqueadero.php";

/* Crear instancias */
// $cliente1 = new Cliente($pdo, 123456789,"Darickson" );
// $vehiculo1 = new Vehiculo($pdo ,$cliente1, "ABC123", "Toyota", "Rojo");
// $puestoParqueadero = new Parqueadero($vehiculo1, '10:00:00', '12:00:00');

/* Utilizar las instancias */
print_r($puestoParqueadero->setAgregarPisoPuesto());

$allDates = $puestoParqueadero->getAllInformacion();

foreach ($allDates as $key) {
    echo $key;
}
print_r($puestoParqueadero->getCosto());



// print_r($puestoParqueadero->mostar());