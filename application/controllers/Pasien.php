<?php 
defined("BASEPATH")OR exit('No direct script access allowed');

class Pasien extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->model('Pasien_model');
}

public function index()
{
	$this->load->view('pasien/index');
}


public function ambilData()
{
	$dataPasien = $this->Pasien_model->getAllPasien();
	echo json_encode($dataPasien);

}









}
// akhir class Pasien