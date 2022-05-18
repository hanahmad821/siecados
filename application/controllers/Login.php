<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'kode_dosen' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("p_dosen",$where)->num_rows();
		if($cek > 0){

			$data_dosen = $this->m_login->get_data_dosen($username);

			$data_session = array(
				'kode_dosen' => $username,
				'nama_dosen' => $data_dosen->nama_dosen,
				'profil' =>  $data_dosen->profil
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("home"));

		}else{
			$this->load->view('login');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}

?>
