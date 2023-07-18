<?php

class Usuario{
    private $strNombre;
    private $strEmail;
    private $strTipo;
    private $strClave;

    function __construct(string $nombre,string $email, string $tipo){
        $this -> strNombre = $nombre;
        $this -> strEmail = $email;
        $this -> strTipo = $tipo;
        $this -> strClave = rand(1,10000);
    }
    //Establacemos los get del objeto
    public function getNombre(){
        return $this -> strNombre;
    }

    public function verPerfil(){
        echo "<br> Los datos del usuario ". $this -> strNombre ." son ";
        echo "<br> Correo <br>";
        echo $this -> strEmail;
        echo "<br> Tipo <br>";
        echo $this -> strTipo;
        echo "<br> Clave <br>";
        echo $this -> strClave;
    }

    public function cambiarClave($claveNueva){
        $this -> strClave = $claveNueva;
    }
    // get clave
    public function getClave(){
        return $this -> strClave;
    }

}

?>