<?php 
class M_bidangA extends CI_Model{
	public function __construct()
	{
    	parent::__construct();
	}

	function get_matkul()
	{
    	$query = $this->db->query('SELECT * FROM layanan');
    	return $this->db->query($query)->result();
	}
}
?> 