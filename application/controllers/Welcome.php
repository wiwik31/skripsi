<?php
 
class Welcome extends CI_Controller {
	function __construct(){
		parent ::__construct();
	}

	//untuk admin
	public function index(){
		$data['contents'] = 'admin/dashboard';
		$this->load->view('templates/admin/index',$data);
	}

	//untuk Peserta
	public function peserta(){
		$data['contents'] = 'peserta/dashboard';
		$this->load->view('templates/peserta/index',$data);
	}

}
