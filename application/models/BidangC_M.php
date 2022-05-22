<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BidangC_M extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	private $_table = "t_bidang_c";

	public $id_bidang_c = "id_bidang_c";
	public $kode_dosen = "kode_dosen";
	public $nama_kegiatan = "nama_kegiatan";
	public $tempat_pelaksanaan = "tempat_pelaksanaan";
	public $waktu_pelaksanaan = "waktu_pelaksanaan";
	public $nama_komunitas = "nama_komunitas";
	public $judul_materi = "judul_materi";
	public $jumlah_peserta = "jumlah_peserta";
	public $sertifikat_pembicara = "sertifikat_pembicara";
	public $dokumentasi = "dokumentasi";
	public $proposal = "proposal";
	public $laporan = "laporan";
	public $materi = "materi";

	public function rules()
	{
		return [
			[
				'field' => 'kegiatan',
				'label' => 'Nama Kegiatan',
				'rules' => 'required',
			],
			[
				'field' => 'tempat',
				'label' => 'Tempat Pelaksanaan',
				'rules' => 'required'
			],
			[
				'field' => 'tgl_pelaksanaan',
				'label' => 'Waktu Pelaksanaan',
				'rules' => 'required'
			],
			[
				'field' => 'komunitas',
				'label' => 'Nama Komunitas',
				'rules' => 'required'
			],
			[
				'field' => 'judul_materi',
				'label' => 'Judul Materi',
				'rules' => 'required'
			],
			[
				'field' => 'jml_peserta',
				'label' => 'Jumlah Peserta',
				'rules' => 'required|numeric'
			],
			[
				'field' => 'sertifikat',
				'label' => 'Sertifikat',
				'rules' => 'callback_file_check_sertifikat'
			],
			[
				'field' => 'dokumentasi',
				'label' => 'Dokumentasi',
				'rules' => 'callback_file_check_dokumentasi'
			],
			[
				'field' => 'proposal',
				'label' => 'Proposal',
				'rules' => 'callback_file_check_proposal'
			],
			[
				'field' => 'laporan',
				'label' => 'Laporan',
				'rules' => 'callback_file_check_laporan'
			],
			[
				'field' => 'materi',
				'label' => 'Materi',
				'rules' => 'callback_file_check_materi'
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

	public function getAllBidangC()
	{

		return $this->db->get($this->_table)->result();
	}

	public function getById($id_bidang_c)
	{
		return $this->db->get_where($this->_table, ["id_bidang_c" => $id_bidang_c])->row();
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
		$this->db->select_max('id_bidang_c', 'id_bidang_c');
		$query = $this->db->get("t_bidang_c");
		if ($query->num_rows() > 0) {
			return $query->row('id_bidang_c');
		} else {
			return 1;
		}
	}
	public function save($sertifikat,$dokumentasi,$proposal,$laporan,$materi)
	{
		$last_id = $this->BidangC_M->getMaxAktifitas();
		$max_id = $last_id + 1;
		$last_id_bidang = $this->BidangC_M->getMaxIdBidang();
		$max_id_bidang = $last_id_bidang + 1;

		$post = $this->input->post();
		$cls_date = new DateTime($post["tgl_pelaksanaan"]);
		$newDate = $cls_date->format('Y-m-d');

		// var_dump($_POST);
		// var_dump($_FILES);
		// die;
		$this->id_bidang_c = '';
		$this->kode_dosen = $post["kode_dosen"];
		$this->nama_kegiatan = $post["kegiatan"];
		$this->tempat_pelaksanaan = $post["tempat"];
		$this->waktu_pelaksanaan = $newDate;
		$this->nama_komunitas = $post["komunitas"];
		$this->judul_materi = $post["judul_materi"];
		$this->jumlah_peserta = $post["jml_peserta"];
		$this->sertifikat_pembicara = $sertifikat;
		$this->dokumentasi = $dokumentasi;
		$this->proposal = $proposal;
		$this->laporan = $laporan;
		$this->materi = $materi;
		$sql = "INSERT INTO t_aktifitas values ('$max_id','3','$max_id_bidang','3','$post[kode_dosen]',NOW(),'insert')";
		$this->db->query($sql);
		return $this->db->insert($this->_table, $this);
	}
	public function update($sertifikat,$dokumentasi,$proposal,$laporan,$materi)
	{
		$last_id = $this->BidangC_M->getMaxAktifitas();
		$max_id = $last_id + 1;
		
		$last_id_bidang = $this->BidangC_M->getMaxIdBidang();
		$max_id_bidang = $last_id_bidang + 1;
		
		$id_BidangC = $this->BidangC_M->getById();
		$post = $this->input->post();
		$cls_date = new DateTime($post["tgl_pelaksanaan"]);
		$newDate = $cls_date->format('Y-m-d');

		$this->kode_dosen = $post["kode_dosen"];
		$this->nama_kegiatan = $post["kegiatan"];
		$this->tempat_pelaksanaan = $post["tempat"];
		$this->waktu_pelaksanaan = $newDate;
		$this->nama_komunitas = $post["komunitas"];
		$this->judul_materi = $post["judul_materi"];
		$this->jumlah_peserta = $post["jml_peserta"];
		$this->sertifikat_pembicara = $sertifikat;
		$this->dokumentasi = $dokumentasi;
		$this->proposal = $proposal;
		$this->laporan = $laporan;
		$this->materi = $materi;
		$sql = "INSERT INTO t_aktifitas values ('$max_id','1','$id_BidangC','3','$post[kode_dosen]',NOW(),'update')";
		$this->db->query($sql);
		return $this->db->update($this->_table, $this, array('id_bidang_c' => $id_BidangC));
	}
	public function delete($id_bidangC)
	{
		return $this->db->delete($this->_table, array("id_bidang_c" => $id_bidangC));
	}
}
