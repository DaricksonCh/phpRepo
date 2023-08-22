<?php
require_once("conexion.php");

class Cliente extends Db{
	public $id;
	public $strNombre;
	public $intCedula;
	private $conexion;

	public function __construct()
	{
		$this->conexion= new Db();
		$this->conexion = $this->conexion->conexion();
	}
	public function insertCliente(int $cedula,string $nombre)
	{
			try {
				$this->strNombre = $nombre;
				$this->intCedula = $cedula;
	
				$sql = "INSERT INTO clientes(cedula, nombre) VALUES(:cedula, :nombre)";
				$insert = $this->conexion->prepare($sql);
	
				$arrData = [
						":nombre" => $this->strNombre,
						":cedula" => $this->intCedula
				];
	
				$resInsert = $insert->execute($arrData);
	
				$insert->closeCursor();
	
				if ($resInsert) {
						echo "Cliente insertado correctamente.";
				} else {
						echo "Error al insertar el cliente.";
				}
	
			} catch (Exception $e) {
					echo "Error: " . $e->getMessage();
			}
	}
	public function getId() {
		return $this->id;
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
        $this->intCedula = $cedula;
        $sql = "DELETE FROM clientes WHERE cedula = :cedula";
        $delete = $this->conexion->prepare($sql);

        $arrData = [
            ":cedula" => $this->intCedula
        ];

        // Ejecutar la consulta
        $del = $delete->execute($arrData);

        return $del;
    } catch (Throwable $e) {
        echo "Error: " . $e->getMessage();
    }
}

	



}

?>





