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
        $this->load->model('mfamiliar');
	}
	public function index(){
        $data['mensaje'] = ' ';
		$this->load->view('layout/header',$data);
	}

	public function guardar(){

		// Datos Persona
		$param['nombre'] = $this->input->post('txtNombre');
		$param['apellidop'] = $this->input->post('txtApPaterno');
		$param['apellidom'] = $this->input->post('txtApMaterno');
		$param['emailp'] = $this->input->post('txtEmail');
		$param['clavep'] = sha1($this->input->post('txtClave'));


		$lastId = $this->mpersona->guardar($param);

		if ($this->input->post('tipo') == "1"){
            $paramF['idPersona'] = $lastId;
            $paramF['direccion'] = $this->input->post('txtDir');
		    $paramF['telefono'] = $this->input->post('txtTel');
            $res = $this->mfamiliar->guardarFamiliar($paramF);
        }

        if ($lastId > 0 && $res>0){
           echo "OK";
        }else{
            echo "Comuniquese con el administrador de la página";
        }
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
        $data['mensaje'] = ' ';
		$idP = $this->input->post('txtIdP');
		$this->musuario->eliminarUsuario($idP);
		$this->mpersona->eliminarPersona($idP);
		$this->load->view('layout/header',$data);
		$this->load->view('layout/menu');
		$this->load->view('personas/vupdatepersona');
		$this->load->view('layout/footer');
	}
}
?>
