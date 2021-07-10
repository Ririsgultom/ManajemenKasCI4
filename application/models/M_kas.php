<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kas extends CI_Model {
	public function get_pemasukan(){
		$sql = 'select kas_masuk.id, kas_masuk.nomor, kas_masuk.tanggal, 
				kas_masuk.jumlah, kas_masuk.keterangan, kategori.kategori from kas_masuk, 
				kategori WHERE kas_masuk.kategori = kategori.id';

		return $this->db->query($sql)->result_array();
	}
	
	public function get_pengeluaran(){
		$sql = 'select kas_keluar.id, kas_keluar.nomor, kas_keluar.tanggal, 
				kas_keluar.jumlah, kas_keluar.keterangan, kategori.kategori from kas_keluar, 
				kategori WHERE kas_keluar.kategori = kategori.id';

		return $this->db->query($sql)->result_array();
	}
	
	public function insert_data($table, $data) {
		$insert = array(
			'id'			=> '',
            'nomor'       	=> $data['nomor'],
            'tanggal'       => $data['tanggal'],
            'kategori'      => $data['kategori'],
            'jumlah'     	=> $data['jumlah'],
            'keterangan'    => $data['keterangan'], 
        );
        $this->db->insert($table, $insert);
	}
	
	public function get_data_by_id($table, $id){
		return $this->db->get_where($table, array('id' => $id))->row_array();
	}

	public function update_data($table, $data){
		$in = array(
			'id'			=> $data['id'],
            'nomor'       	=> $data['nomor'],
            'tanggal'       => $data['tanggal'],
            'kategori'      => $data['kategori'],
            'jumlah'     	=> $data['jumlah'],
            'keterangan'    => $data['keterangan'], 
		);

		$this->db->where('id', $data['id']);
		return $this->db->update($table, $in);
	}
	
    public function hapus_data($table, $id)
    {
        return $this->db->delete($table, ['id' => $id]);
    }
}