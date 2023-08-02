<?php

class Parqueadero
{

    // public $pisos = [
    //     'Piso1' => [],
    //     'Piso2' => [],
    //     'Piso3' => [],
    //     'Piso4' => [],
    // ];
    // public function setPuesto()
    // {
    //     $puestos = 0;
    //     if($this->pisos[0] > 10){
    //         echo "En el primer piso estan todos los puestos ocupados ";
    //         $  
    //     }
    // }
    // public $pisos = [
    //     'Piso1' => [],
    //     'Piso2' => [],
    //     'Piso3' => [],
    //     'Piso4' => [],
    // ];

    // public function asignarPuesto()
    // {
    //     for($i = 1; $i <= 1; $i++){
    //         for($j = 1; $j <= 1; $j++){
    //             $this->pisos[$i][] = $j;
    //             echo("El puesto ocupado en Piso".$i." es " . $j . "<br>") ;
    //         }
    //     }
    // }
    // public function mostrarPisos() {
    //     foreach ($this->pisos as $piso => $puestos) {
    //         echo "Piso: " . $piso . "<br>";
    //         echo "Puestos ocupados: ";
    //         foreach ($puestos as $puesto) {
    //             echo $puesto . " ";
    //         }
    //         echo "<br><br>";
    //     }
    // }

    // public $pisos = ['Piso1', 'Piso2', 'Piso3', 'Piso4'];

    // public function puestoOcupado()
    // {
    //     $placasPiso1 = [];
    //     $puestoAleatorio = rand(1, 10);
    //     $contador = 0;
    //     for ($x = 0; $x < 10; $x++) {
    //         if ($x < $puestoAleatorio) {
    //             array_push($placasPiso1, "OCUPADO,");
    //         } else {
    //             array_push($placasPiso1, "VACÍO,");
    //         }
    //     }
    //     echo ($this->pisos[0] . " = " . $puestoAleatorio);
    //     for ($x = 0; $x < 10; $x++) {
    //         echo $placasPiso1[$x];
    //         if($placasPiso1[$x] == "VACÍO,"){
    //             $contador = $contador  + 1;
    //         }
    //     }
    //     echo $contador;
    //     if ($puestoAleatorio == 10) {
    //         $placasPiso2 = [];
    //         $puestoAleatorio = rand(1, 10);
    //         for ($x = 0; $x < 10; $x++) {
    //             if ($x < $puestoAleatorio) {
    //                 array_push($placasPiso2, "OCUPADO,");
    //             } else {
    //                 array_push($placasPiso2, "VACÍO,");
    //             }
    //         }
    //         echo ($this->pisos[1] . " = " . $puestoAleatorio);
    //         for ($x = 0; $x < 10; $x++) {
    //             echo $placasPiso2[$x];
    //         }
            
    //     }else{
    //         $placasPiso2 = [];
    //         echo "<br>". $this->pisos[1];
    //         for($x = 0 ; $x < 10; $x++){
    //             array_push($placasPiso2, "VACÍO,");
    //         };
    //         for($x = 0 ; $x < 10; $x++){
    //            echo $placasPiso2[$x];
    //         };
    //         $placasPiso3 = [];
    //         $placasPiso4 = [];
    //     }
    // }


        public function numeros()
        {
            $numeros1 = rand(1,10);
            echo $numeros1;
        }
        public function letras()
        {
            $letraAleatoria = chr(rand(ord("A"), ord("Z")));
            echo $letraAleatoria;
        }

}

$parqueadero = new Parqueadero();
// $parqueadero->setPuesto();
$parqueadero->letras();
$parqueadero->numeros();

// $parqueadero->asignarPuesto();
// // $parqueadero->mostrarPisos();
