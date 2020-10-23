<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct()
   {
     parent::__construct();
     //Codeigniter : Write Less Do More

		 $this->load->model(array('Musuarios'));



   }


	public function index()
	{
	//	$this->load->view('welcome_message');
$data['user']=$this->Musuarios->getusuarios();

// 	$this->load->view('mantenimiento/vUsuarios',$data);

$this->load->view('mantenimiento/vUser',$data);
	}



}
