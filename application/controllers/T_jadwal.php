<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class T_jadwal extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('T_jadwal_model'); //load model jadwal
	}
	
	public function index(){
		$data['contents'] = 'peserta/jadwal'; 
		$data['kelompok_data'] = $this->T_jadwal_model->daftarJadwal();
		$this->load->view('templates/peserta/index', $data);
	}

	

}
