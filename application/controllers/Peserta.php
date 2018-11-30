<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Peserta_model'); //load model Peserta
		$this->load->model('Jurusan_model'); 
		$this->load->model('Ujian_model'); 
		$this->load->model('Panitia_model'); 
		$this->load->model('Jadwal_model'); 
	}

	public function cetak($id){
		// $data['hasil'] = $this->checkHasil($id);
		$data['peserta'] = $this->Peserta_model->getById($id);
		$data['jurusan'] = $this->Jurusan_model->getById($this->Peserta_model->getById($id)['id_jurusan']);
		$data['jurusan2'] = $this->Jurusan_model->getById($this->Peserta_model->getById($id)['id_jurusan2']);
		$data['jadwal'] = $this->Jadwal_model->getById($this->Peserta_model->getById($id)['id_jadwal']);
		$data['panitia'] = $this->Panitia_model->getById($this->Peserta_model->getById($id)['id_panitia']);
		$data['contents'] = 'admin/peserta/cetak'; 
		$this->load->view('templates/admin/index', $data);

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
		$data['jurusan_data'] = $this->Jurusan_model->daftarJurusan();
		$data['panitia_data'] = $this->Panitia_model->getPanitia();
		$data['jadwal_data'] = $this->Jadwal_model->daftarjadwal();
		$data['peserta'] = $this->Peserta_model->getById($id);
		$data['contents'] = 'admin/peserta/edit'; 
		$this->load->view('templates/admin/index', $data);
	}

	public function read($id){
		$data['peserta'] = $this->Peserta_model->getById($id);
		$data['jurusan'] = $this->Jurusan_model->getById($this->Peserta_model->getById($id)['id_jurusan']);
		$data['jurusan2'] = $this->Jurusan_model->getById($this->Peserta_model->getById($id)['id_jurusan2']);
		$data['contents'] = 'admin/peserta/read'; 
		$this->load->view('templates/admin/index', $data);
	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$this->Peserta_model->hapus($id);
		redirect('peserta/index');

	}



}
