<?php

require_once "Vehiculo.php";
require_once "Cliente.php";

class Parqueadero extends Vehiculo{

    public $pisos;
    public $strHoraEntrada;
    public $strHoraSalida;
    public $pisoAsignado; 
    public $puestoAsignado;

        public function __construct(Cliente $cliente, Vehiculo $vehiculo, string $horaEntrada, string $horaSalida)
        {
            parent::__construct($cliente, $vehiculo->strPlaca,$vehiculo->strMarca,$vehiculo->strColor);
            $this->strHoraEntrada=$horaEntrada;
            $this->strHoraSalida=$horaSalida;
            $this->pisos = [
                'Piso1' => [],  
                'Piso2' => [],
                'Piso3' => [],
                'Piso4' => [],
            ];
            $this->pisoAsignado = null; 
            $this->puestoAsignado = null;
        }

        // public function setAgregarPisoPuesto($piso, $puesto)
        // {
        //     if ($puesto <= 0 || $puesto > 10) {
        //         echo "El puesto $puesto no puede ser definido, debe ser un número entre 1 y 10";
        //     } elseif (array_key_exists($piso, $this->pisos)) {
        //         if (!in_array($puesto, $this->pisos[$piso])) {
        //             $this->pisos[$piso][] = $puesto;
        //             $this->pisoAsignado = $piso;
        //             $this->puestoAsignado = $puesto;
        //         } else {
        //             echo "El puesto $puesto ya está ocupado en el piso $piso";
        //         }
        //     } else {
        //         echo "El piso $piso que quieres asignar no existe";
        //     }
        // }
        public function setAgregarPisoPuesto()
        {
            $puesto = rand(1,10);
            $pisoAle = array_rand($this->pisos);
            if (array_key_exists($pisoAle, $this->pisos)) {
                if (!in_array($puesto, $this->pisos[$pisoAle])) {
                    $this->pisos[$pisoAle][] = $puesto;
                    $this->pisoAsignado = $pisoAle;
                    $this->puestoAsignado = $puesto;
                } else {
                    echo "El puesto $puesto ya está ocupado en el piso $pisoAle";
                }
            } else {
                echo "El piso $pisoAle que quieres asignar no existe";
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


        public function getAllInformacion()
        {
            $datosCliente = $this->getDatosPersonales(); 
            $datosVehiculo = $this->getDatosPersonalesVehiculo();
            $datosParking = ["
            <h2>Datos del Parqueadero</h2>
            <h3>Piso: $this->pisoAsignado</h3>
            <h4>Puesto: $this->puestoAsignado</h4>
                            "];
            return array_merge($datosCliente, $datosVehiculo,$datosParking);
        }
        public function getCosto()
        {
            if($this->strHoraEntrada < 1 || $this->strHoraEntrada > 24 && $this->strHoraSalida < 1 || $this->strHoraSalida > 24){
                return "<h4>ERROR AL DIGITAR LA HORA, LA HORA DEBE SER DE 1 A 24 HORAS, VERIFICAR</h4>";
            }else{
                $this->strHoraEntrada = strtotime($this->strHoraEntrada);
                $this->strHoraSalida = strtotime($this->strHoraSalida);
                $tiempoEstacionado = $this->strHoraSalida - $this->strHoraEntrada;
                $horasEstacionado = ceil($tiempoEstacionado / 3600);
                $tarifa = 2;
                $valorApagar = $horasEstacionado * $tarifa;
                $horaEntrada = date('H:i:s', $this->strHoraEntrada);
                $horaSalida = date('H:i:s', $this->strHoraSalida);
                $horasEstimadas = date('H:i:s', $tiempoEstacionado-3600);
                return "<h4>Su hora de ingreso fue $horaEntrada y la hora de salida fue $horaSalida estuvo un total de $horasEstimadas hora/s. El valor total a pagar es $valorApagar$</h4>";
            }
        }


}

