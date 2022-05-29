<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BidangB_M extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	private $_table = "t_bidang_b";

	public $id_bidang_b = "id_bidang_b";
	public $id_publikasi = "id_publikasi";
	public $judul_paper = "judul_paper";
	public $author1 = "author1";
	public $author2 = "author2";
	public $author3 = "author3";
	public $nama_jurnal = "nama_jurnal";
	public $publisher = "publisher";
	public $link_jurnal = "link_jurnal";
	public $isbn_isssn = "isbn_isssn";
	public $volume_no = "volume_no";
	public $tahun = "tahun";
	public $loa = "loa";
	public $final_paper = "final_paper";
	public $link_publikasi = "link_publikasi";
	public $indeks = "indeks";
	public $link_indeks = "link_indeks";
	public $nama_conference = "nama_conference";
	public $start_date = "start_date";
	public $end_date = "end_date";
	public $penyelenggara = "penyelenggara";
	public $link_conference = "link_conference";
	public $inserted_at = "inserted_at";

	public function rules()
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
			[
				'field' => 'loa',
				'label' => 'loa',
				'rules' => 'callback_file_check_loa'
			],
			[
				'field' => 'final_paper',
				'label' => 'Final Paper',
				'rules' => 'callback_file_check_final_paper'
			],
		];
	}

	public function getDosen1()
	{
		return $this->db->get_where("p_dosen", ["id_dosen" => 60])->row();
	}

	public function getAllBidangB()
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
		$add = $post['repeater-list'];
		foreach($add as $key => $subValue){
			$kode_dosen2 = $subValue['kode_dosen2'];
		}
		$this->id_bidang_b = '';
		$this->id_publikasi = $post["id_publikasi"];
		$this->judul_paper = $post["judul_paper"];
		$this->author1 = "$post[kode_dosen]^$post[nama_dosen]^$post[afiliasi]";
		$this->author2 = $post["author2"];
		$this->author3 = $post["author3"];
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
