<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation','email', 'session'));
        $this->load->helper(array('text', 'url', 'cookie', 'string'));
        $this->load->model('obatmodel');
    }

    function index() {
		$data['data_obat'] = $this->obatmodel->get_data();
		$this->load->view('obat/obat', $data);
    }

    public function add() {
        $this->load->view('obat/add');
    }

	public function insert() {
		$id = $this->input->post('id');
		$id_obat = "OT00";
		$nama_obat = $this->input->post('nama_obat');
		$harga = $this->input->post('harga');

		$data = array(
			'id' => $id,
			'id_obat' => $id_obat,
			'nama_obat' => $nama_obat,
			'harga' => $harga,
		);

		$this->obatmodel->insert_data($data, 'obats');
		redirect(base_url('obat'));
	}

	// Function untuk mengarahkan ke tampilan edit
	public function edit($a) {
        $data['data_obat'] = $this->obatmodel->edit_data($a);
        $this->load->view('obat/edit', $data);
    }

	// Function untuk mengupdate data hasil dari tampilan edit
    public function update($id_obat) {
		$nama_obat = $this->input->post('nama_obat');
		$harga = $this->input->post('harga');

		$data = array(
			'nama_obat' => $nama_obat,
			'harga' => $harga,
		);		
		$nama_obat = $this->input->post('nama_obat');
		$harga = $this->input->post('harga'); 

		$data = array(
			'nama_obat' => $nama_obat,
			'harga' => $harga,
		);

		$this->obatmodel->update_data($data, $id_obat);
		redirect(base_url('obat'));
    }

	public function delete($id_obat) {
		$this->obatmodel->delete_data($id_obat);
		redirect(base_url('obat'));
	}
}
