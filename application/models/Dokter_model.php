<?php 
defined("BASEPATH")OR exit("No direct script access allowed");

class Dokter_model extends Ci_Model
{
	public function getAllDokter()
	{
		return $this->db->get('dokter')->result_array();
	}


	public function getDokterById($id)
	{
		return $this->db->get_where('dokter', ['id_dokter' => $id])->row_array();
	}


	public function tambahDataDokter($data)
	{
		$this->db->insert('dokter', $data);
	}


	public function hapusDataDokter($id)
	{
		$this->db->where('id_dokter', $id);
		$this->db->delete('dokter');
	}

	public function ubahDataDokter($data)
	{
		$this->db->where('id_dokter', $this->input->post('id', true));
		$this->db->update('dokter', $data);
	}



}