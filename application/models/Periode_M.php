<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Periode_M extends CI_Model{
	public function __construct()
	{
    	parent::__construct();
	}
	private $_table = "p_periode";

	public $id_periode = "id_periode";
	public $year = "year";
	public $semester = "semester";
	public $periode = "periode";
	public $aktif = "aktif";

	public function rules(){
		return[
			[
				'field' => 'year',
				'label' => 'Tahun',
				'rules' => 'required'
			],
			[
				'field' => 'semester',
				'label' => 'Semester',
				'rules' => 'required'
			],
			[
				'field' => 'periode',
				'label' => 'Peridoe',
				'rules' => 'numeric'
			],
			[
				'field' => 'status_periode',
				'label' => 'Status periode',
				'rules' => 'required'
			],
		];
	}

	public function getAllperiode()
	{

		return $this->db->get($this->_table)->result();

	}

	public function getById($id_periode)
    {
        return $this->db->get_where($this->_table, ["id_periode" => $id_periode])->row();
    }

	public function save()
    {
        $post = $this->input->post();
        $this->id_periode = '';
        $this->year = $post["year"];
        $this->semester = $post["semester"];
        $this->periode = $post["periode"];
        $this->aktif = $post["status_periode"];
        return $this->db->insert($this->_table, $this);
    }
	public function update()
    {
        $post = $this->input->post();
        $this->id_periode = $post["id_periode"];
        $this->year = $post["year"];
        $this->semester = $post["semester"];
        $this->periode = $post["periode"];
        $this->aktif = $post["status_periode"];
        return $this->db->update($this->_table, $this, array('id_periode' => $post['id_periode']));
    }
	public function delete($id_periode)
    {
        return $this->db->delete($this->_table, array("id_periode" => $id_periode));
    }
	
}
