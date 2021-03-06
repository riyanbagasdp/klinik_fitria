<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library(array('form_validation', 'session'));
		$this->load->helper(array('text', 'url', 'cookie', 'string'));
		$this->load->model('usermodel');
	}
	
	public function index() {
		$cookie = ('tigaserangkai');
		if($this->session->userdata('nama') != '') {
			redirect(base_url('beranda'));
		} 
		// else if($cookie != '') {
		// 	$sesi = $this->usermodel->get_detail_by_cookie($cookie);
		// 	$this->session->set_userdata($sesi);
		// 	redirect(base_url('dashboard'));
		// }
		$this->load->view('login/login');
	}

	public function auth() {
		$email = $this->input->post('email');
		$pwd = md5($this->input->post('password'));
		$auth = $this->usermodel->auth($email,$pwd);
		if ($auth == TRUE) {
			if($this->input->post('remember') != '') {
				$key = random_string('alnum', 64);
				set_cookie('tigaserangkai', $key, 3600*24*30);
				$this->usermodel->update_cookie($key, $email);
			}
			$sesi = $this->usermodel->get_detaill($email);
			$this->session->set_userdata($sesi);
			redirect(base_url('beranda'));
		} else {
			// $this->session->set_flashdata('pesan', 'Username atau Password salah');
			// $sesi=array('flag' => '1');
			// $this->session->set_userdata($sesi);
			redirect(base_url('login'));
		}
	}
	public function register(){
		$this->load->view('login/register');
	}
	public function insert(){
		// $id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$alamat = $this->input->post('alamat');
		$telepon = $this->input->post('telepon');

		$data = array(
			// 'id' => $id,
			'nama' => $nama,
			'email' => $email,
			'password' => $password,
			'alamat' => $alamat,
			'telepon' => $telepon,
		);
		$this->usermodel->insert_data($data, 'users');
		// $this->set($data);
		redirect(base_url('login'));
	}
	public function update($id) {
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$alamat = $this->input->post('alamat');
		$telepon = $this->input->post('telepon');

		$data = array(
			'nama' => $nama,
			'email' => $email,
			'password' => $password,
			'alamat' => $alamat,
			'telepon' => $telepon,
		);		
		$this->usermodel->update_data($data, $id);
		redirect(base_url('login'));
	}


	public function logout() {
		delete_cookie('tigaserangkai');
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

	public function password() {
		$this->load->view('login/password');
		$email = $this->input->post('email');

	}

	public function newpassword() {
		$data['users'] = $this->Usermodel->get_detail($a);
		$this->load->view('login/newpassword', $data);

	}

}
