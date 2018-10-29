<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Peserta_model'); //load model Peserta
		// $this->load->model('Jurusan_model'); 
	}

	
	public function index()
	{
		$data['contents'] = 'admin/peserta/list'; 
		$data['kelompok_data'] = $this->Peserta_model->daftarPeserta();
		// $data['kelompok_data'] = $this->Jurusan_model->daftarJurusan();
		$this->load->view('templates/admin/index', $data);
	}

	public function create()
	{
		if (isset($_POST['submit'])){
			$this->Peserta_model->insert();
			redirect('peserta/index');
		}
		
		$data['contents'] = 'admin/peserta/create'; 
		$this->load->view('templates/admin/index', $data);


	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Peserta_model->edit();
			redirect('peserta/index');
		}

		$id=$this->uri->segment(3);
		$data['peserta'] = $this->Peserta_model->getById($id);
		$data['contents'] = 'admin/peserta/edit'; 
		$this->load->view('templates/admin/index', $data);
	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$this->Peserta_model->hapus($id);
		redirect('peserta/index');

	}

}
