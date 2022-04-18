<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_M');
		$this->load->library('form_validation');
		$this->load->library('session');

	}
	public function index()
	{
		$data['user'] = $this->User_M->getAllUser();
		$this->load->view('admin/t_user', $data);
	}

	public function add()
	{
		$user = $this->User_M;
		$data['profil'] = $this->User_M->getProfil();

		$validation = $this->form_validation;
		$validation->set_rules($user->rulesInput());

		if ($validation->run()) {
			$user->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$this->load->view("admin/input_user", $data);
	}

	public function edit($id_user = null)
	{
		if (!isset($id_user)) redirect('admin/user');

		$user = $this->User_M;
		$validation = $this->form_validation;
		$validation->set_rules($user->rules());

		if ($validation->run()) {
			$user->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$data["user"] = $user->getById($id_user);
		$data['profil'] = $this->User_M->getProfil();
		if (!$data["user"]) show_404();

		$this->load->view("admin/edit_user", $data);
	}

	public function delete($id_user = null)
	{
		if (!isset($id_user)) show_404();

		if ($this->User_M->delete($id_user)) {
			redirect(site_url('admin/user'));
		}
	}


	public function t_user()
	{
		$data['user'] = $this->User_M->getAllUser();
		$this->load->view("admin/t_user", $data);
	}
}
