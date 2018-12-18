<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_jadwalmatkul extends CI_model {

	public function getdata($key)

	{
		$this->db->where('kode_mk', $key);
		$hasil = $this->db->get('jadwal');
		return $hasil;
	}

	public function getupdate($key,$data)
	{
		$this->db->where('kode_mk', $key);
		$this->db->update('jadwal', $data);
	}

	public function getinsert($data)
	{
		$this->db->insert('jadwal',$data);
	}

	public function getdelete($key)
	{
		$this->db->where('kode_mk', $key);
		$this->db->delete('jadwal');
	}
	
	
}
  