<?php

class ClienteModel extends Mysql
  {
    private $intIdCliente;
    private $strCedula;
    private $strNombres;
    private $strApellidos;
    private $intTelefono;
    private $strEmail;
    private $strDireccion;
    private $strNit;
    private $strNomFiscal;
    private $strDirFiscal;
    private $intStatus;


        public function __construct()
        {
            parent::__construct();
        }
        public function setCliente(string $cedula,string $nombres, string $apellidos, int $telefono, string $email, string $direccion, string $nit, string $nombreFiscal, string $direccionFiscal)
        {
          $this->strCedula=$cedula;
          $this->strNombres=$nombres;
          $this->strApellidos=$apellidos;
          $this->intTelefono=$telefono;
          $this->strEmail=$email;
          $this->strDireccion=$direccion;
          $this->strNit=$nit;
          $this->strNomFiscal=$nombreFiscal;
          $this->strDirFiscal=$direccionFiscal;

          $sql = "SELECT cedula, email FROM clientes WHERE (email=:email or cedula=:cedula) AND status=:status";
          $arrayParams = [
            ":email"=>$this->strEmail,
            ":cedula"=>$this->strCedula,
            ":status"=>1
          ];
          $request = $this->select($sql,$arrayParams);
          // $sql = "SELECT COUNT(*) as count FROM clientes WHERE (email = :email OR cedula = :cedula) AND status = :status";
          // $arrayParams  = [
          //     ":cedula" => $cedula,
          //     ":email" => $email,
          //     ":status"=>1
          // ];
          // $request  = $this->select($sql, $arrayParams )["count"];

          if ($request  > 0) {
            return false;
        }else {
            $query_insert="INSERT INTO clientes(cedula,nombres,apellidos,telefono,email,direccion,nit,nombreFiscal,direccionFiscal) VALUES
            (:cedula,:nom,:ape,:tel,:email,:dir,:nit,:nomFiscal,:dirFiscal)";
            $arrData=[
              ":cedula"=>$this->strCedula,
              ":nom"=>$this->strNombres,
              ":ape"=>$this->strApellidos,
              ":tel"=>$this->intTelefono,
              ":email"=>$this->strEmail,
              ":dir"=>$this->strDireccion,
              ":nit"=>$this->strNit,
              ":nomFiscal"=>$this->strNomFiscal,
              ":dirFiscal"=>$this->strDirFiscal
            ];
            $request_insert=$this->insert($query_insert,$arrData);
            return $request_insert;
        }
      }
      public function updateCliente(int $idCliente,string $cedula,string $nombres, string $apellidos, int $telefono, string $email, string $direccion, string $nit, string $nombreFiscal, string $direccionFiscal)
      {
        $this->strCedula=$cedula;
        $this->strNombres=$nombres;
        $this->strApellidos=$apellidos;
        $this->intTelefono=$telefono;
        $this->strEmail=$email;
        $this->strDireccion=$direccion;
        $this->strNit=$nit;
        $this->strNomFiscal=$nombreFiscal;
        $this->strDirFiscal=$direccionFiscal;
        $this->intIdCliente=$idCliente;
        $sql = "SELECT idCliente FROM clientes WHERE idCliente = :idCliente";
        $params = [
          ":idCliente"=>$this->intIdCliente
        ];
        $request = $this->select($sql,$params);
        if (empty($request)) {
          return false;
        }else {
            $sql = "UPDATE clientes SET
            cedula = :cedula,
            nombres = :nombres,
            apellidos = :apellidos,
            telefono = :telefono,
            email = :email,
            direccion = :direccion,
            nit = :nit,
            nombreFiscal = :nombreFiscal,
            direccionFiscal = :direccionFiscal
            WHERE idCliente = :idCliente";

            $params = [
              ":idCliente"=>$this->intIdCliente,
              ":cedula" => $this->strCedula,
              ":nombres" => $this->strNombres,
              ":apellidos" => $this->strApellidos,
              ":telefono" => $this->intTelefono,
              ":email" => $this->strEmail,
              ":direccion" => $this->strDireccion,
              ":nit" => $this->strNit,
              ":nombreFiscal" => $this->strNomFiscal,
              ":direccionFiscal" => $this->strDirFiscal
            ];
            $updatedRows = $this->update($sql, $params);
            return $updatedRows;
        }
      }
      public function deleteClient(int $idCliente)
      {
        $this->intIdCliente=$idCliente;
        $sql = "SELECT idCliente FROM clientes WHERE idCliente = :idCliente";
        $params=[
          ":idCliente"=>$this->intIdCliente
        ];
        $request = $this->select($sql,$params);
        if(empty($request)){
          return false;
        }else{
          $sql = "DELETE FROM clientes WHERE idCliente = :idCliente";
          $params = [
            ":idCliente"=>$this->intIdCliente,
          ];
          $deleteRows = $this->delete($sql,$params);
          return $deleteRows;
        }
      }
      public function showClients()
      { 
        $sql = 'SELECT * FROM clientes';
        $showClientes = $this->select_all($sql);
        return $showClientes;
      }
    }



    
  // $sql = "SELECT idCliente FROM clientes WHERE idCliente != :idCliente AND (email = :email OR cedula = :cedula) AND status = :status";
        // $params = [
        //     ":idCliente" => $idCliente,
        //     ":email" => $email,
        //     ":cedula" => $cedula,
        //     ":status" => 1
        // ];
?>

