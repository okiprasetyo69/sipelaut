<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobjpajak extends CI_Model {

function getAllObjPajak(){
		$hasil = $this->db->query("SELECT * FROM objekpajak");
		return $hasil->$result();
	}

	function addObjPajak($id, $nama_wp){
		$hasil = $this->db->query("INSERT INTO objekpajak(id, nama_wp)");
		return $hasil->$result();
	}

	function getByIdObjPajak($id){
		$hasil = $this->db->query("SELECT * FROM objekpajak WHERE id='$id'");
		if ($hasil->num_rows() > 0) {
			foreach ($hasil->result() as $data) {
				$hsl = array(
					'id' => $data->id,
					'nama_wp' => $data->nama_wp
				);
			}
		}
		return $hsl;
	}

	function updateObjPajak($id, $nama_wp){
		$hasil = $this->db->query("UPDATE objekpajak SET nama_wp='$nama_wp' WHERE id='$id'");
		return $hasil;
	}

	function deleteObjPajak(){
		$hasil = $this->db->query("DELETE FROM objekpajak WHERE id='$id'");
		return $hasil;
	}
	

}

/* End of file Mobjpajak.php */
/* Location: ./application/models/Mobjpajak.php */