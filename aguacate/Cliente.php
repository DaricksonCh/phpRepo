<?php
require_once("conexcion.php");

$conexion = new Db();
$pdo = $conexion->conexion(); 

class Cliente {
	public $strNombre;
	public $intCedula;
	private $PDO;

	public function __construct($pdo, int $cedula,string $nombre) {
		$this->PDO = $pdo;
		$this->intCedula = $cedula;
		$this->strNombre = $nombre;
	}

	public function insertCliente() {
		$statement = $this->PDO->prepare("INSERT INTO clientes (cedula, nombre) VALUES (:cedula, :nombre)");
		$statement->bindParam(":cedula", $this->intCedula);
		$statement->bindParam(":nombre", $this->strNombre);
		$statement->execute();
	}
}

if(isset($_POST['btn'])) {
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];

    $cliente = new Cliente($pdo, $cedula, $nombre);

    $cliente->insertCliente();
}



?>





