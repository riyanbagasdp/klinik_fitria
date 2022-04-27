<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rawat extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('rawatModel');
		$this->load->model('pasienModel');
		$this->load->library(array('form_validation', 'session'));
		$this->load->helper(array('text', 'url', 'cookie', 'string'));
		if($this->session->userdata('nama') == '') {
			redirect(base_url('login'));
		}
	}

	// Function untuk menampilkan halaman pertama di pasien
	public function index() {
		$data['data_rawat'] = $this->rawatModel->get_data();
		$data['data_pasien'] = $this->pasienModel->get_data();
		$this->load->view('rawat/rawat', $data);
	}

	// Function untuk menambah data pasien
	public function insert() {
		$id = $this->input->post('id');
		$id_rawat = "R00";
		$id_pasien = $this->input->post('id_pasien');
		$tgl_rawat = $this->input->post('tgl_rawat');
		$uang_muka = $this->input->post('uang_muka');  

		$data = array(
			'id' => $id,
			'id_rawat' => $id_rawat,
			'id_pasien' => $id_pasien,
			'tgl_rawat' => $tgl_rawat,
			'total_tindakan' => 0,
			'total_obat' => 0,
			'uang_muka' => $uang_muka,
			'kurang' => 0,
		);

		$this->rawatModel->insert_data($data, 'rawats');
		redirect(base_url('rawat'));
	}

	// Function untuk mengarahkan ke tampilan edit
	public function edit($a) {
		$data['data_pasien'] = $this->rawatModel->get_data();
        $data['data_rawat'] = $this->rawatModel->edit_data($a);
        $this->load->view('rawat/edit', $data);
    }

	// Function untuk mengupdate data hasil dari tampilan edit
    public function update($id_rawat) {
		$id = $this->input->post('id');
		$id_rawat = "R00";
		$id_pasien = $this->input->post('id_pasien');
		$tgl_rawat = $this->input->post('tgl_rawat');
		$total_tindakan = $this->input->post('total_tindakan');  
		$total_obat = $this->input->post('total_obat');  
		$total_harga = $this->input->post('total_harga');  
		$uang_muka = $this->input->post('uang_muka');  
		$kurang = $this->input->post('kurang');  

		$data = array(
			'id' => $id,
			'id_rawat' => $id_rawat,
			'id_pasien' => $id_pasien,
			'tgl_rawat' => $tgl_rawat,
			'total_tindakan' => $total_tindakan,
			'total_obat' => $total_obat,
			'total_harga' => $total_harga,
			'uang_muka' => $uang_muka,
			'kurang' => $kurang,
		);

		$this->rawatModel->update_data($data, $id_rawat);
		redirect(base_url('rawat'));
    }

	public function detail($id_pasien) {
		$data['data_rawat'] = $this->rawatModel->get_detail($id_pasien);
        $this->load->view('rawat/detail', $data);
	}

	public function delete($id_pasien) {
		$this->pasienModel->delete_data($id_pasien);
		redirect(base_url('pasien'));
	}
}
