<?php 
defined("BASEPATH")OR exit("No direct script access allowed");

class Dokter_model extends Ci_Model
{
	public function getAllDokter()
	{
		return $this->db->get('dokter')->result_array();
	}
}