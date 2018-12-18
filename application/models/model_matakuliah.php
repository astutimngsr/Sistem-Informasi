<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_matakuliah extends CI_model {

	public function getdata($key)

	{
		$this->db->where('kode_mk', $key);
		$hasil = $this->db->get('matakuliah');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('kode_mk', $key);
		$this->db->update('matakuliah', $data);
	}

	public function getinsert($data)
	{
		$this->db->insert('matakuliah',$data);
	}

	public function getdelete($key)
	{
		$this->db->where('kode_mk', $key);
		$this->db->delete('matakuliah');
	}
	
	
}
  