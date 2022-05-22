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
		$this->load->model('Matkul_M');
		$this->load->model('BidangC_M');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper(array('form', 'url'));
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
			$BidangC->save();
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

		$config['upload_path']          = './upload/bidangc/';
		$config['allowed_types']        = 'jpg|jpeg|png|pdf|doc|docx';
		$config['max_size']             = 2048;
		$this->load->library('upload', $config);
		$var_1 = $this->input->post('kode_dosen');

		if (!empty($_FILES['sertifikat'])) {
			$new_name_sertifikat = $var_1 . "-Sertifikat-" . $_FILES["sertifikat"]['name'];
			$config['file_name'] = $new_name_sertifikat;
			$this->upload->do_upload('sertifikat');
			$upload_sertifikat = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
			$sertifikat = $upload_sertifikat['file_name'];
		} else {
			$sertifikat = '';
		}

		if (!empty($_FILES['dokumentasi'])) {
			$new_name_dokumentasi = $var_1 . "-dokumentasi-" . $_FILES["dokumentasi"]['name'];
			$config['file_name'] = $new_name_dokumentasi;
			$this->upload->do_upload('dokumentasi');
			$upload_dokumentasi = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
			$dokumentasi = $upload_dokumentasi['file_name'];
		} else {
			$dokumentasi = '';
		}

		if (!empty($_FILES['proposal'])) {
			$new_name_proposal = $var_1 . "-proposal-" . $_FILES["proposal"]['name'];
			$config['file_name'] = $new_name_proposal;
			$this->upload->do_upload('proposal');
			$upload_proposal = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
			$proposal = $upload_proposal['file_name'];
		} else {
			$proposal = '';
		}

		if (!empty($_FILES['laporan'])) {
			$new_name_laporan = $var_1 . "-laporan-" . $_FILES["laporan"]['name'];
			$config['file_name'] = $new_name_laporan;
			$this->upload->do_upload('laporan');
			$upload_laporan = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
			$laporan = $upload_laporan['file_name'];
		} else {
			$laporan = '';
		}

		if (!empty($_FILES['materi'])) {
			$new_name_materi = $var_1 . "-materi-" . $_FILES["materi"]['name'];
			$config['file_name'] = $new_name_materi;
			$this->upload->do_upload('materi');
			$upload_materi = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
			$materi = $upload_materi['file_name'];
		} else {
			$materi = '';
		}

		if ($validation->run()) {
			$BidangC->update($sertifikat, $dokumentasi, $proposal, $laporan, $materi);
			$this->session->set_flashdata('success', 'Berhasil disimpan');
		} else {
			print_r($BidangC->rules());
			// $post = $this->input->post();
			// $test = $post["kegiatan"];
			// var_dump($test);
			// die;
		}
		$data['dosen1'] = $this->BidangC_M->getDosen1();
		$data["BidangC"] = $BidangC->getById($id_BidangC);
		if (!$data["BidangC"]) show_404();

		$this->load->view("BidangC/edit_BidangC", $data);
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
