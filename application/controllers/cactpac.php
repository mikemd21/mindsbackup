<?php
/**
* Controlador de datos de la persona
*/
class Cactpac extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('mpersona');
		$this->load->model('mpaciente');
        $this->load->model('mfamiliar');
	}

	public function index(){
		$this->load->view('layout/header3');
		$this->load->view('layout/actpac');
		$this->load->view('layout/footer');
	}

}
