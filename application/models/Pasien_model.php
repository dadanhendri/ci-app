<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Pasien_model extends Ci_Model
{
	public function getAllPasien()
	{
		return $this->db->get('pasien')->result();
	}


	public function getPasien($limit, $star)
	{
		return $this->db->get('pasien',$limit, $star)->result_array();
	}


	public function countAllPasien()
	{
		return $this->db->get('pasien')->num_rows();
	}

	public function tambahData($data)
	{
		$this->db->insert('pasien', $data);
	}




}




?>