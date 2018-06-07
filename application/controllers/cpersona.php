<?php
/**
* Controlador de datos de la persona
*/
class Cpersona extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('mpersona');
		$this->load->model('mpaciente');
		$this->load->library('encrypt');
	}
	public function index(){
		$this->load->view('layout/header');
	}

	public function guardar(){
		// Datos Persona
		$param['nombre'] = $this->input->post('txtNombre');
		$param['apellidop'] = $this->input->post('txtApPaterno');
		$param['apellidom'] = $this->input->post('txtApMaterno');
		$param['emailp'] = $this->input->post('txtEmail');
		$param['clavep'] = $this->encrypt->sha1($this->input->post('txtClave'));

		$lastId = $this->mpersona->guardar($param);

		//Datos Usuario

		$data['mensaje'] = ' ';

		$this->load->view('layout/header',$data);
		$this->load->view('index');
		$this->load->view('layout/footer');
		/*if ($lastId>0) {
			$paramUser['idPersona'] = $lastId;
			//$this->musuario->guardarUsuario($paramUser);
		}
	*/
	}

	public function actualizarDatos(){
		$param['nombre'] = $this->input->post('txtNombre');
		$param['apellidop'] = $this->input->post('txtApPaterno');
		$param['apellidom'] = $this->input->post('txtApMaterno');
		$param['email'] = $this->input->post('txtEmail');

		$this->mpersona->actualizarDatos($param);
		$this->load->view('personas/vregpersonas');
	}
	public function eliminarPersona(){
		$idP = $this->input->post('txtIdP');
		$this->musuario->eliminarUsuario($idP);
		$this->mpersona->eliminarPersona($idP);
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('personas/vupdatepersona');
		$this->load->view('layout/footer');
	}
}
?>
