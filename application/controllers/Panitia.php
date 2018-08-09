<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panitia extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Panitia_model'); //load model jurusan
	}
	
	public function index()
	{
		$data['contents'] = 'admin/panitia/list'; 
		$data['kelompok_data'] = $this->Panitia_model->daftarPanitia();
		$this->load->view('templates/admin/index', $data);
	}

	public function create()
	{
		if (isset($_POST['submit'])){
			$this->Panitia_model->insert();
			redirect('panitia/index');
		}
		
		$data['contents'] = 'admin/panitia/create'; 
		$this->load->view('templates/admin/index', $data);


	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Panitia_model->edit();
			redirect('panitia/index');
		}

		$id=$this->uri->segment(3);
		$data['panitia'] = $this->Panitia_model->getById($id);
		$data['contents'] = 'admin/panitia/edit'; 
		$this->load->view('templates/admin/index', $data);
	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$this->Panitia_model->hapus($id);
		redirect('panitia/index');

	}

}
