<?php
defined('BASEPATH') or exit('No direct script access allowed');

class IntJurnal extends CI_Controller
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
		$this->load->model('IntJurnal_M');
		$this->load->helper('file');
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function index()
	{
		$data['bidangB'] = $this->IntJurnal_M->getAllBidangB();
		$this->load->view('bidangB/t_bidangB', $data);
	}

	public function add()
	{
		$bidangB = $this->IntJurnal_M;
		$validation = $this->form_validation;
		$validation->set_rules($bidangB->rules_journal());

		if ($validation->run()) {

			$config['upload_path']          = './upload/bidangb/';
			$config['allowed_types']        = 'jpg|jpeg|png|pdf|doc|docx';
			// $config['max_size']             = 2048;
			$this->load->library('upload', $config);
			$var_1 = $this->input->post('kode_dosen');

			if (!empty($_FILES['loa'])) {
				unset($config);
				$config['upload_path']          = './upload/bidangb/loa/';
				$config['allowed_types']        = 'jpg|jpeg|png|pdf';
				$new_name_loa = $var_1 . "-" . $_FILES["loa"]['name'];
				$config['file_name'] = $new_name_loa;
				$this->upload->initialize($config);
				$this->upload->do_upload('loa');
				$upload_loa = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
				$loa = $upload_loa['file_name'];
			} else {
				$loa = '';
			}

			if (!empty($_FILES['final_paper'])) {
				unset($config);
				$config['upload_path']          = './upload/bidangb/final_paper/';
				$config['allowed_types']        = 'jpg|jpeg|png|pdf';
				$new_name_final_paper = $var_1 . "-" . $_FILES["final_paper"]['name'];
				$config['file_name'] = $new_name_final_paper;
				$this->upload->initialize($config);
				$this->upload->do_upload('final_paper');
				$upload_final_paper = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
				$final_paper = $upload_final_paper['file_name'];
			} else {
				$final_paper = '';
			}

			$bidangB->save($loa, $final_paper);
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}
		$data['dosen1'] = $this->IntJurnal_M->getDosen1();

		$this->load->view("bidangB/input_IntJurnal", $data);
	}

	public function edit($id_bidangB = null)
	{
		if (!isset($id_bidangB)) redirect('BidangB');

		$bidangB = $this->IntJurnal_M;
		$validation = $this->form_validation;
		$validation->set_rules($bidangB->rules());

		if ($validation->run()) {
			$bidangB->update();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		} else {
			print_r($bidangB->rules());
		}
		$data['matkul'] = $this->IntJurnal_M->getMatkul();
		$data['dosen1'] = $this->IntJurnal_M->getDosen1();
		$data['dosen2'] = $this->IntJurnal_M->getDosen2();
		$data["bidangB"] = $bidangB->getById($id_bidangB);
		if (!$data["bidangB"]) show_404();

		$this->load->view("bidangB/edit_bidangB", $data);
	}

	public function file_check_loa($str)
	{
		$allowed_mime_type_arr = array('application/pdf', 'image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/x-png');
		$mime = get_mime_by_extension($_FILES['loa']['name']);
		if (isset($_FILES['loa']['name']) && $_FILES['loa']['name'] != "") {
			if (in_array($mime, $allowed_mime_type_arr)) {
				return true;
			} else {
				$this->form_validation->set_message('file_check_loa', 'Please select only pdf/gif/jpg/png file.');
				return false;
			}
		} else {
			$this->form_validation->set_message('file_check_loa', 'Please choose a file to upload.');
			return false;
		}
	}

	public function file_check_final_paper($str)
	{
		$allowed_mime_type_arr = array('application/pdf');
		$mime = get_mime_by_extension($_FILES['final_paper']['name']);
		if (isset($_FILES['final_paper']['name']) && $_FILES['final_paper']['name'] != "") {
			if (in_array($mime, $allowed_mime_type_arr)) {
				return true;
			} else {
				$this->form_validation->set_message('file_check_final_paper', 'Please select only pdf file.');
				return false;
			}
		} else {
			$this->form_validation->set_message('file_check_final_paper', 'Please choose a file to upload.');
			return false;
		}
	}

	public function delete($id_bidangB = null)
	{
		if (!isset($id_bidangB)) show_404();

		if ($this->IntJurnal_M->delete($id_bidangB)) {
			redirect(site_url('bidangB'));
		}
	}


	public function t_matkul()
	{
		$data['matkul'] = $this->Matkul_M->getAllMatkul();
		$this->load->view("admin/t_matkul", $data);
	}
}
