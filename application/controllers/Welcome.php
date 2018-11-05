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
					'soal' => $this->db->get('soal')->result(),
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

<<<<<<< HEAD
	
=======
	public function profil(){
		$data['contents'] = 'peserta/profil'; 
		$this->load->view('templates/peserta/app', $data);
	}
>>>>>>> 0efe388b5d3232c34f67d4f19122203b4440480e

}
