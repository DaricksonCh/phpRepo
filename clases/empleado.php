<?php

require_once "persona.php";

class Empleado extends Persona{

    private string $puesto;


    public function __construct($dpi,$nombre,$edad)
    {
        parent::__construct($dpi,$nombre,$edad);
    }

    public function setPuesto(string $puesto)
    {
        $this->puesto = $puesto;
    }

    public function getPuesto()
    {
        return $this->puesto;
    }

}