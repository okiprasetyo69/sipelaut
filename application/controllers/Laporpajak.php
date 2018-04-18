<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporpajak extends CI_Controller {

	public function index()
	{
		$this->load->view('design/header');
		$this->load->view('design/sidebar');
		$this->load->view('master/v_laporpajak');
		$this->load->view('design/footer');	
	}

}

/* End of file Laporpajak.php */
/* Location: ./application/controllers/Laporpajak.php */