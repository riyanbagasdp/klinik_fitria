<?php

class obatmodel extends CI_Model {

    function __construct()
    {
        $this->load->database();
    } 

	public function get_data() {
		$query = $this->db->query("SELECT * FROM obats");
		return $query->result_array();
	}

	public function insert_data($a) {
		$data = [
			'id' => $a['id'],
			'id_obat' => $a['id_obat'],
			'nama_obat' => $a['nama_obat'],
			'harga' => $a['harga'],
		];
        $this->db->insert('obats', $data);
		$this->db->where('id_obat', 'OBT00');
		$this->db->set('id_obat', 'CONCAT(id_obat, id)', FALSE);
		return $this->db->update('obats');

	}
	
	public function edit_data($a) {
		// $query = $this->db->query("SELECT * FROM obats");
		$this->db->where('id_obat', $a);
		return $this->db->get('obats')->row_array();
	}

	public function update_data($a, $id_obat) {
		$data = [
			'nama_obat' => $a['nama_obat'],
			'harga' => $a['harga'],
		];
		$this->db->where('id_obat', $id_obat);
        return $this->db->update('obats', $data);
	}

	public function delete_data($id_obat) {
		$this->db->where('id_obat', $id_obat);
		return $this->db->delete('obats');
	}	
}
