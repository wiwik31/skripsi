<?php

class Welcome extends CI_Controller {
	function __construct(){
		parent ::__construct();
		$this->load->model(array('Soal_model', 'Jurusan_model', 'Jadwal_model', 'Matauji_model', 'Peserta_model'));
	}

	//untuk admin
	public function index(){

		$data = array(
					'contents' => 'admin/dashboard',
					'peserta' => $this->db->get('peserta')->result(),
					'ujian' => $this->db->get('ujian')->result(),
					'jadwal' => $this->db->get('jadwal')->result(),
					'matauji' => $this->db->get('matauji')->result(),
				);

		$this->load->view('templates/admin/index',$data);
	}

	//untuk Peserta
	public function peserta(){
		$data['contents'] = 'peserta/dashboard';
		$this->load->view('templates/peserta/index',$data);
	}

	public function kontak(){
		$data['contents'] = 'peserta/kontak';
		$this->load->view('templates/peserta/index',$data);
	}

	public function profil(){
		$data['contents'] = 'peserta/profil'; 
		$this->load->view('templates/peserta/app', $data);

}
