<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BidangC extends CI_Controller
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
		$this->load->model('BidangC_M');
		$this->load->helper('file');
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function index()
	{
		$data['BidangC'] = $this->BidangC_M->getAllBidangC();
		$this->load->view('BidangC/t_BidangC', $data);
	}

	public function add()
	{
		$BidangC = $this->BidangC_M;
		$validation = $this->form_validation;
		$validation->set_rules($BidangC->rules());

		if ($validation->run()) {

			$config['upload_path']          = './upload/bidangc/';
			$config['allowed_types']        = 'jpg|jpeg|png|pdf|doc|docx';
			// $config['max_size']             = 2048;
			$this->load->library('upload', $config);
			$var_1 = $this->input->post('kode_dosen');


			if (!empty($_FILES['sertifikat'])) {
				unset($config);
				$config['upload_path']          = './upload/bidangc/sertifikat/';
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
				unset($config);
				$config['upload_path']          = './upload/bidangc/dokumentasi/';
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

			if (!empty($_FILES['proposal'])) {
				unset($config);
				$config['upload_path']          = './upload/bidangc/proposal/';
				$config['allowed_types']        = 'pdf|doc|docx';
				$new_name_proposal = $var_1 . "-" . $_FILES["proposal"]['name'];
				$config['file_name'] = $new_name_proposal;
				$this->upload->initialize($config);
				$this->upload->do_upload('proposal');
				$upload_proposal = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
				$proposal = $upload_proposal['file_name'];
			} else {
				$proposal = '';
			}

			if (!empty($_FILES['laporan'])) {
				unset($config);
				$config['upload_path']          = './upload/bidangc/laporan/';
				$config['allowed_types']        = 'pdf|doc|docx';
				$new_name_laporan = $var_1 . "-" . $_FILES["laporan"]['name'];
				$config['file_name'] = $new_name_laporan;
				$this->upload->initialize($config);
				$this->upload->do_upload('laporan');
				$upload_laporan = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
				$laporan = $upload_laporan['file_name'];
			} else {
				$laporan = '';
			}

			if (!empty($_FILES['materi'])) {
				unset($config);
				$config['upload_path']          = './upload/bidangc/laporan/';
				$config['allowed_types']        = 'pdf|ppt|pptx';
				$new_name_materi = $var_1 . "-" . $_FILES["materi"]['name'];
				$config['file_name'] = $new_name_materi;
				$this->upload->initialize($config);
				$this->upload->do_upload('materi');
				$upload_materi = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
				$materi = $upload_materi['file_name'];
			} else {
				$materi = '';
			}

			$BidangC->save($sertifikat, $dokumentasi, $proposal, $laporan, $materi);
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}
		$data['dosen1'] = $this->BidangC_M->getDosen1();
		// print_r($data);

		$this->load->view("BidangC/input_BidangC", $data);
	}


	public function edit($id_BidangC = null)
	{

		if (!isset($id_BidangC)) redirect('BidangC');

		$BidangC = $this->BidangC_M;
		$validation = $this->form_validation;
		$validation->set_rules($BidangC->rules());

		if ($validation->run()) {
			$config['upload_path']          = './upload/bidangc/';
			$config['allowed_types']        = 'jpg|jpeg|png|pdf|doc|docx';
			// $config['max_size']             = 2048;
			$this->load->library('upload', $config);
			$var_1 = $this->input->post('kode_dosen');


			if (!empty($_FILES['sertifikat'])) {
				unset($config);
				$config['upload_path']          = './upload/bidangc/sertifikat/';
				$config['allowed_types']        = 'jpg|jpeg|png|pdf';
				$new_name_sertifikat = $var_1 . "-" . $_FILES["sertifikat"]['name'];
				$config['file_name'] = $new_name_sertifikat;
				$this->upload->initialize($config);
				$this->upload->do_upload('sertifikat');
				$upload_sertifikat = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
				$sertifikat = $upload_sertifikat['file_name'];
			} else {
				$sertifikat = $BidangC->sertifikat_pembicara;
			}

			if (!empty($_FILES['dokumentasi'])) {
				unset($config);
				$config['upload_path']          = './upload/bidangc/dokumentasi/';
				$config['allowed_types']        = 'jpg|jpeg|png|pdf';
				$new_name_dokumentasi = $var_1 . "-" . $_FILES["dokumentasi"]['name'];
				$config['file_name'] = $new_name_dokumentasi;
				$this->upload->initialize($config);
				$this->upload->do_upload('dokumentasi');
				$upload_dokumentasi = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
				$dokumentasi = $upload_dokumentasi['file_name'];
			} else {
				$dokumentasi = $BidangC->dokumentasi;
			}

			if (!empty($_FILES['proposal'])) {
				unset($config);
				$config['upload_path']          = './upload/bidangc/proposal/';
				$config['allowed_types']        = 'pdf|doc|docx';
				$new_name_proposal = $var_1 . "-" . $_FILES["proposal"]['name'];
				$config['file_name'] = $new_name_proposal;
				$this->upload->initialize($config);
				$this->upload->do_upload('proposal');
				$upload_proposal = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
				$proposal = $upload_proposal['file_name'];
			} else {
				$proposal = $BidangC->proposal;
			}

			if (!empty($_FILES['laporan'])) {
				unset($config);
				$config['upload_path']          = './upload/bidangc/laporan/';
				$config['allowed_types']        = 'pdf|doc|docx';
				$new_name_laporan = $var_1 . "-" . $_FILES["laporan"]['name'];
				$config['file_name'] = $new_name_laporan;
				$this->upload->initialize($config);
				$this->upload->do_upload('laporan');
				$upload_laporan = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
				$laporan = $upload_laporan['file_name'];
			} else {
				$laporan = $BidangC->laporan;
			}

			if (!empty($_FILES['materi'])) {
				unset($config);
				$config['upload_path']          = './upload/bidangc/laporan/';
				$config['allowed_types']        = 'pdf|ppt|pptx';
				$new_name_materi = $var_1 . "-" . $_FILES["materi"]['name'];
				$config['file_name'] = $new_name_materi;
				$this->upload->initialize($config);
				$this->upload->do_upload('materi');
				$upload_materi = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
				$materi = $upload_materi['file_name'];
			} else {
				$materi = $BidangC->materi;
			}
			$BidangC->update($sertifikat, $dokumentasi, $proposal, $laporan, $materi);
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		}
		$data['dosen1'] = $this->BidangC_M->getDosen1();
		$data["BidangC"] = $BidangC->getById($id_BidangC);
		if (!$data["BidangC"]) show_404();

		$this->load->view("BidangC/edit_BidangC", $data);
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

	public function file_check_proposal($str)
	{
		$allowed_mime_type_arr = array('application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
		$mime = get_mime_by_extension($_FILES['proposal']['name']);
		if (isset($_FILES['proposal']['name']) && $_FILES['proposal']['name'] != "") {
			if (in_array($mime, $allowed_mime_type_arr)) {
				return true;
			} else {
				$this->form_validation->set_message('file_check_proposal', 'Please select only pdf/doc/docx file.');
				return false;
			}
		} else {
			$this->form_validation->set_message('file_check_proposal', 'Please choose a file to upload.');
			return false;
		}
	}

	public function file_check_laporan($str)
	{
		$allowed_mime_type_arr = array('application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
		$mime = get_mime_by_extension($_FILES['laporan']['name']);
		if (isset($_FILES['laporan']['name']) && $_FILES['laporan']['name'] != "") {
			if (in_array($mime, $allowed_mime_type_arr)) {
				return true;
			} else {
				$this->form_validation->set_message('file_check_laporan', 'Please select only pdf/doc/docx file.');
				return false;
			}
		} else {
			$this->form_validation->set_message('file_check_laporan', 'Please choose a file to upload.');
			return false;
		}
	}

	public function file_check_materi($str)
	{
		$allowed_mime_type_arr = array('application/pdf', 'image/jpg', 'application/vnd.ms-powerpoint', 'application/vnd.openxmlformats-officedocument.presentationml.presentation');
		$mime = get_mime_by_extension($_FILES['materi']['name']);
		if (isset($_FILES['materi']['name']) && $_FILES['materi']['name'] != "") {
			if (in_array($mime, $allowed_mime_type_arr)) {
				return true;
			} else {
				$this->form_validation->set_message('file_check_materi', 'Please select only pdf/ppt/pptx file.');
				return false;
			}
		} else {
			$this->form_validation->set_message('file_check_materi', 'Please choose a file to upload.');
			return false;
		}
	}

	public function delete($id_BidangC = null)
	{
		if (!isset($id_BidangC)) show_404();

		if ($this->BidangC_M->delete($id_BidangC)) {
			redirect(site_url('BidangC'));
		}
	}


	public function t_matkul()
	{
		$data['matkul'] = $this->Matkul_M->getAllMatkul();
		$this->load->view("admin/t_matkul", $data);
	}
}
