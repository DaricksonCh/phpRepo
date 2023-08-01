<?php

require_once "persona.php";
require_once "empleado.php";
require_once "cliente.php";

$objEmpleado = new Empleado(1083,"Darickson",19);
$objEmpleado->setPuesto(" Administrador");

echo $objEmpleado->getDatosPersonales() . $objEmpleado ->getPuesto() . "<br>";

$objCliente = new Cliente(1234, "Pastor", 20);
$objCliente ->setCredito(10000);

echo $objCliente->getDatosPersonales() . $objCliente->getCredito() . "<br>";
