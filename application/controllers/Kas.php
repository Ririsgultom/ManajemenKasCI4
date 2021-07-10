<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kas extends AUTH_Controller {
	public function masuk() {			
		$this->data['title'] 	= "Pemasukan Masjid";
		$this->data['kas'] 		= $this->M_kas->get_pemasukan();
		$this->data['kategori'] = $this->M_kategori->get_all();

		$this->data['modal_tambah'] = show_my_modal('modals/modal_tambah_data', 'tambah-data', $this->data);
		
		$this->template->views('kas/v_kas', $this->data);
	}
	
	public function keluar() {			
		$this->data['title'] 	= "Pengeluaran Masjid";
		$this->data['kas'] 		= $this->M_kas->get_pengeluaran();
		$this->data['kategori'] = $this->M_kategori->get_all();

		$this->data['modal_tambah'] = show_my_modal('modals/modal_tambah_data', 'tambah-data', $this->data);

		$this->template->views('kas/v_kas', $this->data);
	}
	
	public function tambah(){
        $this->form_validation->set_rules('nomor', 'No. Kwitansi', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required|numeric');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');

		$data = $this->input->post();
		
		if ($this->form_validation->run()) {
			if ($data['kat'] == '1'){
				$table = 'kas_masuk';
			}
			else if($data['kat'] == '2'){
				$table = 'kas_keluar';
			}
			
			$result = $this->M_kas->insert_data($table, $data);
			
			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Penjualan Berhasil ditambahkan', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Data Penjualan Gagal ditambahkan', '20px');
			}
		}
		else {
			$out['status'] = 'form';
			$out['nomor_error'] = show_err_msg(form_error('nomor'));
			$out['tanggal_error'] = show_err_msg(form_error('tanggal'));
			$out['kategori_error'] = show_err_msg(form_error('kategori'));
			$out['jumlah_error'] = show_err_msg(form_error('jumlah'));
			$out['keterangan_error'] = show_err_msg(form_error('keterangan'));
		}
			
		echo json_encode($out);
	}
	
	public function update() {
		$id = trim($_POST['id']);
		$title = trim($_POST['title']);

		$this->data['title'] 	= $title;
		$this->data['kategori'] = $this->M_kategori->get_all();

		if($title == "Pemasukan Masjid"){
			$this->data['dataKas'] = $this->M_kas->get_data_by_id('kas_masuk', $id);
		}
		else if($title == "Pengeluaran Masjid"){
			$this->data['dataKas'] = $this->M_kas->get_data_by_id('kas_keluar', $id);
		}

		echo show_my_modal('modals/modal_update_data', 'update-data', $this->data);
	}

	public function prosesUpdate(){
        $this->form_validation->set_rules('nomor', 'No. Kwitansi', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required|numeric');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');

		$data = $this->input->post();

		if ($this->form_validation->run()) {
			if ($data['kat'] == '1'){
				$table = 'kas_masuk';
			}
			elseif ($data['kat'] == '2'){
				$table = 'kas_keluar';
			}
			
			$result = $this->M_kas->update_data($table, $data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Penjualan Berhasil ditambahkan', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Data Penjualan Gagal ditambahkan', '20px');
			}
		}
		else {
			$out['status'] = 'form';
			$out['nomor_error'] = show_err_msg(form_error('nomor'));
			$out['tanggal_error'] = show_err_msg(form_error('tanggal'));
			$out['kategori_error'] = show_err_msg(form_error('kategori'));
			$out['jumlah_error'] = show_err_msg(form_error('jumlah'));
			$out['keterangan_error'] = show_err_msg(form_error('keterangan'));
		}
			
		echo json_encode($out);
	}

	public function hapus_data() {
		$id = trim($_POST['id']);
		$title = trim($_POST['title']);

		if($title == "Pemasukan Masjid"){
			$table = 'kas_masuk';	
		}
		else if($title == "Pengeluaran Masjid"){
			$table = 'kas_keluar';
		}
		
		$result = $this->M_kas->hapus_data($table, $id);
		
		if ($result > 0) {
			echo show_succ_msg('Bulan Berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Bulan Gagal dihapus', '20px');
		}
	}
}