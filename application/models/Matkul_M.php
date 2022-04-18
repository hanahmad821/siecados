<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Matkul_M extends CI_Model{
	public function __construct()
	{
    	parent::__construct();
	}
	private $_table = "p_matkul_testing";

	public $id_matkul = "id_matkul";
	public $kode_matkul = "kode_matkul";
	public $nama_matkul = "nama_matkul";
	public $sks = "sks";
	public $aktif = "aktif";

	public function rules(){
		return[
			[
				'field' => 'kode_matkul',
				'label' => 'Kode Matkul',
				'rules' => 'required'
			],
			[
				'field' => 'nama_matkul',
				'label' => 'Nama Matkul',
				'rules' => 'required'
			],
			[
				'field' => 'sks',
				'label' => 'SKS',
				'rules' => 'numeric'
			],
			[
				'field' => 'status_matkul',
				'label' => 'Status Matkul',
				'rules' => 'required'
			],
		];
	}

	public function getAllMatkul()
	{

		return $this->db->get($this->_table)->result();

	}

	public function getById($id_matkul)
    {
        return $this->db->get_where($this->_table, ["id_matkul" => $id_matkul])->row();
    }

	public function save()
    {
        $post = $this->input->post();
        $this->id_matkul = '';
        $this->kode_matkul = $post["kode_matkul"];
        $this->nama_matkul = $post["nama_matkul"];
        $this->sks = $post["sks"];
        $this->aktif = $post["status_matkul"];
        return $this->db->insert($this->_table, $this);
    }
	public function update()
    {
        $post = $this->input->post();
        $this->id_matkul = $post["id_matkul"];
        $this->kode_matkul = $post["kode_matkul"];
        $this->nama_matkul = $post["nama_matkul"];
        $this->sks = $post["sks"];
        $this->aktif = $post["status_matkul"];
        return $this->db->update($this->_table, $this, array('id_matkul' => $post['id_matkul']));
    }
	public function delete($id_matkul)
    {
        return $this->db->delete($this->_table, array("id_matkul" => $id_matkul));
    }
	
}
