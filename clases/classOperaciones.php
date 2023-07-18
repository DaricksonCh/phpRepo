<?php

class Operaciones{
    //Propiedades
    public $cantidadUno;

    public $cantidadDos;

    public $resultado = 0;

    //metodos

    //definiciones de metodo constructor

    function __construct(int $can1, int $can2) {
        $this -> cantidadUno = $can1;
        $this -> cantidadDos = $can2;
    }
    public function suma(){
        $this -> resultado = $this -> cantidadUno + $this -> cantidadDos;
        return $this -> resultado;
    }
    public function resta(){
        $this -> resultado = $this -> cantidadUno - $this -> cantidadDos;
        return $this -> resultado;
    }
    public function multiplicacion(){
        $this -> resultado = $this -> cantidadUno * $this -> cantidadDos;
        return $this -> resultado;
    }
    public function division(){
        $this -> resultado = $this -> cantidadUno / $this -> cantidadDos;
        return $this -> resultado;
    }


}

?>