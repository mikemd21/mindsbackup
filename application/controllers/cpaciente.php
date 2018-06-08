<?php
/**
* Controlador de datos de la persona
*/
class Cpaciente extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('mpersona');
		$this->load->model('mpaciente');
	}
	public function index(){
		$data['mensaje'] = ' ';
		$this->load->view('layout/header2');
		$this->load->view('layout/registrar_paciente',$data);
		$this->load->view('layout/footer');
	}

	public function guardar(){
		// Datos Persona
		$param['nombre'] = $this->input->post('txtNombre');
		$param['apellidop'] = $this->input->post('txtApPaterno');
		$param['apellidom'] = $this->input->post('txtApMaterno');
        $param['emailp'] = '';
        $param['clavep'] = '';
		//Datos Usuario
		$lastId = $this->mpersona->guardar($param);
		$data['mensaje'] = ' ';

		$this->load->view('layout/header',$data);
		$this->load->view('index');
		$this->load->view('layout/footer');

		// Datos del paciente
		if ($lastId>0) {
			$paramPa['idPersona'] = $lastId;
			$paramPa['fechaNa'] = $this->input->post('txtDate');
			$paramPa['genero'] = $this->input->post('txtGenero');

		 	if ($this->input->post('txtDate') && $this->input->post('txtGenero') != 0) {
				$this->mpaciente->guardarPaciente($paramPa);
			}
	}
}
}
