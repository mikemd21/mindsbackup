<?php
/**
* Controlador de datos de la persona
*/
class Cactividad extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('mpersona');
		$this->load->model('mpaciente');
        $this->load->model('mfamiliar');
	}

	public function index(){
		$this->load->view('layout/header2');
		$this->load->view('layout/actividad');
		$this->load->view('layout/footer');
	}

}
