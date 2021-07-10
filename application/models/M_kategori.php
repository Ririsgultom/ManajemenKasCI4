<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model {
	public function get_all() {
		return $this->db->get('kategori')->result_array();
	}
	
	public function insert_data($table, $data) {
		$insert = array(
			'id'			=> '',
            'kategori'     	=> $data['kategori'],
        );

        $this->db->insert($table, $insert);
	}
	
	public function get_data_by_id($table, $id){
		return $this->db->get_where($table, array('id' => $id))->row_array();
	}
	
	public function update_data($table, $data){
		$in = array(
			'id'			=> $data['id'],
            'kategori'      => $data['kategori'],
		);

		$this->db->where('id', $data['id']);
		return $this->db->update($table, $in);
	}

	public function hapus_data($table, $id) {
        return $this->db->delete($table, ['id' => $id]);
	}
}
?>