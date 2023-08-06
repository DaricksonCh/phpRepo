<?php

include_once "Cliente.php";

class Vehiculo extends Cliente{

    public $strPlaca; 
    public $strMarca;
    public $strColor;

    public function __construct(Cliente $cliente, string $placa, string $marca, string $color)
    {
        parent::__construct($cliente->strNombre, $cliente->intCedula);

        $this->strPlaca=$placa;
        $this->strMarca=$marca;
        $this->strColor=$color;
    }
    public function getDatosPersonalesVehiculo()
    {
        // $datosCliente = $this->getDatosPersonales(); 
        $datosVehiculo = ["
            <h2>Datos del Vehiculo</h2>
            <h3>Placa: $this->strPlaca</h3>
            <h4>Marca: $this->strMarca</h4>
            <h4>Color: $this->strColor</h4>
        "];

        return array_merge($datosVehiculo);
    }
}