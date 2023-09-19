<?php

class ProductoModel extends Mysql{
  private $intCodigo;
  private $strNombre;
  private $strDescripcion;
  private $intPrecio;

  public function __construct()
  {
    parent::__construct();
  }
  public function setProducto(int $codigo, string $nombre, string $descripcion, int $precio)
  {
    $this->intCodigo=$codigo;
    $this->strNombre=$nombre;
    $this->strDescripcion=$descripcion;
    $this->intPrecio=$precio;

    $sql = "INSERT INTO productos(codigo,nombrePdto,descripcionPdto,precio) VALUES (:codigo,:nombre,:descripcion,:precio)";
    $arrData=[
      ":codigo"=>$this->intCodigo,
      ":nombre"=>$this->strNombre,
      ":descripcion"=>$this->strDescripcion,
      ":precio"=>$this->intPrecio
    ];
    $request_insert=$this->insert($sql,$arrData);
    return $request_insert;
  }
}



?>