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
			'nama_dokter' => $a['nama_dokter'],
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
		$query = $this->db->query("SELECT * FROM rawat_tindakan");
		$this->db->where('id_rawat_tindakan', $a);
		return $this->db->get('rawat_tindakan')->row_array();
	}

	public function update_data($a, $id_rawat_tindakan) {
		$data = [
			// 'id_rawat ' => $a['id_rawat'] ,
			// 'id_tindakan ' => $a['id_tindakan'] ,
			'nama_dokter ' => $a['nama_dokter'] ,
			'harga ' => $a['harga'] ,
		];
		$this->db->where('id_rawat_tindakan', $id_rawat_tindakan);
        return $this->db->update('rawat_tindakan', $data);
	}

	public function delete_data($id_rawat_tindakan) {
		$this->db->where('id_rawat_tindakan', $id_rawat_tindakan);
		return $this->db->delete('rawat_tindakan');
	}	
}
