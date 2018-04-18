<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportrestoran extends CI_Controller {

	public function index()
	{
		$this->load->view('design/header');
		$this->load->view('design/sidebar');
		$this->load->view('master/v_reportrestoran');
		$this->load->view('design/footer');
	}

}

/* End of file Reportrestoran.php */
/* Location: ./application/controllers/Reportrestoran.php */