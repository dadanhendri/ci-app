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
	$this->load->view('templates/header', $data);
	$this->load->view('pasien/index', $data);
	$this->load->view('templates/footer');
}


public function ambilData()
{
	$dataPasien = $this->Pasien_model->getAllPasien();
	echo json_encode($dataPasien);
}


public function tambahData()
{
	$norm = htmlspecialchars($this->input->post('no_rekam_medis', true));
	$nama = htmlspecialchars($this->input->post('nama_pasien', true));
	$alamat = htmlspecialchars($this->input->post('alamat', true));
	$notelp = htmlspecialchars($this->input->post('no_telp_pasien', true));

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
	$norm = htmlspecialchars($this->input->post('norm', true));
	$nama = htmlspecialchars($this->input->post('nama', true));
	$alamat = htmlspecialchars($this->input->post('alamat', true));
	$notelp = htmlspecialchars($this->input->post('notelp', true));

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

public function hapus()
{
	$id = $this->input->post('id', true);
	$this->Pasien_model->hapusDataPasien($id);
}









}
// akhir class Pasien