<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('m_users', 'm');
	}

	public function index()
	{
		$this->load->view('design/header');
		$this->load->view('design/sidebar');
		$this->load->view('master/v_users');
		$this->load->view('design/footer');
	}

	public function showAllUsers(){
		$result = $this->m->showAllUsers();
		echo json_encode($result);
	}
}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */