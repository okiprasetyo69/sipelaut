<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reporthotel extends CI_Controller {

	public function index()
	{
		$this->load->view('design/header');
		$this->load->view('design/sidebar');
		$this->load->view('master/v_reporthotel');
		$this->load->view('design/footer');
	}

}

/* End of file Reporthotel.php */
/* Location: ./application/controllers/Reporthotel.php */