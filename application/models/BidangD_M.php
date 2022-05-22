<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BidangD_M extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	private $_table = "t_bidang_d";

	public $id_bidang_d = "id_bidang_d";
	public $kode_dosen = "kode_dosen";
	public $nama_kegiatan = "nama_kegiatan";
	public $tempat_pelaksanaan = "tempat_pelaksanaan";
	public $waktu_pelaksanaan = "waktu_pelaksanaan";
	public $penyelenggara = "penyelenggara";
	public $judul_materi = "judul_materi";
	public $sertifikat_peserta = "sertifikat_peserta";
	public $dokumentasi = "dokumentasi";

	public function rules()
	{
		return [
			[
				'field' => 'nama_kegiatan',
				'label' => 'Nama Kegiatan',
				'rules' => 'required'
			],
			[
				'field' => 'tempat_pelaksanaan',
				'label' => 'Tempat Pelaksanaan',
				'rules' => 'required'
			],
			[
				'field' => 'waktu_pelaksanaan',
				'label' => 'Waktu Pelaksanaan',
				'rules' => 'required'
			],
			[
				'field' => 'penyelenggara',
				'label' => 'Penyelenggara',
				'rules' => 'required'
			],
			[
				'field' => 'judul_materi',
				'label' => 'Judul Materi',
				'rules' => 'required'
			],
			[
				'field' => 'sertifikat',
				'label' => 'Sertifikat Peserta',
				'rules' => 'callback_file_check_sertifikat'

			],
			[
				'field' => 'dokumentasi',
				'label' => 'Dokumentasi',
				'rules' => 'callback_file_check_dokumentasi'

			],
		];
	}

	public function getDosen1()
	{
		return $this->db->get_where("p_dosen", ["id_dosen" => 60])->row();
	}

	public function getDosen2()
	{

		return $this->db->get("p_dosen")->result();
	}

	public function getAllBidangD()
	{

		return $this->db->get($this->_table)->result();
	}

	public function getById($id_bidang_d)
	{
		return $this->db->get_where($this->_table, ["id_bidang_d" => $id_bidang_d])->row();
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
		$this->db->select_max('id_bidang_d', 'id_bidang_d');
		$query = $this->db->get("t_bidang_d");
		if ($query->num_rows() > 0) {
			return $query->row('id_bidang_d');
		} else {
			return 1;
		}
	}

	public function save($sertifikat, $dokumentasi)
	{
		$last_id = $this->BidangD_M->getMaxAktifitas();
		$max_id = $last_id + 1;
		
		$last_id_bidang = $this->BidangD_M->getMaxIdBidang();
		$max_id_bidang = $last_id_bidang + 1;

		$post = $this->input->post();
		$cls_date = new DateTime($post["waktu_pelaksanaan"]);
		$newDate = $cls_date->format('Y-m-d');

		$this->kode_dosen = $post["kode_dosen"];
		$this->nama_kegiatan = $post["nama_kegiatan"];
		$this->tempat_pelaksanaan = $post["tempat_pelaksanaan"];
		$this->waktu_pelaksanaan = $newDate;
		$this->penyelenggara = $post["penyelenggara"];
		$this->judul_materi = $post["judul_materi"];
		$this->sertifikat_peserta = $sertifikat;
		$this->dokumentasi = $dokumentasi;
		$sql = "INSERT INTO t_aktifitas values ('$max_id','1','$max_id_bidang','3','$post[kode_dosen]',NOW(),'insert')";
		$this->db->query($sql);
		return $this->db->insert($this->_table, $this);
	}
	public function update($sertifikat, $dokumentasi)
	{
		$last_id = $this->BidangD_M->getMaxAktifitas();
		$max_id = $last_id + 1;
		
		$last_id_bidang = $this->BidangD_M->getMaxIdBidang();
		$max_id_bidang = $last_id_bidang + 1;

		$id_BidangD = $this->BidangD_M->getById();
		$post = $this->input->post();
		$cls_date = new DateTime($post["waktu_pelaksanaan"]);
		$newDate = $cls_date->format('Y-m-d');

		$post = $this->input->post();
		$this->id_bidang_d = '';
		$this->id_aktifitas = $max_id;
		$this->kode_dosen = $post["kode_dosen"];
		$this->nama_kegiatan = $post["nama_kegiatan"];
		$this->tempat_pelaksanaan = $post["tempat_pelaksanaan"];
		$this->waktu_pelaksanaan = $newDate;
		$this->sertifikat = $sertifikat;
		$this->dokumentasi = $dokumentasi;
		$sql = "INSERT INTO t_aktifitas values ('$max_id','1','$id_BidangD','3','$post[kode_dosen1]',NOW(),'update')";
		$this->db->query($sql);
		return $this->db->update($this->_table, $this, array('id_bidang_d' => $id_BidangD));
	}
	public function delete($id_BidangD)
	{
		return $this->db->delete($this->_table, array("id_bidang_d" => $id_BidangD));
	}
}
