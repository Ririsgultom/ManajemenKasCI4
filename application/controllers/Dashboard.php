<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends AUTH_Controller {
  public function index() {
		$this->data['title'] = "Dashboard";

		$this->data['total_masuk'] = $this->M_dashboard->total_('kas_masuk');
		$this->data['total_keluar'] = $this->M_dashboard->total_('kas_keluar');

		$data['total_masuk_bulan'] = $this->M_dashboard->total_bulanan_('kas_masuk');
		$data['total_keluar_bulan'] = $this->M_dashboard->total_bulanan_('kas_keluar');
    
    $arr1 = array();

    foreach($data['total_masuk_bulan'] as $tm){
      if(date('m', strtotime($tm['tanggal'])) == date('m')){
        array_push($arr1, $tm['jumlah']);
      } 
    }
    
    $arr2 = array();

    foreach($data['total_keluar_bulan'] as $tm){
      if(date('m', strtotime($tm['tanggal'])) == date('m')){
        array_push($arr2, $tm['jumlah']);
      } 
    }

    $this->data['pemasukan_bulan'] = array_sum($arr1);
    $this->data['pengeluaran_bulan'] = array_sum($arr2);

    $this->template->views('dashboard/dashboard', $this->data);
  }

  public function profile(){
	$this->data['title'] = "Profil";

    $this->template->views('dashboard/profile', $this->data);
  }

	public function gantiNama(){
		$this->form_validation->set_rules('masjid', 'Nama', 'trim|required');

		$data = $this->input->post();

		if ($this->form_validation->run()) {

			$result = $this->M_dashboard->ganti_nama($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Penjualan Berhasil ditambahkan', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Data Penjualan Gagal ditambahkan', '20px');
			}
			$this->updateProfil($data['id']);
		}
		else {
			$out['status'] = 'form';
			$out['masjid_error'] = show_err_msg(form_error('masjid'));
		}
			
		echo json_encode($out);
	}
}