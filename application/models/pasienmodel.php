<?php

class pasienModel extends CI_Model {

    function __construct() {
        $this->load->database();
    }

	public function get_data() {
		$query = $this->db->query("SELECT * FROM pasiens");
		return $query->result_array();
	}

	public function insert_data($a) {
		$data = [
			'id' => $a['id'],
			'id_pasien' => $a['id_pasien'],
			'nama_pasien' => $a['nama_pasien'],
			'alamat' => $a['alamat'],
			'tgl_lahir' => $a['tgl_lahir'],
			'no_telp' => $a['no_telp'],
		];
        $this->db->insert('pasiens', $data);
		$this->db->where('id_pasien', 'PSN00');
		$this->db->set('id_pasien', 'CONCAT(id_pasien, id)', FALSE);
		return $this->db->update('pasiens');
	}

	public function edit_data($a) {
		// $query = $this->db->query("SELECT * FROM pasiens");
		$this->db->where('id_pasien', $a);
		return $this->db->get('pasiens')->row_array();
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

	public function delete_data($id_pasien) {
		$this->db->where('id_pasien', $id_pasien);
		return $this->db->delete('pasiens');
	}	
}
