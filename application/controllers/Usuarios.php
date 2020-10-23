<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
$this->load->model(array('Musuarios'));


  }

  function index()
  {

  }

  public function lista(){
$estado=$this->input->post('estado');

$data['lista']=$this->Musuarios->getestados($estado);
$this->load->view('mantenimiento/body', $data);
    }


  public function getall($valo){


     $usuarios=$this->Musuarios->getestados($valo);
     echo json_encode($usuarios);
  }




    public function activar(){
   $valor =$this->input->post('valor');


   $estadoform=$this->input->post('estadoactual');
if ($estadoform == 'activo') {
  $this->Musuarios->update_estado($valor,$estadoform);
  echo "editado";
}else {
    echo "ya esta activo";
  }




  }





  public function eliminar(){
 $valor =$this->input->post('valor');


 $estadoform=$this->input->post('estadoactual');


if ($estadoform != 'inactivo') {

  echo "inactivo";

} else {
  if (isset($valor)) {

    // foreach ($valor as $key) {
      $this->Musuarios->update_estado($valor,$estadoform);
  //  }

       echo "editado";

  } else {
     echo "vacio";
  }

}







}

  public function save(){



    $accion = $this->input->post('txtAccion');
    $id = $this->input->post('id');
    $nombre = $this->input->post('nombre');
    $fechaactual = $this->input->post('fecha');
$estadoform = $this->input->post('estadoform');
          $fecha = date("Y-m-d");

if ($fechaactual <> $fecha) {
  $estado = "inactivo";
}else {
  $estado = "activo";
}


   if (strlen($nombre)>0 ) {



  $datos = array(
                  'nombre'=>$nombre,
                  'estado'=>$estado,
                  'fecha_creacion'=>$fechaactual
                 );

   if($accion=='nuevo'){

             // ----------------validacion

             if($this->Musuarios->exist($nombre)<1){

                echo $this->Musuarios->save($datos);
                  } else{
                  echo "existe";
              }


// --------------



  }elseif ($accion=='editar') {


if ($estadoform == "inactivo") {

echo "inactivo";
}else {
  if($this->Musuarios->exist($nombre)<1){
         $fecha = date("Y-m-d");
     echo $this->Musuarios->update($nombre,$id,$fecha);
       } else{
       echo "existe";
   }
}




  }

  }else {
    echo "campo vacio";
  }

  }
//
}
