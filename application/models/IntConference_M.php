<?php
defined('BASEPATH') or exit('No direct script access allowed');

class IntConference_M extends CI_Model
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
	public $co_author = "co_author";
	public $nama_conference = "nama_conference";
	public $start_date = "start_date";
	public $end_date = "end_date";
	public $penyelenggara = "penyelenggara";
	public $link_conference = "link_conference";
	public $loa = "loa";
	public $final_paper = "final_paper";
	public $indeks = "indeks";
	public $link_indeks = "link_indeks";

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
				'field' => 'nama_conference',
				'label' => 'Nama Conferenece',
				'rules' => 'required'
			],
			[
				'field' => 'start_date',
				'label' => 'start date',
				'rules' => 'required'
			],
			[
				'field' => 'end_date',
				'label' => 'end date',
				'rules' => 'required'
			],
			[
				'field' => 'link_conference',
				'label' => 'Link Conference',
				'rules' => 'required'
			],
			[
				'field' => 'penyelenggara',
				'label' => 'Penyelenggara',
				'rules' => 'required'
			],
			[
				'field' => 'link_conference',
				'label' => 'Link Conference',
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
	public function getMaxIdBidang()
	{
		$this->db->select_max('id_bidang_b', 'id_bidang_b');
		$query = $this->db->get("t_bidang_b");
		if ($query->num_rows() > 0) {
			return $query->row('id_bidang_b');
		} else {
			return 1;
		}
	}
	public function save($loa, $final_paper)
	{
		$last_id = $this->IntConference_M->getMaxAktifitas();
		$max_id = $last_id + 1;
		$last_id_bidang = $this->IntConference_M->getMaxIdBidang();
		$max_id_bidang = $last_id_bidang + 1;

		$post = $this->input->post();

		$add = $post['repeater-list'];
		$count = count($add);
		$arr_imp = "";
		for ($i = 0; $i < $count; $i++) {
			$arr_imp .= implode(";", $add[$i]) . '|';
		}
        
		$str_date = new DateTime($post["start_date"]);
		$new_str_date = $str_date->format('Y-m-d');
		$end_date = new DateTime($post["end_date"]);
		$new_end_date = $end_date->format('Y-m-d');
		// foreach ($add as $key => $subValue) {
		// 	$kode_dosen_add = $subValue['kode_dosen_add'];
		// 	$nama_dosen_add = $subValue['nama_dosen_add'];
		// 	$afiliasi_add = $subValue['afiliasi_add'];
		// }
		// $co_author = implode(", ", $_POST["skill"]);

		$this->id_bidang_b = '';
		$this->id_publikasi = "3";
		$this->judul_paper = $post["judul_paper"];
		$this->author1 = "$post[kode_dosen];$post[nama_dosen];$post[afiliasi]";
		$this->co_author = "$arr_imp";
		$this->nama_conference = $post["nama_conference"];
		$this->start_date  = $new_str_date;
		$this->end_date = $new_end_date;
		$this->penyelenggara = $post["penyelenggara"];
		$this->link_conference = $post["link_conference"];
		$this->loa = $loa;
		$this->final_paper = $final_paper;
		$this->indeks = $post["indeks"];
		$this->link_indeks = $post["link_indeks"];
		$sql = "INSERT INTO t_aktifitas values ('$max_id','2','$max_id_bidang','3','$post[kode_dosen]',NOW(),'insert')";
		$this->db->query($sql);
		return $this->db->insert($this->_table, $this);
	}
	public function update()
	{
		$last_id = $this->IntConference_M->getMaxAktifitas();
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
