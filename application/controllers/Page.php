<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends Ci_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pasien_model');
		$this->load->library('pagination');
	}

    public function index()
    {
    	$config['base_url'] = 'http://localhost/ci_app/page/index';
		$config['total_rows'] = $this->Pasien_model->countAllPasien();
		$config['per_page'] = 10;
		$config['num_links'] = 5;

		$this->pagination->initialize($config);



    	$data['title'] = "Halaman Pasien";
    	$data['star'] = $this->uri->segment(3);
    	$data['pasien'] = $this->Pasien_model->getPasien($config['per_page'], $data['star']);

        $this->load->view('page/index', $data);
    }
    
}






?>