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
	$data['title'] = 'Data Pasien';
	$this->load->view('pasien/index', $data);
}


public function ambilData()
{
	$dataPasien = $this->Pasien_model->getAllPasien();
	echo json_encode($dataPasien);
}


public function tambahData()
{
	$norm = $this->input->post('no_rekam_medis');
	$nama = $this->input->post('nama_pasien');
	$alamat = $this->input->post('alamat');
	$notelp = $this->input->post('no_telp_pasien');

	if($norm == ''){
		$result['pesan'] = 'No Rekam Medis Harus diisi';
	}elseif($nama == ''){
		$result['pesan'] = 'Nama Pasien harus diisi';
	}elseif($alamat == ''){
		$result['pesan'] = 'Alamat Pasien Harus diis';
	}elseif($notelp == ''){
		$result['pesan'] = 'No telp pasien harus diisi';
	}else{
		$result['pesan'] = '';

		$data=[
			'no_rekam_medis' => $norm,
			'nama_pasien' => $nama,
			'alamat' => $alamat,
			'no_telp_pasien' => $notelp
		];

		$this->Pasien_model->tambahData($data);		
	}
	
	echo json_encode($result['pesan']);

}

public function ambilDataById(){
	$id= $this->input->post('id');
	$dataPasien = $this->Pasien_model->getPasienById($id);
	echo json_encode($dataPasien);
}

public function ubah()
{
	$id = $this->input->post('id');
	$norm = $this->input->post('norm');
	$nama = $this->input->post('nama');
	$alamat = $this->input->post('alamat');
	$notelp = $this->input->post('notelp');

	if($norm == ''){
		$result['pesan'] = 'No Rekam Medis Harus diisi';
	}elseif($nama == ''){
		$result['pesan'] = 'Nama Pasien harus diisi';
	}elseif($alamat == ''){
		$result['pesan'] = 'Alamat Pasien Harus diis';
	}elseif($notelp == ''){
		$result['pesan'] = 'No telp pasien harus diisi';
	}else{
		$result['pesan'] = '';

		$data=[
			'no_rekam_medis' => $norm,
			'nama_pasien' => $nama,
			'alamat' => $alamat,
			'no_telp_pasien' => $notelp
		];

		$this->Pasien_model->ubahData($data, $id);		
	}
	
	echo json_encode($result['pesan']);

}









}
// akhir class Pasien