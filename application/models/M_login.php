<?php
class M_login extends CI_Model{

	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}

	function get_data_dosen($where){

		$query = $this->db->query("SELECT * from p_dosen where kode_dosen = '".$where."' LIMIT 1");
		return $query->row();
		// return $query->result();
		}

}

?>
