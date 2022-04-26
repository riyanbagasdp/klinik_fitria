<?php

class rawatTindakanModel extends CI_Model {

    function __construct() {
        $this->load->database();
    }

	public function get_data() {
		$query = $this->db->query("SELECT * FROM rawat_tindakan");
		return $query->result_array();
	}

	public function insert_data($a) {
		$data = [
			'id' => $a['id'],
			'id_rawat_tindakan' => $a['id_rawat_tindakan'],
			'id_rawat' => $a['id_rawat'],
			'dokter' => $a['dokter'],
			'harga' => $a['harga'],
		];
        $this->db->insert('rawat_tindakan', $data);
		$this->db->where('id_rawat_tindakan', 'RT00');
		$this->db->set('id_rawat_tindakan', 'CONCAT(id_rawat_tindakan, id)', FALSE);
		return $this->db->update('rawat_tindakan'); // gives UPDATE mytable SET field = field+1 WHERE id = 2
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
