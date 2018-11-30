<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahun extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Tahun_model'); //load model jurusan
	}
	
	public function index()
	{
		$data['contents'] = 'admin/tahun/list'; 
		$data['kelompok_data'] = $this->Tahun_model->daftarTahun();
		$this->load->view('templates/admin/index', $data);
	}

	public function create()
	{
		if (isset($_POST['submit'])){
			$this->Tahun_model->insert();
			redirect('tahun/index');
		}
		
		$data['contents'] = 'admin/tahun/create'; 
		$this->load->view('templates/admin/index', $data);


	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Tahun_model->edit();
			redirect('tahun/index');
		}

		$id=$this->uri->segment(3);
		$data['tahun'] = $this->Tahun_model->getById($id);
		$data['contents'] = 'admin/tahun/edit'; 
		$this->load->view('templates/admin/index', $data);
	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$this->Tahun_model->hapus($id);
		redirect('tahun/index');

	}

}
