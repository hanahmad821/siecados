<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BidangA_M extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	private $_table = "t_bidang_a";

	public $id_bidang_a = "id_bidang_a";
	public $id_aktifitas = "id_aktifitas";
	public $kode_matkul = "kode_matkul";
	public $kelas = "kelas";
	public $sks = "sks";
	public $kode_dosen_1 = "kode_dosen_1";
	public $kode_dosen_2 = "kode_dosen_2";

	public function rules()
	{
		return [
			[
				'field' => 'kode_matkul',
				'label' => 'Kode Matkul',
				'rules' => 'required'
			],
			[
				'field' => 'kelas',
				'label' => 'Kelas',
				'rules' => 'required'
			],
			[
				'field' => 'sks',
				'label' => 'SKS',
				'rules' => 'numeric'
			],
			[
				'field' => 'kode_dosen1',
				'label' => 'Kode Dosen 1',
				'rules' => 'required'
			],
			[
				'field' => 'nama_dosen1',
				'label' => 'Nama Dosen 1',
				'rules' => 'required'
			],
			[
				'field' => 'select_dosen',
				'label' => 'select dosen',
				'rules' => 'required'
			],
			[
				'field' => 'kode_dosen2',
				'label' => 'Kode Dosen 2'
			],
		];
	}
	public function getMatkul()
	{

		return $this->db->get("p_matkul")->result();
	}

	public function getDosen1()
	{
		return $this->db->get_where("p_dosen", ["id_dosen" => 60])->row();
	}

	public function getDosen2()
	{

		return $this->db->get("p_dosen")->result();
	}

	public function getAllBidangA()
	{

		return $this->db->get($this->_table)->result();
	}

	public function getById($id_bidang_a)
	{
		return $this->db->get_where($this->_table, ["id_bidang_a" => $id_bidang_a])->row();
	}

	public function getMaxAktifitas()
	{
		$this->db->select_max('id_aktifitas', 'id_aktifitas');
		$query = $this->db->get("t_aktifitas");
		if ($query->num_rows() > 0) {
			return $query->row('id_aktifitas');
		} else {
			return 1;
		}
	}
	public function getMaxIdBidang()
	{
		$this->db->select_max('id_bidang_a', 'id_bidang_a');
		$query = $this->db->get("t_bidang_a");
		if ($query->num_rows() > 0) {
			return $query->row('id_bidang_a');
		} else {
			return 1;
		}
	}
	public function save()
	{
		$last_id = $this->BidangA_M->getMaxAktifitas();
		$max_id = $last_id + 1;

		$post = $this->input->post();
		$this->id_bidang_a = '';
		$this->id_aktifitas = $max_id;
		$this->kode_matkul = $post["kode_matkul"];
		$this->kelas = $post["kelas"];
		$this->sks = $post["sks"];
		$this->kode_dosen_1 = $post["kode_dosen1"];
		$this->kode_dosen_2 = $post["kode_dosen2"];

		$sql = "INSERT INTO t_aktifitas values ('$max_id','1','3','$post[kode_dosen1]',NOW(),'insert')";
		$this->db->query($sql);
		return $this->db->insert($this->_table, $this);
	}
	public function update()
	{
		$last_id = $this->BidangA_M->getMaxAktifitas();
		$max_id = $last_id + 1;

		$last_id_bidang = $this->BidangA_M->getMaxIdBidang();
		$max_id_bidang = $last_id_bidang + 1;

		$post = $this->input->post();
		$this->id_bidang_a = $post['id_bidangA'];
		$this->id_aktifitas = $max_id;
		$this->kode_matkul = $post["kode_matkul"];
		$this->kelas = $post["kelas"];
		$this->sks = $post["sks"];
		$this->kode_dosen_1 = $post["kode_dosen1"];
		if ($post["select_dosen"] == "yes") {
			$this->kode_dosen_2 = NULL;
		} else {
			$this->kode_dosen_2 = $post["kode_dosen2"];
		}

		$sql = "INSERT INTO t_aktifitas values ('$max_id','1','$max_id_bidang','3','$post[kode_dosen1]',NOW(),'update')";
		$this->db->query($sql);
		return $this->db->update($this->_table, $this, array('id_bidang_a' => $post['id_bidangA']));
	}
	public function delete($id_bidangA)
	{
		return $this->db->delete($this->_table, array("id_bidang_a" => $id_bidangA));
	}
}
