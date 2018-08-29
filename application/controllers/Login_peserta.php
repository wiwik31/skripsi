<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Login_peserta extends CI_Controller {
	function __construct(){
		parent ::__construct();
		$this->load->model('Login_model'); //load model login
		
	}

	public function index()
	{
		$data['contents'] = 'peserta/login'; 
		// $data['kelompok_data'] = $this->Home_model->daftarPeserta();
		$this->load->view('templates/peserta/index', $data);
	}


	public function dashboard()
	{
		//INI UNTUK YANG SUDAH LOGIN DIARAHKAN KESINI
		$data['contents'] = 'peserta/dashboard'; 
		// $data['kelompok_data'] = $this->Home_model->daftarPeserta();
		//Untuk templates
		$this->load->view('templates/peserta/dashboard', $data);
	}

	public function login(){
		if (isset($_POST['submit'])){
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$check = $this->Login_model->checkLoginpeserta($username,$password);

			if (!$check){
				redirect('Login_peserta');
			}else{
				$data = array(
					'username' => $username,
					'password' => $password,
					// 'is_login' => TRUE,
				);
				$this->session->set_userdata($data);
				//ini pemanggilan function dashboard nah
				redirect('dashboard');
			}
		}
	}



	public function logout(){
		$data = array('username','password','is_login');
		$this->session->unset_userdata($data);
		redirect('Login_peserta/index');	
	}
}
