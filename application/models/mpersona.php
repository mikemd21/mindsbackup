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

}

 ?>
