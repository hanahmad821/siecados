<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BidangB_M extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	private $_table = "t_bidang_a";

	public $id_bidang_b = "id_bidang_b";
	public $id_aktifitas = "id_aktifitas";
	public $kode_matkul = "kode_matkul";
	public $kelas = "kelas";
	public $sks = "sks";
	public $kode_dosen_1 = "kode_dosen_1";
	public $kode_dosen_2 = "kode_dosen_2";

	public function rules_journal()
	{
		return [
			[
				'field' => 'judul_paper',
				'label' => 'Judul Paper',
				'rules' => 'required'
			],
			[
				'field' => 'kode_dosen',
				'label' => 'Kode Dosen',
				'rules' => 'required'
			],
			[
				'field' => 'nama_dosen',
				'label' => 'Nama Dosen',
				'rules' => 'required'
			],
			[
				'field' => 'afiliasi',
				'label' => 'Afiliasi'
			],
			[
				'field' => 'kode_dosen2',
				'label' => 'Kode Dosen2',
				'rules' => 'required'
			],
			[
				'field' => 'nama_dosen2',
				'label' => 'Nama Dosen2',
				'rules' => 'required'
			],
			[
				'field' => 'afiliasi2',
				'label' => 'Afiliasi2'
			],
			[
				'field' => 'nama_jurnal',
				'label' => 'Nama Jurnal',
				'rules' => 'required'
			],
			[
				'field' => 'publisher',
				'label' => 'Publisher',
				'rules' => 'required'
			],
			[
				'field' => 'link_jurnal',
				'label' => 'Link Jurnal',
				'rules' => 'required'
			],
			[
				'field' => 'isbn_isssn',
				'label' => 'isbn_isssn',
				'rules' => 'required'
			],
			[
				'field' => 'volume_no',
				'label' => 'volume_no',
				'rules' => 'required'
			],
			[
				'field' => 'tahun',
				'label' => 'tahun',
				'rules' => 'required'
			],
			[
				'field' => 'indeks',
				'label' => 'indeks',
				'rules' => 'required'
			],
			[
				'field' => 'link_indeks',
				'label' => 'link_indeks',
				'rules' => 'required'
			],
		];
	}
	public function rules_conference()
	{
		return [
			[
				'field' => 'judul_paper',
				'label' => 'Judul Paper',
				'rules' => 'required'
			],
			[
				'field' => 'kode_dosen',
				'label' => 'Kode Dosen',
				'rules' => 'required'
			],
			[
				'field' => 'nama_dosen',
				'label' => 'Nama Dosen',
				'rules' => 'required'
			],
			[
				'field' => 'afiliasi',
				'label' => 'Afiliasi'
			],
			[
				'field' => 'kode_dosen2',
				'label' => 'Kode Dosen2',
				'rules' => 'required'
			],
			[
				'field' => 'nama_dosen2',
				'label' => 'Nama Dosen2',
				'rules' => 'required'
			],
			[
				'field' => 'afiliasi2',
				'label' => 'Afiliasi2'
			],
			[
				'field' => 'nama_conference',
				'label' => 'Nama Jurnal',
				'rules' => 'required'
			],
			[
				'field' => 'penyelenggara',
				'label' => 'penyelenggara',
				'rules' => 'required'
			],
			[
				'field' => 'link_conference',
				'label' => 'Link conference',
				'rules' => 'required'
			],
			[
				'field' => 'indeks',
				'label' => 'indeks',
				'rules' => 'required'
			],
			[
				'field' => 'link_indeks',
				'label' => 'link_indeks',
				'rules' => 'required'
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

	public function getById($id_bidang_b)
	{
		return $this->db->get_where($this->_table, ["id_bidang_b" => $id_bidang_b])->row();
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
	public function save_journal()
	{
		$last_id = $this->BidangB_M->getMaxAktifitas();
		$max_id = $last_id + 1;

		$post = $this->input->post();
		$this->id_bidang_b = '';
		$this->id_aktifitas = $max_id;
		$this->id_publikasi = $post["id_publikasi"];
		$this->judul_paper = $post["judul_paper"];
		$this->nama_jurnal = $post["nama_jurnal"];
		$this->publisher = $post["publisher"];
		$this->link_jurnal = $post["link_jurnal"];
		$this->isbn_isssn = $post["isbn_isssn"];
		$this->volume_no = $post["volume_no"];
		$this->tahun = $post["tahun"];
		$this->loa = $post["loa"];
		$this->final_paper = $post["final_paper"];
		$this->link_publikasi = $post["link_publikasi"];
		$this->indeks = $post["indeks"];
		$this->link_indeks = $post["link_indeks"];
		$sql = "INSERT INTO t_aktifitas values ('$max_id','1','3','$post[kode_dosen1]',NOW(),'insert')";
		$this->db->query($sql);
		return $this->db->insert($this->_table, $this);
	}
	public function update()
	{
		$last_id = $this->BidangB_M->getMaxAktifitas();
		$max_id = $last_id + 1;

		$post = $this->input->post();
		$this->id_bidang_b = $post['id_bidangA'];
		$this->id_aktifitas = $max_id;
		$this->kode_matkul = $post["kode_matkul"];
		$this->kelas = $post["kelas"];
		$this->sks = $post["sks"];
		$this->kode_dosen_1 = $post["kode_dosen1"];
		$this->kode_dosen_2 = $post["kode_dosen2"];
		$sql = "INSERT INTO t_aktifitas values ('$max_id','1','3','$post[kode_dosen1]',NOW(),'update')";
		$this->db->query($sql);
		return $this->db->update($this->_table, $this, array('id_bidang_b' => $post['id_bidangA']));
	}
	public function delete($id_bidangA)
	{
		return $this->db->delete($this->_table, array("id_bidang_b" => $id_bidangA));
	}
}
