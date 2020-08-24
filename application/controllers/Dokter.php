<?php 
defined("BASEPATH")OR exit('No direct script access allowed');

class Dokter extends Ci_controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dokter_model');
	}

	public function index()
	{
		$data['title'] = 'Halaman Dokter';
		$data['dokter'] = $this->Dokter_model->getAllDokter();

		$this->load->view('templates/header', $data);
		$this->load->view('dokter/index', $data);
		$this->load->view('templates/footer');
	}
}