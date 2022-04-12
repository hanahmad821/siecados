<?php 
class M_tmatkul extends CI_Model{
	public function __construct()
	{
    	parent::__construct();
	}

	function get_matkul()
	{

        $query = $this->db->query('SELECT kode_matkul,nama_matkul,sks,aktif FROM p_matkul');

        return $query->result();
	}
	function get_dosen2()
	{

        $query = $this->db->query('SELECT kode_dosen,nama_dosen FROM p_dosen');

        return $query->result();
	}
}
?> 