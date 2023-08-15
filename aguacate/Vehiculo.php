<?php
require_once("conexcion.php");
include_once "Cliente.php";

$conexion = new Db();
$pdo = $conexion->conexion();

class Vehiculo {
    public $cliente;
    public $strPlaca;
    public $strMarca;
    public $strColor;
    private $PDO;

    public function __construct(Cliente $cliente,$pdo, string $placa, string $marca, string $color) {
        $this->PDO = $pdo;
        $this->cliente = $cliente;
        $this->strPlaca = $placa;
        $this->strMarca = $marca;
        $this->strColor = $color;
    }

    public function insertAuto()
    {
        $statement = $this->PDO->prepare("INSERT INTO autos (placa,marca,color) VALUES (:placa, :marca, :color)");
		$statement->bindParam(":placa", $this->strPlaca);
		$statement->bindParam(":marca", $this->strMarca);
		$statement->bindParam(":color", $this->strColor);
		$statement->execute();
    }
}

if(isset($_POST['btn'])) {
    $placa = $_POST['placa'];
    $marca = $_POST['marca'];
    $color = $_POST['color'];

    $vehiculo = new Vehiculo($cliente, $pdo, $placa, $marca, $color);
    
    $vehiculo->insertAuto();
}
