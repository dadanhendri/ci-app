<?php 
defined("BASEPATH")OR exit('No direct script access allowed');

class Dokter extends Ci_controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Halaman Dokter';
		$this->load->view('templates/header', $data);
		$this->load->view('dokter/index');
		$this->load->view('templates/footer');
	}
}