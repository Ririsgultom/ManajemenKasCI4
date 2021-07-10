<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {
	public function login($username){
		return $this->db->get_where('admin', array('username' => $username));
	}
}