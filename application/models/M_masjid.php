<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_masjid extends CI_Model {
	public function getName() {
		$sql = 'SELECT * from masjid';
		
		return $this->db->query($sql)->result_array();
	}

	public function input_panitia($u, $p){
		$sql = "INSERT INTO admin VALUES('','.$u.','.$p. ')";

		$this->db->query($sql);
		

		return $this->db->affected_rows();
	}
}