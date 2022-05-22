<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BidangD extends CI_Controller
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
		$this->load->model('BidangD_M');
		$this->load->helper('file');
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function index()
	{
		$data['BidangD'] = $this->BidangD_M->getAllBidangD();
		$this->load->view('BidangD/t_BidangD', $data);
	}

	public function add()
	{
		$BidangD = $this->BidangD_M;
		$validation = $this->form_validation;
		$validation->set_rules($BidangD->rules());

		if ($validation->run()) {

			$config['upload_path']          = './upload/bidangd/';
			$config['allowed_types']        = 'jpg|jpeg|png|pdf';
			// $config['max_size']             = 2048;
			$this->load->library('upload', $config);
			$var_1 = $this->input->post('kode_dosen');

			if (!empty($_FILES['sertifikat'])) {
				unset($config);
				$config['upload_path']          = './upload/bidangd/sertifikat';
				$config['allowed_types']        = 'jpg|jpeg|png|pdf';
				$new_name_sertifikat = $var_1 . "-" . $_FILES["sertifikat"]['name'];
				$config['file_name'] = $new_name_sertifikat;
				$this->upload->initialize($config);
				$this->upload->do_upload('sertifikat');
				$upload_sertifikat = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
				$sertifikat = $upload_sertifikat['file_name'];
			} else {
				$sertifikat = '';
			}

			if (!empty($_FILES['dokumentasi'])) {
				$config['upload_path']          = './upload/bidangd/dokumentasi';
				$config['allowed_types']        = 'jpg|jpeg|png|pdf';
				$new_name_dokumentasi = $var_1 . "-" . $_FILES["dokumentasi"]['name'];
				$config['file_name'] = $new_name_dokumentasi;
				$this->upload->initialize($config);
				$this->upload->do_upload('dokumentasi');
				$upload_dokumentasi = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
				$dokumentasi = $upload_dokumentasi['file_name'];
			} else {
				$dokumentasi = '';
			}

			$BidangD->save($sertifikat, $dokumentasi);
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}
		$data['dosen1'] = $this->BidangD_M->getDosen1();

		$this->load->view("BidangD/input_BidangD", $data);
	}

	public function edit($id_BidangD = null)
	{
		if (!isset($id_BidangD)) redirect('BidangD');

		$BidangD = $this->BidangD_M;
		$validation = $this->form_validation;
		$validation->set_rules($BidangD->rules());

		if ($validation->run()) {

			$config['upload_path']          = './upload/bidangd/';
			$config['allowed_types']        = 'jpg|jpeg|png|pdf';
			// $config['max_size']             = 2048;
			$this->load->library('upload', $config);
			$var_1 = $this->input->post('kode_dosen');

			if (!empty($_FILES['sertifikat'])) {
				unset($config);
				$config['upload_path']          = './upload/bidangd/sertifikat';
				$config['allowed_types']        = 'jpg|jpeg|png|pdf';
				$new_name_sertifikat = $var_1 . "-" . $_FILES["sertifikat"]['name'];
				$config['file_name'] = $new_name_sertifikat;
				$this->upload->initialize($config);
				$this->upload->do_upload('sertifikat');
				$upload_sertifikat = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
				$sertifikat = $upload_sertifikat['file_name'];
			} else {
				$sertifikat = '';
			}

			if (!empty($_FILES['dokumentasi'])) {
				$config['upload_path']          = './upload/bidangd/dokumentasi';
				$config['allowed_types']        = 'jpg|jpeg|png|pdf';
				$new_name_dokumentasi = $var_1 . "-" . $_FILES["dokumentasi"]['name'];
				$config['file_name'] = $new_name_dokumentasi;
				$this->upload->initialize($config);
				$this->upload->do_upload('dokumentasi');
				$upload_dokumentasi = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
				$dokumentasi = $upload_dokumentasi['file_name'];
			} else {
				$dokumentasi = '';
			}
			$BidangD->update($sertifikat, $dokumentasi);
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		} else {
			print_r($BidangD->rules());
		}
		$data['matkul'] = $this->BidangD_M->getMatkul();
		$data['dosen1'] = $this->BidangD_M->getDosen1();
		$data['dosen2'] = $this->BidangD_M->getDosen2();
		$data["BidangD"] = $BidangD->getById($id_BidangD);
		if (!$data["BidangD"]) show_404();

		$this->load->view("BidangD/edit_BidangD", $data);
	}

	public function file_check_sertifikat($str)
	{
		$allowed_mime_type_arr = array('application/pdf', 'image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/x-png');
		$mime = get_mime_by_extension($_FILES['sertifikat']['name']);
		if (isset($_FILES['sertifikat']['name']) && $_FILES['sertifikat']['name'] != "") {
			if (in_array($mime, $allowed_mime_type_arr)) {
				return true;
			} else {
				$this->form_validation->set_message('file_check_sertifikat', 'Please select only pdf/gif/jpg/png file.');
				return false;
			}
		} else {
			$this->form_validation->set_message('file_check_sertifikat', 'Please choose a file to upload.');
			return false;
		}
	}

	public function file_check_dokumentasi($str)
	{
		$allowed_mime_type_arr = array('application/pdf', 'image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/x-png');
		$mime = get_mime_by_extension($_FILES['dokumentasi']['name']);
		if (isset($_FILES['dokumentasi']['name']) && $_FILES['dokumentasi']['name'] != "") {
			if (in_array($mime, $allowed_mime_type_arr)) {
				return true;
			} else {
				$this->form_validation->set_message('file_check_dokumentasi', 'Please select only pdf/jpg/png file.');
				return false;
			}
		} else {
			$this->form_validation->set_message('file_check_dokumentasi', 'Please choose a file to upload.');
			return false;
		}
	}

	public function delete($id_BidangD = null)
	{
		if (!isset($id_BidangD)) show_404();

		if ($this->BidangD_M->delete($id_BidangD)) {
			redirect(site_url('BidangD'));
		}
	}


	public function t_matkul()
	{
		$data['matkul'] = $this->Matkul_M->getAllMatkul();
		$this->load->view("admin/t_matkul", $data);
	}
}
