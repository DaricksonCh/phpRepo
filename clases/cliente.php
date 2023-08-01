<?php

require_once "persona.php";

class Cliente extends Persona{

    private float $creditos;


    public function __construct($dpi,$nombre,$edad)
    {
        parent::__construct($dpi,$nombre,$edad);
    }

    public function setCredito(float $creditos)
    {
        $this->creditos=$creditos;
    }

    public function getCredito()
    {
        return $this->creditos;
    }


}