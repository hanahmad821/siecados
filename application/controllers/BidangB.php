<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BidangB extends CI_Controller
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
		$this->load->model('BidangB_M');
		$this->load->library('form_validation');
		$this->load->library('session');

	}
	public function index()
	{
		$data['bidangB'] = $this->BidangB_M->getAllBidangB();
		$this->load->view('bidangB/t_bidangB', $data);
	}

	public function add()
	{
		// $bidangB = $this->BidangB_M;
		// $validation = $this->form_validation;
		// $validation->set_rules($bidangB->rules());

		// if ($validation->run()) {
		// 	$bidangB->save();
		// 	$this->session->set_flashdata('success', 'Berhasil disimpan');
		// }
		$data['matkul'] = $this->BidangB_M->getMatkul();
		$data['dosen1'] = $this->BidangB_M->getDosen1();
		$data['dosen2'] = $this->BidangB_M->getDosen2();

		$this->load->view("bidangB/input_bidangB", $data);
	}
	public function add_journal()
	{
		$bidangB = $this->BidangB_M;
		$validation = $this->form_validation;
		$validation->set_rules($bidangB->rules_journal());

		if ($validation->run()) {
			$bidangB->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}
		$data['matkul'] = $this->BidangB_M->getMatkul();
		$data['dosen1'] = $this->BidangB_M->getDosen1();
		$data['dosen2'] = $this->BidangB_M->getDosen2();

		$this->load->view("bidangB/input_bidangB", $data);
	}
	public function add_conference()
	{
		$bidangB = $this->BidangB_M;
		$validation = $this->form_validation;
		$validation->set_rules($bidangB->rules_conference());

		if ($validation->run()) {
			$bidangB->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}
		$data['matkul'] = $this->BidangB_M->getMatkul();
		$data['dosen1'] = $this->BidangB_M->getDosen1();
		$data['dosen2'] = $this->BidangB_M->getDosen2();

		$this->load->view("bidangB/input_bidangB", $data);
	}

	public function edit($id_bidangB = null)
	{
		if (!isset($id_bidangB)) redirect('BidangB');

		$bidangB = $this->BidangB_M;
		$validation = $this->form_validation;
		$validation->set_rules($bidangB->rules());

		if ($validation->run()) {
			$bidangB->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}else{
			print_r($bidangB->rules());
		}
		$data['matkul'] = $this->BidangB_M->getMatkul();
		$data['dosen1'] = $this->BidangB_M->getDosen1();
		$data['dosen2'] = $this->BidangB_M->getDosen2();
		$data["bidangB"] = $bidangB->getById($id_bidangB);
		if (!$data["bidangB"]) show_404();

		$this->load->view("bidangB/edit_bidangB", $data);
	}

	public function delete($id_bidangB = null)
	{
		if (!isset($id_bidangB)) show_404();

		if ($this->BidangB_M->delete($id_bidangB)) {
			redirect(site_url('bidangB'));
		}
	}


	public function t_matkul()
	{
		$data['matkul'] = $this->Matkul_M->getAllMatkul();
		$this->load->view("admin/t_matkul", $data);
	}
}
