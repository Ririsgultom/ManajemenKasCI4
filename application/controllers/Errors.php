<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends CI_Controller {
	
    public function index() {
    $data = array(
      'title' => "Error 404"
    );
    $this->load->view('dashboard/errors-404', $data);
  }
}

?>