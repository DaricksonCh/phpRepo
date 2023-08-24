<?php

require_once "Vehiculo.php";
require_once "Cliente.php";
require_once "conexion.php";

class Parqueadero extends Db{
    public $vehiculo;
    public $pisos;
    public $strHoraEntrada;
    public $strHoraSalida;
    public $pisoAsignado; 
    public $puestoAsignado;
    private $conexion;

    public function __construct()
    {
        $this->strHoraEntrada = date("Y-m-d H:i:s");
        $this->strHoraSalida = null; 
        $this->pisos = [
            'Piso1' => [],
            'Piso2' => [],
            'Piso3' => [],
            'Piso4' => [],
        ];
        $this->pisoAsignado = null;
        $this->puestoAsignado = null;
        $this->conexion = new Db();
        $this->conexion = $this->conexion->conexion();
    }
    
    public function insertarEntrada($idPuesto, $idAuto, $fechaIngreso, $fechaSalida) {
        try {
            $sql = "INSERT INTO parqueo (idPuesto, idAuto, fechaIngreso, fechaSalida) VALUES (:idPuesto, :idAuto, :fechaIngreso, :fechaSalida)";
            $insert = $this->conexion->prepare($sql);

            $arrData = [
                ":idPuesto" => $idPuesto,
                ":idAuto" => $idAuto,
                ":fechaIngreso" => $fechaIngreso,
                ":fechaSalida" => $fechaSalida,
            ];

            $resInsert = $insert->execute($arrData);
            $insert->closeCursor();

            return $resInsert;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
    public function setHoraSalida(string $horaSalida)
{
    $this->strHoraSalida = $horaSalida;
}

    public function fechaIngreso()
    {
        date_default_timezone_set('America/Bogota');
        $horaActual = date('H:i:s');
        $fechaActual = date('Y-m-d');
        return array('hora'=>$horaActual, 'fecha'=>$fechaActual);
    }
        public function setAgregarPisoPuesto($piso)
        {
            $puesto = rand(1,10);
            if (array_key_exists($piso, $this->pisos)) {
                if (!in_array($puesto, $this->pisos[$piso])) {
                    $this->pisos[$piso][] = $puesto;
                    $this->pisoAsignado = $piso;
                    $this->puestoAsignado = $puesto;
                } else {
                    echo "El puesto $puesto ya está ocupado en el piso $piso";
                }
            } else {
                echo "El piso $piso que quieres asignar no existe";
            }
        }

        public function getMostar()
        {
            echo "<table border='1'>";
            echo "<tr><th>Pisos</th><th>Puestos</th><th>Datos</th></tr>";
            foreach ($this->pisos as $piso => $puesto) {
                echo "<tr>";
                echo "<td>" . $piso . "</td>";
                echo "<td>";
                if (count($puesto) > 0) {
                    print_r($puesto);
                } else {
                    echo "No hay puestos en este piso, esta vacio";
                }
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }

        // public function getCosto()
        // {
        //     if($this->strHoraEntrada < 1 || $this->strHoraEntrada > 24 && $this->strHoraSalida < 1 || $this->strHoraSalida > 24){
        //         return "<h4>ERROR AL DIGITAR LA HORA, LA HORA DEBE SER DE 1 A 24 HORAS, VERIFICAR</h4>";
        //     }else{
        //         $this->strHoraEntrada = strtotime($this->strHoraEntrada);
        //         $this->strHoraSalida = strtotime($this->strHoraSalida);
        //         $tiempoEstacionado = $this->strHoraSalida - $this->strHoraEntrada;
        //         $horasEstacionado = ceil($tiempoEstacionado / 3600);
        //         $tarifa = 2;
        //         $valorApagar = $horasEstacionado * $tarifa;
        //         $horaEntrada = date('H:i:s', strtotime($this->strHoraEntrada));
        //         $horaSalida = date('H:i:s', strtotime($this->strHoraSalida));
        //         $horasEstimadas = date('H:i:s', $tiempoEstacionado-3600);
        //         return "<h4>Su hora de ingreso fue $horaEntrada y la hora de salida fue $horaSalida estuvo un total de $horasEstimadas hora/s. El valor total a pagar es $valorApagar$</h4>";
        //     }
        // }


}

