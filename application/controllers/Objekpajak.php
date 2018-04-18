<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objekpajak extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('mobjpajak');
	}

	public function index()
	{
		$this->load->view('design/header');
		$this->load->view('design/sidebar');
		$this->load->view('master/v_objekpajak');
		$this->load->view('design/footer');	
	}

	function getAllData(){
		$data = $this->mobjpajak->getAllObjPajak();
		echo json_encode($data);
	}

	function getById(){
		$id=$this->input->get('id');
		$data=$this->mobjpajak->getByIdObjPajak();
		echo json_encode($data);
	}

	function addObjPajak(){
		$id = $this->input->post('id');
		$nama_wp = $this->input->post('nama_wp');
		$data = $this->mobjpajak->addObjPajak('$id, $nama_wp');
		echo json_encode($data);
	}

	function updateObjPajak(){
		$id = $this->input->post('id');
		$nama_wp = $this->input->post('nama_wp');
		$data = $this->mobjpajak->updateObjPajak('$id, $nama_wp');
		echo json_encode($data);
	}

	function delObjPajak(){
		$id = $this->input->post('id');
		$data = $this->mobjpajak->deleteObjPajak('$id');
		echo json_encode($data);
	}

}

/* End of file wajibpajak.php */
/* Location: ./application/controllers/wajibpajak.php */