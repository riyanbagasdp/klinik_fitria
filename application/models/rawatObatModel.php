<?php

class rawatObatModel extends CI_Model {

    function __construct() {
        $this->load->database();
    }

	public function get_data() {
		$query = $this->db->query("SELECT * FROM rawat_obat");
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
			'id_rawat_obat' => $a['id_rawat_obat'],
		];
        return $this->db->insert('rawat_obat', $newData);
	}

	public function edit_data($a) {
		$query = $this->db->query("SELECT * FROM rawat_obat");
		$this->db->where('id_rawat_obat', $a);
		return $this->db->get('rawat_obat')->row_array();
	}

	public function update_data($a, $id_rawat_obat) {
		$data = [
			'id_rawat_obat' => $a['id_rawat_obat'],
			'id_rawat' => $a['id_rawat'],
			'id_obat' => $a['id_obat'],
			'jumlah' => $a['jumlah'],
			'harga' => $a['harga'],

		];
		$this->db->where('id_rawat_obat', $id_rawat_obat);
        return $this->db->update('rawat_obat', $data);
	}

	public function delete_data($id_rawat_obat) {
		$this->db->where('id_rawat_obat', $id_rawat_obat);
		return $this->db->delete('rawat_obat');
	}		
}
