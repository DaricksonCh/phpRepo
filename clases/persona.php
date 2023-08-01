<?php

class Persona{
    private int $dpi;
    private String $nombre;
    private int $edad;

    public function __construct(int $dpi,String $nombre,int $edad)
    {
        $this->dpi=$dpi;
        $this->nombre=$nombre;
        $this->edad=$edad;
    }

    public function getDatosPersonales()
    {
        $datos = $this->dpi . " " . $this->nombre . " " . $this->edad;
        return $datos; 
    }


}
