<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BidangA extends CI_Controller
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
		$this->load->model('BidangA_M');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function index()
	{
		$data['bidangA'] = $this->BidangA_M->getAllBidangA();
		$this->load->view('bidangA/t_bidangA', $data);
	}

	public function add()
	{
		$bidangA = $this->BidangA_M;
		$validation = $this->form_validation;
		$validation->set_rules($bidangA->rules());

		if ($validation->run()) {
			$bidangA->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}
		$data['matkul'] = $this->BidangA_M->getMatkul();
		$data['dosen1'] = $this->BidangA_M->getDosen1();
		$data['dosen2'] = $this->BidangA_M->getDosen2();

		$this->load->view("bidangA/input_bidangA", $data);
	}

	public function edit($id_bidangA = null)
	{
		if (!isset($id_bidangA)) redirect('BidangA');

		$bidangA = $this->BidangA_M;
		$validation = $this->form_validation;
		$validation->set_rules($bidangA->rules());

		if ($validation->run()) {
			$bidangA->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}
		$data['matkul'] = $this->BidangA_M->getMatkul();
		$data['dosen1'] = $this->BidangA_M->getDosen1();
		$data['dosen2'] = $this->BidangA_M->getDosen2();
		$data["bidangA"] = $bidangA->getById($id_bidangA);
		if (!$data["bidangA"]) show_404();

		$this->load->view("bidangA/edit_bidangA", $data);
	}

	public function delete($id_bidangA = null)
	{
		if (!isset($id_bidangA)) show_404();

		if ($this->BidangA_M->delete($id_bidangA)) {
			redirect(site_url('bidangA'));
		}
	}


	public function t_matkul()
	{
		$data['matkul'] = $this->Matkul_M->getAllMatkul();
		$this->load->view("admin/t_matkul", $data);
	}
}
