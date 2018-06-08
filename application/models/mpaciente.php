<?php
/**
*
*/
class Mpaciente extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}
	public function guardarPaciente($param){
		$campos = array(
			'fecha_nacimiento' => $param['fechaNa'],
			'genero' => $param['genero'],
			'id_persona' => $param['idPersona'],
		);
		$this->db->insert('paciente',$campos);

        return $this->db->insert_id();
	}
}

 ?>
