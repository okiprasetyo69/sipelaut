<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekaphotel extends CI_Controller {

	public function index()
	{
		$this->load->view('design/header');
		$this->load->view('design/sidebar');
		$this->load->view('master/v_rekaphotel');
		$this->load->view('design/footer');	
	}

}

/* End of file Rekaphotel.php */
/* Location: ./application/controllers/Rekaphotel.php */