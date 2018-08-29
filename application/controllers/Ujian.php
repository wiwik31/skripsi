<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Ujian_model'); //load model Mataujian
	}
	
	public function index()
	{
		$data['contents'] = 'admin/ujian/list'; 
		$data['kelompok_data'] = $this->Ujian_model->daftarUjian();
		$this->load->view('templates/admin/index', $data);
	}

	public function create()
	{
		if (isset($_POST['submit'])){
			$this->Ujian_model->insert();
			redirect('ujian/index');
		}
		
		$data['contents'] = 'admin/ujian/create'; 
		$this->load->view('templates/admin/index', $data);


	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Ujian_model->edit();
			redirect('ujian/index');
		}

		$id=$this->uri->segment(3);
		$data['ujian'] = $this->Ujian_model->getById($id);
		$data['contents'] = 'admin/ujian/edit'; 
		$this->load->view('templates/admin/index', $data);
	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$this->Ujian_model->hapus($id);
		redirect('ujian/index');

	}

}
