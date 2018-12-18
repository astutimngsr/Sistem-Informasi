<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah  extends CI_Controller {

	
	public function index()
	{
		$this->load->model('Model_matakuliah');
		$this->model_squrity->getsqurity();
		$isi['content'] = 'Matakuliah/tampilan_datamatkul';
		$isi['judul']	= 'master';
		$isi['sub_judul'] = 'matakuliah'; 
		$isi['data'] = $this->db->get('matakuliah');
		$this->load->view('tampilan_home', $isi );

	}

	public function tambah()
	{
		
		$this->model_squrity->getsqurity();
		$isi['content'] = 'Matakuliah/form_tambahmatakuliah';
		$isi['judul']	= 'master';
		$isi['sub_judul'] = 'tambah matakuliah'; 
		$isi['kode']	= '';
		$isi['matkul']	= '';
		$isi['smstr']	= '';
		$this->load->view('tampilan_home', $isi );
 
	}

	public function edit()
	{
		$this->model_squrity->getsqurity();
		$isi['content'] = 'Matakuliah/form_tambahmatakuliah';
		$isi['judul']	= 'master';
		$isi['sub_judul'] = 'edit matakuliah'; 

		$key = $this->uri->segment(3);
		$this->db->where('kode_mk', $key);
		$query = $this->db->get('matakuliah');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['kode']	= $row->kode_mk;
				$isi['matkul']	= $row->nama_mk;
				$isi['smstr']	= $row->semester;
			}

		}
		else
		{
				$isi['kode']	= '';
				$isi['matkul']	= '';
				$isi['smstr']	= '';
		}
		$this->load->view('tampilan_home', $isi );
 		

	}

	public function simpan()
	{
		
		$this->model_squrity->getsqurity();
		$key					= $this->input->post('kode');
		$data['kode_mk']		= $this->input->post('kode');
		$data['nama_mk']		= $this->input->post('matkul');
		$data['semester']		= $this->input->post('smstr');

		$this->load->model('model_matakuliah');
		$query = $this->model_matakuliah->getdata($key);
		if($query->num_rows()>0)
		{
			$this->model_matakuliah->getupdate($key,$data);
			$this->session->set_flashdata('info','data sukses di update');
		}
		else
		{
			$this->model_matakuliah->getinsert($data);
			$this->session->set_flashdata('info','data sukses di simpan');
		}
		redirect('matakuliah/tambah');
	}

	public function delete()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_matakuliah');

		$key = $this->uri->segment(3);
		$this->db->where('kode_mk', $key);
		$query = $this->db->get('matakuliah'); 
		if($query->num_rows()>0)
		{
			$this->model_matakuliah->getdelete($key);
		} 
		redirect('matakuliah');
	}
	
}
