<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal  extends CI_Controller {

	
	public function index()
	{
		$this->load->model('Model_jadwalmatkul');
		$this->model_squrity->getsqurity();
		$isi['content'] = 'Jadwal Matkul/tampilan_datajadwalmatkul';
		$isi['judul']	= 'data';
		$isi['sub_judul'] = 'jadwalmatakuliah'; 
		$isi['data'] = $this->db->get('jadwal');
		$this->load->view('tampilan_home', $isi );

	}

	public function tambah()
	{
		
		$this->model_squrity->getsqurity();
		$isi['content'] = 'Jadwal Matkul/form_tambahjadwalmatkul';
		$isi['judul']	= 'data';
		$isi['sub_judul'] = 'tambah jadwalmatakuliah'; 
		$isi['kode']	= '';
		$isi['matkul']	= '';
		$isi['jadwalmatkul']	= '';
		$isi['dosen']	= '';
		$this->load->view('tampilan_home', $isi );
 
	}

	public function edit()
	{
		$this->model_squrity->getsqurity();
		$isi['content'] = 'Jadwal Matkul/form_tambahjadwalmatkul';
		$isi['judul']	= 'data';
		$isi['sub_judul'] = 'edit jadwalmatakuliah'; 

		$key = $this->uri->segment(3);
		$this->db->where('kode_mk', $key);
		$query = $this->db->get('jadwal');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$isi['kode']	= $row->kode_mk;
				$isi['matkul']	= $row->nama_mk;
				$isi['jadwalmatkul']	= $row->Jadwal;
				$isi['dosen']	= $row->Dosen;
			}

		}
		else
		{
				$isi['kode']	= '';
				$isi['matkul']	= '';
				$isi['jadwalmatkul']	= '';
				$isi['dosen']	= '';
		}
		$this->load->view('tampilan_home', $isi );
 		

	}

	public function simpan()
	{
		
		$this->model_squrity->getsqurity();
		$key					= $this->input->post('kode');
		$data['kode_mk']		= $this->input->post('kode');
		$data['nama_mk']		= $this->input->post('matkul');
		$data['Jadwal']			= $this->input->post('jadwal');
		$data['Dosen']			= $this->input->post('dosen');

		$this->load->model('model_jadwalmatkul');
		$query = $this->model_jadwalmatkul->getdata($key);
		if($query->num_rows()>0)
		{
			$this->model_jadwalmatkul->getupdate($key,$data);
			$this->session->set_flashdata('info','data sukses di update');
		}
		else
		{
			$this->model_jadwalmatkul->getinsert($data);
			$this->session->set_flashdata('info','data sukses di simpan');
		}
		redirect('jadwal/tambah');
	}

	public function delete()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_jadwalmatkul');

		$key = $this->uri->segment(3);
		$this->db->where('kode_mk', $key);
		$query = $this->db->get('jadwal'); 
		if($query->num_rows()>0)
		{
			$this->model_jadwalmatkul->getdelete($key);
		} 
		redirect('jadwal');
	}
	
}
