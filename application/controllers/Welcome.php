<?php
 
class Welcome extends CI_Controller {
	function __construct(){
		parent ::__construct();
	}

	//untuk admin
	public function index(){
		$data['contents'] = 'admin/dashboard';
		// $data['kelompok_data'] = $this->Welcome_model->daftarPeserta();
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

	//++__

}
