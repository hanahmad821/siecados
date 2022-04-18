<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Periode extends CI_Controller
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
		$this->load->model('Periode_M');
		$this->load->library('form_validation');
		$this->load->library('session');

	}
	public function index()
	{
		$data['periode'] = $this->Periode_M->getAllperiode();
		$this->load->view('admin/t_periode', $data);
	}

	public function add()
	{
		$periode = $this->Periode_M;
		$validation = $this->form_validation;
		$validation->set_rules($periode->rules());

		if ($validation->run()) {
			$periode->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$this->load->view("admin/input_periode");
	}

	public function edit($id_periode = null)
	{
		if (!isset($id_periode)) redirect('admin/periode');

		$periode = $this->Periode_M;
		$validation = $this->form_validation;
		$validation->set_rules($periode->rules());

		if ($validation->run()) {
			$periode->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}

		$data["periode"] = $periode->getById($id_periode);
		if (!$data["periode"]) show_404();

		$this->load->view("admin/edit_periode", $data);
	}

	public function delete($id_periode = null)
	{
		if (!isset($id_periode)) show_404();

		if ($this->Periode_M->delete($id_periode)) {
			redirect(site_url('admin/periode'));
		}
	}


	public function t_periode()
	{
		$data['periode'] = $this->Periode_M->getAllperiode();
		$this->load->view("admin/t_periode", $data);
	}
}
