<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Jurusan_model'); //load model jurusan
	}
	
	public function jurusan(){
		$data['title'] = "jurusan" ;

		$this->load->view('jurusan' , $data);
	}


	public function index()
	{
		$data['contents'] = 'admin/jurusan/list'; 
		$data['kelompok_data'] = $this->Jurusan_model->daftarJurusan();
		$this->load->view('templates/admin/index', $data);
	}

	public function create()
	{
		if (isset($_POST['submit'])){
			$this->Jurusan_model->insert();
			redirect('jurusan/index');
		}
		
		$data['contents'] = 'admin/jurusan/create'; 
		$this->load->view('templates/admin/index', $data);


	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Jurusan_model->edit();
			redirect('jurusan/index');
		}

		$id=$this->uri->segment(3);
		$data['jurusan'] = $this->Jurusan_model->getById($id);
		$data['contents'] = 'admin/jurusan/edit'; 
		$this->load->view('templates/admin/index', $data);
	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$this->Jurusan_model->hapus($id);
		redirect('jurusan/index');

	}

}
