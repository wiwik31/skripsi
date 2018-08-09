<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matauji extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Matauji_model'); //load model Mataujian
	}
	
	public function index()
	{
		$data['contents'] = 'admin/matauji/list'; 
		$data['kelompok_data'] = $this->Matauji_model->daftarMatauji();
		$this->load->view('templates/admin/index', $data);
	}

	public function create()
	{
		if (isset($_POST['submit'])){
			$this->Matauji_model->insert();
			redirect('matauji/index');
		}
		
		$data['contents'] = 'admin/matauji/create'; 
		$this->load->view('templates/admin/index', $data);


	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Matauji_model->edit();
			redirect('matauji/index');
		}

		$id=$this->uri->segment(3);
		$data['matauji'] = $this->Matauji_model->getById($id);
		$data['contents'] = 'admin/matauji/edit'; 
		$this->load->view('templates/admin/index', $data);
	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$this->Matauji_model->hapus($id);
		redirect('matauji/index');

	}

}
