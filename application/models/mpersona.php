<?php
 /**
 *
 */
 class Mpersona extends CI_Model
 {

 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function guardar($param){
 		$campos = array(
 			'nombres'=> $param['nombre'],
 			'apellido_paterno'=> $param['apellidop'],
 			'apellido_materno'=> $param['apellidom'],
 			'email'=> $param['emailp'],
 			'password' => $param['clavep']);

 		$this->db->insert('persona',$campos);

 		return $this->db->insert_id();
 	}
 	public function actualizarDatos($param){
 		$campos = array(
 			'nombre'=> $param['nombre'],
 			'apellidop'=> $param['apellidop'],
 			'apellidom'=> $param['apellidom'],
 			'email'=> $param['email']);
 		$this->db->where('id',$this->session->userdata('s_idPersona'));
 		$this->db->update('persona',$campos);

 		return 1;
 	}
 	public function eliminarPersona($idP){
 		$this->db->where('id',$idP);
 		$this->db->delete('persona');
 	}
}

 ?>
