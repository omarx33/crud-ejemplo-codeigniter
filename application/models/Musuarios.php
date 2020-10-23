<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musuarios extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }



  public function getusuarios(){
  $this->db->select('*');
  $this->db->from('usuarios');
  $this->db->group_by('estado');
  $query=$this->db->get();
  return $query->result();
}


public function exist($nombre){
$this->db->select('*');
$this->db->from('usuarios');
  $this->db->where('nombre', $nombre);
  $query=$this->db->get();
  return $query->num_rows();
}


public function save($datos){

  if($this->db->insert('usuarios', $datos)){
    echo "agregado";
    }



}

public function update($nombre,$id,$fecha){

  $datos = array(
                  'nombre'=>$nombre,
                  'fecha'=>$fecha
                 );

  $this->db->where('id', $id);
  $this->db->update('usuarios',$datos);

  if ($this->db->affected_rows()>0) {
  echo "actualizado";

}
}



public function update_estado($valor,$estadoform){

  $dato = array(
                  'estado'=>$estadoform
                 );

  $this->db->where('id', $valor);
  $this->db->update('usuarios',$dato);

  if ($this->db->affected_rows()>0) {


}
}

public function getestados($valo){
$this->db->select('*');
$this->db->from('usuarios');

if ($valo != "todo") {
    $this->db->where('estado', $valo);
}

$query=$this->db->get();
return $query->result();
}





}
