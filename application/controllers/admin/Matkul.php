<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matkul extends CI_Controller
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
		$this->load->model('Matkul_M');
		$this->load->library('form_validation');
		$this->load->library('session');

	}
	public function index()
	{
		$data['matkul'] = $this->Matkul_M->getAllMatkul();
		$this->load->view('admin/t_matkul', $data);
	}

	public function add()
	{
		$matkul = $this->Matkul_M;
		$validation = $this->form_validation;
		$validation->set_rules($matkul->rules());

		if ($validation->run()) {
			$matkul->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$this->load->view("admin/input_matkul");
	}

	public function edit($id_matkul = null)
	{
		if (!isset($id_matkul)) redirect('admin/matkul');

		$matkul = $this->Matkul_M;
		$validation = $this->form_validation;
		$validation->set_rules($matkul->rules());

		if ($validation->run()) {
			$matkul->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$data["matkul"] = $matkul->getById($id_matkul);
		if (!$data["matkul"]) show_404();

		$this->load->view("admin/edit_matkul", $data);
	}

	public function delete($id_matkul = null)
	{
		if (!isset($id_matkul)) show_404();

		if ($this->Matkul_M->delete($id_matkul)) {
			redirect(site_url('admin/matkul'));
		}
	}


	public function t_matkul()
	{
		$data['matkul'] = $this->Matkul_M->getAllMatkul();
		$this->load->view("admin/t_matkul", $data);
	}
}
