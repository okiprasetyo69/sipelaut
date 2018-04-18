<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rincianjenishotel extends CI_Controller {

	public function index()
	{
		$this->load->view('design/header');
		$this->load->view('design/sidebar');
		$this->load->view('master/v_rincianjenispajak');
		$this->load->view('design/footer');	
	}

}

/* End of file Rincianjenishotel.php */
/* Location: ./application/controllers/Rincianjenishotel.php */