<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

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
		$data['data_user'] = $this->adminModel->get_data();
		$this->load->view('beranda', $data);
	}
}
