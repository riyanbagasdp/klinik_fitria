<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('adminModel');
		$this->load->library(array('form_validation', 'session'));
		$this->load->helper(array('text', 'url', 'cookie', 'string'));
		if($this->session->userdata('nama') == '') {
			redirect(base_url('login'));
		}
	}

	public function index() {
		$this->load->view('dokter/dokter');
	}
}
