<?php
/**
*
*/
class Mlogin extends CI_Model
{
 public function ingresar($email,$pass){
 		$this->db->select('id_persona, nombres, apellido_paterno, apellido_materno');
 		$this->db->from('persona ');
 		//$this->db->join('persona p', 'p.id = u.idPersona');
 		$this->db->where('email', $email);
 		$this->db->where('password',$pass);

 		$resultado = $this->db->get();

 		if ($resultado->num_rows()== 1) {
 			$r = $resultado->row();

 			$s_user = array(
 				's_id_persona' => $r->id_persona,
 				's_persona' => $r->nombres." ".$r->apellido_paterno." ".$r->apellido_materno
 				);
 		$this->session->set_userdata($s_user);
 		return 1;
 		}else{
 			return $resultado->num_rows();
 		}


 	}

}

 ?>
