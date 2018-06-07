<?php

/**
* Clase de las ciudades
*/
class Cciudad extends CI_controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('mciudad');
	}
	public function getCiudades(){
		$s = $this->input->post('altReg');
		$resultado = $this->mciudad->getCiudades($s);
		echo json_encode($resultado);
	}
}



 ?>
