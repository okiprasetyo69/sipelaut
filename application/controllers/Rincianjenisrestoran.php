<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rincianjenisrestoran extends CI_Controller {

	public function index()
	{
		$this->load->view('design/header');
		$this->load->view('design/sidebar');
		$this->load->view('master/v_rincianjenisrestoran');
		$this->load->view('design/footer');
	}

}

/* End of file Rincianjenisrestoran.php */
/* Location: ./application/controllers/Rincianjenisrestoran.php */