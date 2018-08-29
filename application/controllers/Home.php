<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Home_model'); //load model Admin
	}
	
	public function index(){
		$data['contents'] = 'peserta/home'; 
		$data['kelompok_data'] = $this->Home_model->daftarPeserta();
		$this->load->view('templates/peserta/index', $data);
	}

	public function ujian(){
		$data['contents'] = 'peserta/ujian';
		$data['kelompok_data'] = $this->Home_model->daftarSoal();
		$this->load->view('templates/peserta/index', $data);
	}
}
