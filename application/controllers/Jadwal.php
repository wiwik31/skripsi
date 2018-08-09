<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Jadwal_model'); //load model jadwal
	}
	
	public function index()
	{
		$data['contents'] = 'admin/jadwal/list'; 
		$data['kelompok_data'] = $this->Jadwal_model->daftarJadwal();
		$this->load->view('templates/admin/index', $data);
	}

	public function create()
	{
		if (isset($_POST['submit'])){
			$this->Jadwal_model->insert();
			redirect('jadwal/index');
		}
		
		$data['contents'] = 'admin/jadwal/create'; 
		$this->load->view('templates/admin/index', $data);


	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Jadwal_model->edit();
			redirect('jadwal/index');
		}

		$id=$this->uri->segment(3);
		$data['jadwal'] = $this->Jadwal_model->getById($id);
		$data['contents'] = 'admin/jadwal/edit'; 
		$this->load->view('templates/admin/index', $data);
	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$this->Jadwal_model->hapus($id);
		redirect('jadwal/index');

	}

}
