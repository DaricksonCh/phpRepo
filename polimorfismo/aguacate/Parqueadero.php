<?php

class Parqueadero{

    public $pisos = [
        'Piso1' => [],
        'Piso2' => [],
        'Piso3' => [],
        'Piso4' => [],
    ];

    public function asignarPuesto()
    {
        for($i = 1; $i <= 4; $i++){
            for($j = 1; $j <= 10; $j++){
                $this->pisos[$i][] = $j;
                echo("El puesto ocupado en Piso".$i." es " . $j . "<br>") ;
            }
        }
    }
    public function mostrarPisos() {
        foreach ($this->pisos as $piso => $puestos) {
            echo "Piso: " . $piso . "<br>";
            echo "Puestos ocupados: ";
            foreach ($puestos as $puesto) {
                echo $puesto . " ";
            }
            echo "<br><br>";
        }
    }

    // public $pisos = ['Piso1','Piso2','Piso3','Piso4'];

    // public function puestoOcupado(){
    //     for($i = 0; $i < count($this->pisos); $i++){
    //         $puestoAleatorio = rand(1,40);
    //         if($puestoAleatorio < 40){
    //             echo  $this->pisos[$i] . ", Puesto ocupado: " . $puestoAleatorio . "<br>";
    //         }
    //     }
    // }

}

$parqueadero = new Parqueadero();
$parqueadero->asignarPuesto();
$parqueadero->mostrarPisos();
