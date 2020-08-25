<?php 
defined("BASEPATH")OR exit('No direct script access allowed');

class Dokter extends Ci_controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dokter_model');
		$this->load->library('form_validation');

	}

	public function index()
	{
		$data['title'] = 'Halaman Dokter';
		$data['dokter'] = $this->Dokter_model->getAllDokter();

		$this->load->view('templates/header', $data);
		$this->load->view('dokter/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = 'Halaman tambah data';
		$this->form_validation->set_rules('kddok', 'Kode Dokter','required');
		$this->form_validation->set_rules('nama', 'Nama Dokter','required');
		$this->form_validation->set_rules('spesialis', 'Spesialis','required');
		$this->form_validation->set_rules('telp', 'No Telp','required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('dokter/tambah_view');
			$this->load->view('templates/footer');			
		}else{
			$data = [
				"kode_dok" => $this->input->post('kddok', true),
				"nama_dokter" => $this->input->post('nama', true),
				"spesialis" =>$this->input->post('spesialis', true),
				"no_telp" =>$this->input->post('telp', true)
			];

			$this->Dokter_model->tambahDataDokter($data);
			$this->session->set_flashdata('flash','Ditambah');
			redirect('dokter');
		}
	}




}