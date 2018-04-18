<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->load->model('M_login');
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$passwords = $this->input->post('passwords');
		$where = array(
			'username' => $username,
			'passwords' => md5($passwords)
			);
		$cek = $this->m_login->cek_login("Sys Admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("Sys Admin"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */