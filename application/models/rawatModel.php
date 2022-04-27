<?php

class rawatModel extends CI_Model {

    function __construct() {
        $this->load->database();
    }

	public function get_data() {
		$query = $this->db->query("SELECT * FROM rawats");
		return $query->result_array();
	}

	public function insert_data($a) {

		$data = [
			'id' => $a['id'],
			'id_rawat' => $a['id_rawat'],
			'id_pasien' => $a['id_pasien'],
			'tgl_rawat' => $a['tgl_rawat'],
			'total_tindakan' => $a['total_tindakan'],
			'total_obat' => $a['total_obat'],
			'uang_muka' => $a['uang_muka'],
			'kurang' => $a['kurang'],
		];

        $this->db->insert('rawats', $data);
		$this->db->where('id_rawat', 'R00');
		$this->db->set('id_rawat', 'CONCAT(id_rawat, id)', FALSE);
		return $this->db->update('rawats');
	}


	public function edit_data($a) {
		$this->db->query("SELECT * FROM rawats");
		$this->db->where('id_rawat', $a);
		return $this->db->get('rawats')->row_array();
	}

	public function update_data($a, $id_pasien) {
		$data = [
			'nama_pasien' => $a['nama_pasien'],
			'alamat' => $a['alamat'],
			'tgl_lahir' => $a['tgl_lahir'],
			'no_telp' => $a['no_telp'],
		];
		$this->db->where('id_pasien', $id_pasien);
        return $this->db->update('pasiens', $data);
	}
	
	public function get_detail($id_pasien) {
		$this->db->query("SELECT * FROM rawats");
		$this->db->where('id_pasien', $id_pasien);
		return $this->db->get('rawats')->row_array();	
	}

	public function delete_data($id_pasien) {
		$this->db->where('id_pasien', $id_pasien);
		return $this->db->delete('pasiens');
	}	
}
