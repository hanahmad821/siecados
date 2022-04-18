<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_M extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	private $_table = "p_dosen";

	public $id_dosen = "id_dosen";
	public $kode_dosen = "kode_dosen";
	public $nama_dosen = "nama_dosen";
	public $profil = "profil";
	public $aktif = "aktif";
	public $jenis_kelamin = "jenis_kelamin";
	public $jurusan = "jurusan";
	public $no_hp = "no_hp";
	public $email = "email";
	public $kode_kelompok_rumpun_ilmu = "kode_kelompok_rumpun_ilmu";
	public $kode_rumpun_ilmu = "kode_rumpun_ilmu";
	public $tipe_dosen = "tipe_dosen";
	public $rentang_fm = "rentang_fm";
	public $jja = "jja";
	public $password = "password";

	public function rules()
	{
		return [
			[
				'field' => 'kode_dosen',
				'label' => 'Kode user',
				'rules' => 'required'
			],
			[
				'field' => 'nama_dosen',
				'label' => 'Nama user',
				'rules' => 'required'
			],
			[
				'field' => 'profil',
				'label' => 'Profil',
				'rules' => 'numeric'
			],
			[
				'field' => 'status_dosen',
				'label' => 'Status user',
				'rules' => 'required'
			],
			[
				'field' => 'jenis_kelamin',
				'label' => 'Jenis Kelamin',
				'rules' => 'required'
			],
			[
				'field' => 'jurusan',
				'label' => 'Jurusan',
				'rules' => 'required'
			],
			[
				'field' => 'no_hp',
				'label' => 'No HP',
				'rules' => 'required'
			],
			[
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required'
			],
			[
				'field' => 'kode_kelompok_rumpun_ilmu',
				'label' => 'Kode Kelompok Rumpun Ilmu',
				'rules' => 'required'
			],
			[
				'field' => 'kode_rumpun_ilmu',
				'label' => 'Kode Rumpun Ilmu',
				'rules' => 'required'
			],
			[
				'field' => 'tipe_dosen',
				'label' => 'Tipe Dosen',
				'rules' => 'required'
			],
			[
				'field' => 'rentang_fm',
				'label' => 'Rentang FM',
				'rules' => 'required'
			],
			[
				'field' => 'jja',
				'label' => 'JJA',
				'rules' => 'required'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required'
			],
		];
	}
	public function rulesInput()
	{
		return [
			[
				'field' => 'kode_dosen',
				'label' => 'Kode user',
				'rules' => 'required|is_unique[p_dosen.kode_dosen]'
			],
			[
				'field' => 'nama_dosen',
				'label' => 'Nama user',
				'rules' => 'required'
			],
			[
				'field' => 'profil',
				'label' => 'Profil',
				'rules' => 'numeric'
			],
			[
				'field' => 'status_dosen',
				'label' => 'Status user',
				'rules' => 'required'
			],
			[
				'field' => 'jenis_kelamin',
				'label' => 'Jenis Kelamin',
				'rules' => 'required'
			],
			[
				'field' => 'jurusan',
				'label' => 'Jurusan',
				'rules' => 'required'
			],
			[
				'field' => 'no_hp',
				'label' => 'No HP',
				'rules' => 'required'
			],
			[
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|is_unique[p_dosen.email]'
			],
			[
				'field' => 'kode_kelompok_rumpun_ilmu',
				'label' => 'Kode Kelompok Rumpun Ilmu',
				'rules' => 'required'
			],
			[
				'field' => 'kode_rumpun_ilmu',
				'label' => 'Kode Rumpun Ilmu',
				'rules' => 'required'
			],
			[
				'field' => 'tipe_dosen',
				'label' => 'Tipe Dosen',
				'rules' => 'required'
			],
			[
				'field' => 'rentang_fm',
				'label' => 'Rentang FM',
				'rules' => 'required'
			],
			[
				'field' => 'jja',
				'label' => 'JJA'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required'
			],
		];
	}

	public function getProfil()
	{

		return $this->db->get("p_profil")->result();
	}
	public function getAllUser()
	{

		return $this->db->get($this->_table)->result();
	}

	public function getById($id_dosen)
	{
		return $this->db->get_where($this->_table, ["id_dosen" => $id_dosen])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->id_dosen = '';
		$this->kode_dosen = $post["kode_dosen"];
		$this->nama_dosen = $post["nama_dosen"];
		$this->profil = $post["profil"];
		$this->aktif = $post["status_dosen"];
		$this->jenis_kelamin = $post["jenis_kelamin"];
		$this->jurusan = $post["jurusan"];
		$this->no_hp = $post["no_hp"];
		$this->email = $post["email"];
		$this->kode_kelompok_rumpun_ilmu = $post["kode_kelompok_rumpun_ilmu"];
		$this->kode_rumpun_ilmu = $post["kode_rumpun_ilmu"];
		$this->tipe_dosen = $post["tipe_dosen"];
		$this->rentang_fm = $post["rentang_fm"];
		$this->jja = $post["jja"];
		$this->password = $post["password"];
		return $this->db->insert($this->_table, $this);
	}
	public function update()
	{
		$post = $this->input->post();
		$this->id_dosen = $post["id_dosen"];
		$this->kode_dosen = $post["kode_dosen"];
		$this->nama_dosen = $post["nama_dosen"];
		$this->profil = $post["profil"];
		$this->aktif = $post["status_dosen"];
		$this->jenis_kelamin = $post["jenis_kelamin"];
		$this->jurusan = $post["jurusan"];
		$this->no_hp = $post["no_hp"];
		$this->email = $post["email"];
		$this->kode_kelompok_rumpun_ilmu = $post["kode_kelompok_rumpun_ilmu"];
		$this->kode_rumpun_ilmu = $post["kode_rumpun_ilmu"];
		$this->tipe_dosen = $post["tipe_dosen"];
		$this->rentang_fm = $post["rentang_fm"];
		$this->jja = $post["jja"];
		$this->password = $post["password"];
		return $this->db->update($this->_table, $this, array('id_dosen' => $post['id_dosen']));
	}
	public function delete($id_dosen)
	{
		return $this->db->delete($this->_table, array("id_dosen" => $id_dosen));
	}
}
