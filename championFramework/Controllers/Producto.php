<?php

class Producto extends Controllers{
  public function __construct()
  {
    parent::__construct();
  }
  public function registro(){
    try{
      $method = $_SERVER['REQUEST_METHOD'];
      $response = [];
      if($method == "POST"){
        $_POST = json_decode(file_get_contents('php://input'),true);
        if(empty($_POST['codigo'])){
          $response = [
            'status'=>false,
            'msg'=>'Error, codigo es requerida'
          ];
          jsonResponse($response,200);
          die();
        }
        if(!testString($_POST['nombrePdto'])){
          $response = [
              'status'=>false,
              'msg'=>'Error, el nombrePdto es requeridos'
          ];
          jsonResponse($response,200);
          die();
        }
        if(!testString($_POST['descripcionPdto'])){
          $response = [
              'status'=>false,
              'msg'=>'Error, el descripcionPdto es requeridos'
          ];
          jsonResponse($response,200);
          die();
        }
        $intCodigo = $_POST['codigo'];
        $strNombrePdto = ucwords(strtolower($_POST['nombrePdto']));
        $strDescripcion = ucwords(strtolower($_POST['descripcionPdto']));
        $intPrecio = $_POST['precio'];

        $request = $this->model->setProducto($intCodigo,$strNombrePdto, $strDescripcion, $intPrecio);

        if($request > 0){
          $arrProducto = [
            'idProducto'=>$request,
            'codigo'=>$intCodigo,
            'nombrePdto'=>$strNombrePdto,
            'descripcionPdto'=>$strDescripcion
          ];
          $response = [
            'status'=>true,
            'msg'=>'Producto guardado con exito',
            'data'=>$arrProducto
          ];
          $code = 200;
        }
      }else{
        $response = [
            'status'=>false,
            'msg'=>'Error en la solicitud del metodo: '. $method . ' cambie su tipo de metodo a POST'
        ];
        $code = 400;
    }
    jsonResponse($response,$code);
    die();
    }catch(Exception $e){
			echo "ERROR en el proceso :registroPdto ".$e->getMessage();
	  }
  }
}



?>