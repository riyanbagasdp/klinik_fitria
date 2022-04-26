<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rawat extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('rawatModel');
		$this->load->library(array('form_validation', 'session'));
		$this->load->helper(array('text', 'url', 'cookie', 'string'));
		if($this->session->userdata('nama') == '') {
			redirect(base_url('login'));
		}
	}

	// Function untuk menampilkan halaman pertama di pasien
	public function index() {
		$data['data_rawat'] = $this->rawatModel->get_data();
		$data['id_pasien'] = $this->rawatModel->get_id_pasien();
		$this->load->view('rawat/rawat', $data);
	}

	// Function untuk menambah data pasien
	public function insert() {
		$data['id_pasien'] = $this->rawatModel->get_id_pasien();
		$id = $this->input->post('id');
		$id_pasien = "PN00";
		$nama_pasien = $this->input->post('nama_pasien');
		$alamat = $this->input->post('alamat');
		$tgl_lahir = $this->input->post('tgl_lahir');  
		$no_telp = $this->input->post('no_telp');  

		$data = array(
			'id' => $id,
			'id_pasien' => $id_pasien,
			'nama_pasien' => $nama_pasien,
			'alamat' => $alamat,
			'tgl_lahir' => $tgl_lahir,
			'no_telp' => $no_telp,
		);

		$this->pasienModel->insert_data($data, 'pasiens');
		redirect(base_url('pasien'));
	}

	// Function untuk mengarahkan ke tampilan edit
	public function edit($a) {
        $data['data_pasien'] = $this->pasienModel->edit_data($a);
        $this->load->view('pasien/edit', $data);
    }

	// Function untuk mengupdate data hasil dari tampilan edit
    public function update($id_pasien) {
		$nama_pasien = $this->input->post('nama_pasien');
		$alamat = $this->input->post('alamat');
		$tgl_lahir = $this->input->post('tgl_lahir');  
		$no_telp = $this->input->post('no_telp');  

		$data = array(
			'nama_pasien' => $nama_pasien,
			'alamat' => $alamat,
			'tgl_lahir' => $tgl_lahir,
			'no_telp' => $no_telp,
		);		
		$nama_pasien = $this->input->post('nama_pasien');
		$alamat = $this->input->post('alamat');
		$tgl_lahir = $this->input->post('tgl_lahir');  
		$no_telp = $this->input->post('no_telp');  

		$data = array(
			'nama_pasien' => $nama_pasien,
			'alamat' => $alamat,
			'tgl_lahir' => $tgl_lahir,
			'no_telp' => $no_telp,
		);

		$this->pasienModel->update_data($data, $id_pasien);
		redirect(base_url('pasien'));
    }

	public function delete($id_pasien) {
		$this->pasienModel->delete_data($id_pasien);
		redirect(base_url('pasien'));
	}
}
