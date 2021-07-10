<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_auth');
	}
	
	public function index() {
		
		$session = $this->session->userdata('status');
		
        $data['title'] 		= "Login Admin";

		if ($session == '') {
			$this->load->view('dashboard/login', $data);
		} else {
			redirect('Dashboard');
		}
	}

	public function login() {
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);

			$data = $this->M_auth->login($username)->result();
			
			foreach($data as $dt)
			{	
				$user = $dt->username;
				$pass = $this->encryption->decrypt($dt->password);
			}

			if ($user == "") {
				$this->session->set_flashdata('error_msg', 'Username tidak terdaftar');
				redirect('Auth');
			} elseif($pass != $password) {
				$this->session->set_flashdata('error_msg', 'Password salah');
				redirect('Auth');
			} else {
				$session = [
					'userdata' => $data,
					'status' => "Logged in"
				];
				$this->session->set_userdata($session);
				redirect('Dashboard');
			}
		} else {
			$this->session->set_flashdata('error_msg', validation_errors());
			redirect('Auth');
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('Auth');
	}
}