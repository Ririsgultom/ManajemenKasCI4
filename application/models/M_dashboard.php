<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {
	public function total_($table){
		$sql = "SELECT SUM(jumlah) as total FROM " .$table;

		$data = $this->db->query($sql);

		return $data->row();
	}
	
	public function total_bulanan_($table){
		$sql = "SELECT tanggal, jumlah FROM " .$table;

		$data = $this->db->query($sql);

		return $data->result_array();
	}

	public function ganti_nama($data){
		$sql = "UPDATE admin SET masjid ='" .$data['masjid']. "' WHERE id='" .$data['id'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}