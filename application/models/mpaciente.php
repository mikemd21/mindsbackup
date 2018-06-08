<?php

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

    public function getPaciente($id){
        $this->db->select('persona.nombres,persona.apellido_paterno,persona.apellido_materno,paciente.genero,paciente.fecha_nacimiento');
        $this->db->from('persona');
        $this->db->join('paciente', 'paciente.id_persona = persona.id_persona');
        $this->db->join('familiar', 'familiar.id_paciente = paciente.id_paciente');
        $this->db->where('familiar.id_persona', $id);

        $query = $this->db->get();

        if ($query->num_rows()== 1) {
 			$r = $query->row();

 			$user = array(
 				'nom' => $r->nombres,
 				'app1' => $r->apellido_paterno,
                'app2' => $r->apellido_materno,
                'genero' => $r->genero,
                'fecha' => $r->fecha_nacimiento
 				);
            return $user;
        }else{
                $user = array(
 				'nom' => '',
 				'app1' => '',
                'app2' => '',
                'fecha' => '',
                'genero' => ' '
 				);
            return $user;
        }
}
}
 ?>
