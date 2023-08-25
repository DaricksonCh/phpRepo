<?php
require_once("conexion.php");
include_once "Cliente.php";

class Vehiculo extends Db{
    public $cliente;
    public $strPlaca;
    public $strMarca;
    public $strColor;
    private $conexion;

    public function __construct() {
		$this->conexion= new Db();
		$this->conexion = $this->conexion->conexion();
    }

    public function insertAuto(Cliente $cliente, string $placa, string $marca, string $color) {
        try {
            $this->strPlaca = $placa;
            $this->strMarca = $marca;
            $this->strColor = $color;

            $sql = "INSERT INTO autos(placa, marca, color, idCliente) VALUES (:placa, :marca, :color, :idCliente)";
            $insert = $this->conexion->prepare($sql);

            $arrData = [
                ":placa" => $this->strPlaca,
                ":marca" => $this->strMarca,
                ":color" => $this->strColor,
                ":idCliente" => $cliente->getId()
            ];
            
            $resInsert = $insert->execute($arrData);
            $idInsert = $this->conexion->lastInsertId();
            $insert->closeCursor();
            return $idInsert;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getAutos()
    {
        try {
            $sql = "SELECT * FROM autos";
            $execute = $this->conexion->query($sql);
            $request = $execute->fetchAll(PDO::FETCH_ASSOC);
            $execute->closeCursor();
            return $request;
        }catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function setCliente(Cliente $cliente) {
        $this->cliente = $cliente;
    }
    

    public function updateVehiculo(string $placa, string $marca, string $color)
    {
        try {
            $this->strPlaca = $placa;
            $this->strMarca = $marca;
            $this->strColor = $color;
    
            $sql = "UPDATE autos SET marca = :marca, color = :color WHERE placa = :placa";
            $update = $this->conexion->prepare($sql);
    
            $arrData = [
                ":placa" => $this->strPlaca,
                ":marca" => $this->strMarca,
                ":color" => $this->strColor,
            ];
    
            $resUpdate = $update->execute($arrData);
    
            $update->closeCursor();
    
            return $resUpdate;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return false; 
        }
    }

    public function deleteVehiculo(string $placa)
    {
        try {
            $this->strPlaca = $placa;
            $sql = "DELETE FROM autos WHERE placa = :placa";
            $delete = $this->conexion->prepare($sql);
    
            $arrData = [
                ":placa" => $this->strPlaca
            ];
    
            $del = $delete->execute($arrData);
    
            return $del;
        } catch (Throwable $e) {
            echo "Error: " . $e->getMessage();
        }
    }


}


