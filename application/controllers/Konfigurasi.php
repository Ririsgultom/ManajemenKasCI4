<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends AUTH_Controller {
    public function index(){
        $this->data['title'] = "Kategori";

		$this->data['kategori'] = $this->M_kategori->get_all();

		$this->data['modal_tambah'] = show_my_modal('modals/modal_tambah_kategori', 'tambah-kategori', $this->data);
		
		$this->template->views('config/v_config', $this->data);
    }
    
	public function tambah_kategori(){
        $this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');

		$data = $this->input->post();
		
		if ($this->form_validation->run()) {
			$result = $this->M_kategori->insert_data('kategori', $data);
			
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
			$out['ada_error'] = show_err_msg(form_error('kategori'));
		}
			
		echo json_encode($out);
	}
	
	public function update() {
		$id = trim($_POST['id']);
        
        $this->data['title'] = "Kategori";
        $this->data['dataConfig'] = $this->M_kategori->get_data_by_id('kategori', $id);

		echo show_my_modal('modals/modal_update_kategori', 'edit-kategori', $this->data);
	}

	public function prosesUpdate(){
		$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');

		$data = $this->input->post();

		if ($this->form_validation->run()) {

			$result = $this->M_kategori->update_data('kategori', $data);

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
			$out['ada_error'] = show_err_msg(form_error('kategori'));
		}
			
		echo json_encode($out);
	}

	public function hapus_kategori() {
		$id = trim($_POST['id']);
		
		$result = $this->M_kategori->hapus_data('kategori', $id);
		
		if ($result > 0) {
			echo show_succ_msg('Bulan Berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Bulan Gagal dihapus', '20px');
		}
	}
}
?>