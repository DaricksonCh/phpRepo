<?php

class Parqueadero{

    public $piso1;
    public $puestoAleatorio = [1,2,3,4,5,6,7,8,9,10];

    public function puestoOcupado(){
        foreach($this->puestoAleatorio as $numero){
            echo $numero;
        }
    }




}