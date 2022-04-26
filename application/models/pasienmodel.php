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
		$this->db->where('id_pasien', 'PN00');
		$this->db->set('id_pasien', 'CONCAT(id_pasien, id)', FALSE);
		return $this->db->update('pasiens'); // gives UPDATE mytable SET field = field+1 WHERE id = 2
		// $this->db->set('id_pasien', 'CONCAT(id_pasien, id)', FALSE);
		// return $this->db->insert('pasiens', $da); // gives UPDATE mytable SET field = field+1 WHERE id = 2
		// $sql = "UPDATE pasiens SET id_pasien = CONCAT(id_pasien, id)";
		// return $this->db->update('pasiens', $id_pasien);
		// $query = $this->db->query($sql);
		// return $query->result_array();
		// $this->db->where('id_pasien',$data);
		// $this->db->set('id_pasien', 'CONCAT(id_pasien,id)');
		// return $this->db->update('pasiens');
		// return $this->db->set('id_pasien', 'CONCAT(id_pasien, id)', FALSE);
		// return $this->db->update('pasiens'); // gives UPDATE mytable SET field = field+1 WHERE id = 2
	}

	public function insert_new_data($a) {
		$newData = [
			'id_pasien' => $a['id_pasien'],
		];
        return $this->db->insert('pasiens', $newData);
	}

	public function edit_data($a) {
		$query = $this->db->query("SELECT * FROM pasiens");
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