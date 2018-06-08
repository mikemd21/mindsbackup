<?php
/**
*
*/
class Clogin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('mlogin');
	}

	public function index(){
		$data['mensaje'] = " ";
		$this->load->view('layout/header',$data);
		$this->load->view('index');
		$this->load->view('layout/footer');
	}
	public function ingresar(){
		$email = $this->input->post('txtEmail');
		$pass = sha1($this->input->post('txtPassword'));

		$result = $this->mlogin->ingresar($email,$pass);

		if ($result == 1) {
			echo "OK";
		}else{
			echo "NO";
		}
	}
}

 ?>
