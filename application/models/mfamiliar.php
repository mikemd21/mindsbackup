<?php
/**
*
*/
class Mfamiliar extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}
	public function guardarFamiliar($param){
		$campos = array(
			'direccion' => $param['direccion'],
            'telefono' => $param['telefono'],
			'id_persona' => $param['idPersona'],
		);
		$this->db->insert('familiar',$campos);

        return $this->db->insert_id();
	}

    public function actFamiliar($param){
		$campos = array(
			'id_paciente' => $param['idPaciente']
		);

        $this->db->where('id_persona',$this->session->userdata('s_id_persona'));
        $this->db->update('familiar', $campos);

        return $this->db->affected_rows();
	}
}

 ?>
