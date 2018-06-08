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

        return true;
	}
	public function eliminarUsuario($idP){
 		$campos = array('idPersona' => $idP);
 		$this->db->delete('usuario',$campos);
 	}
}

 ?>
