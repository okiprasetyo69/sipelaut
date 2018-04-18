<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_users extends CI_Model {
	
	public function showAllUsers(){
		$query = $this->db->get('users');
		if ($query->num_rows()>0 ) {
			return $query->result();
		} else {
			return false;
		}
	}

}

/* End of file M_users.php */
/* Location: ./application/models/M_users.php */