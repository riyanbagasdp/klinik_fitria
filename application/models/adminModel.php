<?php

class adminModel extends CI_Model {
	function __construct() {
		$this->load->database();
	}


	public function get_data() {
		$query = $this->db->query("SELECT * FROM users");
		return $query->result_array();
	}

	

	public function get_data_tindakan($keyword=null){
		$this->db->select('*');
		$this->db->from('tindakans');
		if(!empty($keyword)){
			$this->db->like('nama_pasien',$keyword);
		}
		return $this->db->get()->result_array();
	}

	public function get_data_rawat($keyword=null){
		$this->db->select('*');
		$this->db->from('rawats');
		if(!empty($keyword)){
			$this->db->like('nama_pasien',$keyword);
		}
		return $this->db->get()->result_array();
	}

	public function get_data_obat($keyword=null){
		$this->db->select('*');
		$this->db->from('obats');
		if(!empty($keyword)){
			$this->db->like('nama_pasien',$keyword);
		}
		return $this->db->get()->result_array();
	}

	function insert_rawat($a) {
        $data = [
			'id_rawat'=>$a ['id_rawat'],
			'tgl_rawat'=>$a ['tgl_rawat'],
			'total_tindakan'=>$a ['total_tindakan'],
			'total_obat'=>$a ['total_obat'],
			'total_harga'=>$a ['total_harga'],
			'uang_muka'=>$a ['uang_muka'],
			'kurang'=>$a ['kurang'],
			'id_pasien'=>$a ['id_pasien'],
		];
        return $this->db->insert('rawats', $data);
    }
	
}
