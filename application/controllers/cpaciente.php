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
		$data['act'] = 'P';
		$this->load->view('layout/header2',$data);
		$this->load->view('layout/registrar_paciente');
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

		// Datos del paciente
		if ($lastId>0) {
			$paramPa['idPersona'] = $lastId;
			$paramPa['fechaNa'] = $this->input->post('txtDate');
			$paramPa['genero'] = $this->input->post('txtGenero');

		 	if ($this->input->post('txtDate') != '' && $this->input->post('txtGenero') != '') {
				$res = $this->mpaciente->guardarPaciente($paramPa);
                if ($res){
                    echo 'OK';
                }else{
                    echo 'Comuniquese con el administrador de la aplicacion';
                }
			}else{
                echo 'Comuniquese con el administrador de la aplicacion';
            }
	   }else{
            echo 'Comuniquese con el administrador de la aplicacion';
        }
}
}
