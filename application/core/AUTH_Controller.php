<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AUTH_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');

		$this->load->model('M_admin');
		$this->load->model('M_dashboard');
		$this->load->model('M_kas');
		$this->load->model('M_kategori');

		$this->userdata = $this->session->userdata('userdata');
		
		$this->session->set_flashdata('segment', explode('/', $this->uri->uri_string()));

		if ($this->session->userdata('status') == '') {
			redirect('Auth');
		}
		
		foreach($this->userdata as $u){
			$id = $u->id;
			$user = $u->username;
			$masjid = $u->masjid;
		}

		$this->data['id'] = $id;
		$this->data['user'] = $user;
		$this->data['masjid'] = $masjid;
	}

	public function updateProfil($id) {
		if ($this->userdata != '') {
			$data = $this->M_admin->select($id)->result();

			$this->session->set_userdata('userdata', $data);
		}
	}
}