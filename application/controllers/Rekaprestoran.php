<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekaprestoran extends CI_Controller {

	public function index()
	{
		$this->load->view('design/header');
		$this->load->view('design/sidebar');
		$this->load->view('master/v_rekaprestoran');
		$this->load->view('design/footer');			
	}

}

/* End of file Rekaprestoran.php */
/* Location: ./application/controllers/Rekaprestoran.php */