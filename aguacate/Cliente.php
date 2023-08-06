<?php

class Cliente{
    
    public $strNombre;
    public $intCedula;

    public function __construct(string $nombre, int $cedula)
    {
        $this->strNombre=$nombre;
        $this->intCedula=$cedula;
    }

    public function getDatosPersonales()
    {
        $datos = ["
        <h2>Datos personales del Cliente</h2>
        <h3>Nombre :$this->strNombre</h3>
        <h4>Cedula :$this->intCedula</h4>
        "];
        return $datos;
    }

}
