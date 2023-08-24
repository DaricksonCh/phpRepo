<?php
require_once("conexion.php");

class Cliente extends Db{
	public $id;
	public $strNombre;
	public $intCedula;
	private $conexion;

	public function __construct($id = null) {
		$this->conexion = new Db();
		$this->conexion = $this->conexion->conexion();
		
		if ($id !== null) {
				$this->loadCliente($id);
		}
	}
	public function insertCliente(int $cedula, string $nombre)
	{
			try {
					$this->intCedula = $cedula;
					$this->strNombre = $nombre;

					$sql = "INSERT INTO clientes(cedula, nombre) VALUES(:cedula, :nombre)";
					$insert = $this->conexion->prepare($sql);

					$arrData = [
							":nombre" => $this->strNombre,
							":cedula" => $this->intCedula
					];

					$resInsert = $insert->execute($arrData);

					$insert->closeCursor();

					$this->id = $this->conexion->lastInsertId(); 

					return $this->id;
			} catch (Exception $e) {
					echo "Error: " . $e->getMessage();
			}
	}
		public function getId() {
			return $this->id;
		}
	public function loadCliente($id) {
		$sql = "SELECT * FROM clientes WHERE id = :id";
		$stmt = $this->conexion->prepare($sql);
		$stmt->bindParam(":id", $id, PDO::PARAM_INT);
		$stmt->execute();
		$clienteData = $stmt->fetch(PDO::FETCH_ASSOC);

		if ($clienteData) {
				$this->id = $clienteData['id'];
				$this->strNombre = $clienteData['nombre'];
				$this->intCedula = $clienteData['cedula'];
		}
	}

	public function getClientes()
	{
		try{
			$sql = "SELECT * FROM clientes";
			$execute = $this->conexion->query($sql);
			$request = $execute->fetchAll(PDO::FETCH_ASSOC);
			$execute->closeCursor();
			return $request;

		}catch (Exception $e) {
      echo "Error: ". $e->getMessage()();
    }
	}

	public function updateCliente(int $cedula, string $nombre)
	{
			try {
					$this->strNombre = $nombre;
					$this->intCedula = $cedula;
	
					$sql = "UPDATE clientes SET nombre = :nombre WHERE cedula = :cedula";
					$update = $this->conexion->prepare($sql);
	
					$arrData = [
							":nombre" => $this->strNombre,
							":cedula" => $this->intCedula,
					];
	
					$resUpdate = $update->execute($arrData);
	
					$update->closeCursor();
	
					return $resUpdate; 
			} catch (Exception $e) {
					echo "Error: " . $e->getMessage();
					return false; 
			}
	}


	public function deleteCliente(int $cedula)
	{
    try {
				$clienteId = $this->getId();
				$sql = "DELETE FROM autos WHERE idCliente = :idCliente";
				$stmt = $this->conexion->prepare($sql);
				$stmt->bindParam(":idCliente", $clienteId, PDO::PARAM_INT);
				$stmt->execute();

        $this->intCedula = $cedula;
        $sql = "DELETE FROM clientes WHERE cedula = :cedula";
        $delete = $this->conexion->prepare($sql);

        $arrData = [
            ":cedula" => $this->intCedula
        ];

        $del = $delete->execute($arrData);

        return $del;
    } catch (Throwable $e) {
        echo "Error: " . $e->getMessage();
    }
	}



}

?>





