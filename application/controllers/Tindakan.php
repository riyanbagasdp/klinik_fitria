<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tindakan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation','email', 'session'));
        $this->load->helper(array('text', 'url', 'cookie', 'string'));
        $this->load->model('tindakanmodel');
    }

    function index() {
        $keyword = $this->input->post('keyword');
        $data = $this->tindakanmodel->get_keyword($keyword);
        $data = array(
            'keyword' => $keyword,
            'data' => $data
        );
        $this->load->view('tindakan/tindakan', $data);
	}

    public function insert() {
        $id = $this->input->post('id');
        $id_tindakan = "T00";
		$nama_tindakan = $this->input->post('nama_tindakan');
		$biaya = $this->input->post('biaya');
		$data = array(
            'id' => $id,
            'id_tindakan' => $id_tindakan,
			'nama_tindakan' => $nama_tindakan,
			'biaya' => $biaya,
		);
		if($this->tindakanmodel->insert($data, 'tindakans')) {
			$this->session->set_flashdata('pesan', 'Data berhasil di tambahakan');
			redirect(base_url('tindakan'));
		}
    }

    public function edit($a) {
        $data['detail'] = $this->tindakanmodel->get_detail($a);
        $this->load->view('tindakan/edit', $data);
    }

    public function update($id) {
        $this->load->library('upload');
        if ($this->tindakanmodel->update($this->input->post(), $id)) {
            $this->session->set_flashdata('pesan', 'Data berhasil diubah');
            redirect(base_url('tindakan'));
        }
    }

    public function delete($id_tindakan) {
        if ($this->tindakanmodel->delete($id_tindakan)) {
            $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
            redirect(base_url('tindakan'));
        }
    }
}
