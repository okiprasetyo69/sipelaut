<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenispajak extends CI_Controller {

	public function index()
	{
		$this->load->view('design/header');
		$this->load->view('design/sidebar');
		$this->load->view('master/v_rincianjenispajak');
		$this->load->view('design/footer');	
	}

}

/* End of file Jenispajak.php */
/* Location: ./application/controllers/Jenispajak.php */