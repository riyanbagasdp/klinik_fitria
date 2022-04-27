<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RawatTindakan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('tindakanmodel');
		$this->load->model('rawatTindakanModel');
		$this->load->model('rawatModel');
        $this->load->library(array('form_validation','email', 'session'));
        $this->load->helper(array('text', 'url', 'cookie', 'string'));
    }

	// Function untuk menampilkan halaman pertama di pasien
	public function index() {
		$data['data_rawat_tindakan'] = $this->rawatTindakanModel->get_data();
		$data['id_rawat'] = $this->rawatModel->get_data();
		$data['tindakan'] = $this->tindakanmodel->get_tindakan();
		$this->load->view('rawat_tindakan/rawatTindakan.php', $data);
	}

	// Function untuk menambah data pasien
	public function insert() {
		$id = $this->input->post('id');
		$id_rawat_tindakan = "RT00";
		$id_rawat = $this->input->post('id_rawat');
		$dokter = $this->input->post('dokter');
		$harga = $this->input->post('harga');  

		$data = array(
			'id' => $id,
			'id_rawat_tindakan' => $id_rawat_tindakan,
			'id_rawat' => $id_rawat,
			'dokter' => $dokter,
			'harga' => $harga,
		);

		$this->rawatTindakanModel->insert_data($data, 'rawat_tindakan');
		redirect(base_url('RawatTindakan'));
	}
	// Function untuk mengarahkan ke tampilan edit
	public function edit($a) {
		$data['data_rawat_tindakan'] = $this->rawatTindakanModel->edit_data($a);
		$this->load->view('rawat_tindakan/edit', $data);
	}

	// Function untuk mengupdate data hasil dari tampilan edit
	public function update($id_rawat_tindakan) {
		$id_rawat = $this->input->post('nama_obat');
		$id_tindakan = $this->input->post('harga');
		$nama_dokter = $this->input->post('harga');
		$harga = $this->input->post('harga');

		$data = array(
			'id_rawat ' => $id_rawat ,
			'id_tindakan ' => $id_tindakan ,
			'nama_dokter ' => $nama_dokter ,
			'harga ' => $harga ,
			
		);		
		// $nama_obat = $this->input->post('nama_obat');
		// $harga = $this->input->post('harga'); 

		// $data = array(
		// 	'nama_obat' => $nama_obat,
		// 	'harga' => $harga,
		// );

		$this->rawatTindakanModel->update_data($data, $id_rawat_tindakan);
		redirect(base_url('rawatTindakan'));
	}
	public function delete($id_rawat_tindakan) {
		$this->rawatTindakanModel->delete_data($id_rawat_tindakan);
		redirect(base_url('rawatTindakan'));
	}
	// // Function untuk mengarahkan ke tampilan edit
	// public function edit($a) {
    //     $data['data_pasien'] = $this->pasienModel->edit_data($a);
    //     $this->load->view('pasien/edit', $data);
    // }

	// // Function untuk mengupdate data hasil dari tampilan edit
    // public function update($id_pasien) {
	// 	$nama_pasien = $this->input->post('nama_pasien');
	// 	$alamat = $this->input->post('alamat');
	// 	$tgl_lahir = $this->input->post('tgl_lahir');  
	// 	$no_telp = $this->input->post('no_telp');  

	// 	$data = array(
	// 		'nama_pasien' => $nama_pasien,
	// 		'alamat' => $alamat,
	// 		'tgl_lahir' => $tgl_lahir,
	// 		'no_telp' => $no_telp,
	// 	);		
	// 	$nama_pasien = $this->input->post('nama_pasien');
	// 	$alamat = $this->input->post('alamat');
	// 	$tgl_lahir = $this->input->post('tgl_lahir');  
	// 	$no_telp = $this->input->post('no_telp');  

	// 	$data = array(
	// 		'nama_pasien' => $nama_pasien,
	// 		'alamat' => $alamat,
	// 		'tgl_lahir' => $tgl_lahir,
	// 		'no_telp' => $no_telp,
	// 	);

	// 	$this->pasienModel->update_data($data, $id_pasien);
	// 	redirect(base_url('pasien'));
    // }

	// public function delete($id_pasien) {
	// 	$this->pasienModel->delete_data($id_pasien);
	// 	redirect(base_url('pasien'));
	// }
}
