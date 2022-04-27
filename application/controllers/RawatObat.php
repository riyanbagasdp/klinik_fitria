<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RawatObat extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('rawatObatModel');
		$this->load->model('rawatModel');
		$this->load->model('obatmodel');
        $this->load->library(array('form_validation','email', 'session'));
        $this->load->helper(array('text', 'url', 'cookie', 'string'));
    }

	// Function untuk menampilkan halaman pertama di rawat obat
	public function index() {
		$data['data_rawat_obat'] = $this->rawatObatModel->get_data();
		$data['data_rawat'] = $this->rawatModel->get_data();
		$data['data_obat'] = $this->obatmodel->get_data();
		$this->load->view('rawat_obat/rawatObat.php', $data);
	}
	public function delete($id_rawat_obat) {
		$this->rawatobatModel->delete_data($id_rawat_obat);
		redirect(base_url('rawatobat'));
	}
	// Function untuk menambah data pasien
	// public function insert() {
	// 	$id = $this->input->post('id');
	// 	$id_pasien = "PN00";
	// 	$nama_pasien = $this->input->post('nama_pasien');
	// 	$alamat = $this->input->post('alamat');
	// 	$tgl_lahir = $this->input->post('tgl_lahir');  
	// 	$no_telp = $this->input->post('no_telp');  

	// 	$data = array(
	// 		'id' => $id,
	// 		'id_pasien' => $id_pasien,
	// 		'nama_pasien' => $nama_pasien,
	// 		'alamat' => $alamat,
	// 		'tgl_lahir' => $tgl_lahir,
	// 		'no_telp' => $no_telp,
	// 	);

	// 	$this->pasienModel->insert_data($data, 'pasiens');
	// 	redirect(base_url('pasien'));
	// }

	// // Function untuk mengarahkan ke tampilan edit
	public function edit($a) {
        $data['rawat_obat'] = $this->rawatObatModel->edit_data($a);
        $this->load->view('rawat_obat/edit', $data);
    }

	// // Function untuk mengupdate data hasil dari tampilan edit
    public function update($id_pasien) {
		$id_rawat_obat = $this->input->post('id_rawat_obat');
		$id_rawat = $this->input->post('id_rawat');
		$id_obat = $this->input->post('id_obat');  
		$jumlah = $this->input->post('jumlah');  
		$harga = $this->input->post('harga');  


		$data = array(
			'id_rawat_obat' => $id_rawat_obat,
			'id_rawat' => $id_rawat,
			'id_obat' => $id_obat,
			'jumlah' => $jumlah,
			'harga' => $harga,

		);		

		$this->rawatObatModel->update_data($data, $id_rawat_obat);
		redirect(base_url('RawatObat'));
    }

	public function delete($id_rawat_obat) {
		$this->rawatObatModel->delete_data($id_rawat_obat);
		redirect(base_url('RawatObat'));
	}
}
