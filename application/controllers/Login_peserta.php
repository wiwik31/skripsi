<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Login_peserta extends CI_Controller {
	function __construct(){
		parent ::__construct();
		$this->load->model('Login_model'); //load model login
		
	}

	public function index()
	{
		$this->load->view('peserta/login');
	}


	public function dashboard()
	{
		//INI UNTUK YANG SUDAH LOGIN DIARAHKAN KESINI
		$data['contents'] = 'peserta/dashboard'; 
		$data['title'] = 'Dashboard | Peserta '; 
		// $data['kelompok_data'] = $this->Home_model->daftarPeserta();
		//Untuk templates
		$this->load->view('templates/peserta/app', $data);
	}

	public function login(){
		if (isset($_POST['submit'])){
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$check = $this->Login_model->checkLoginpeserta($username,$password);

			if (!$check){
				$this->session->set_flashdata('error', 'Username atau Password anda salah. Silahkan coba lagi');
				redirect('Login_peserta');
			}else{
				$data = array(
					'username' => $username,
					'password' => $password,
					'id_peserta' => $check->id,
					// 'is_login' => TRUE,
				);
				$this->session->set_userdata($data);
				//ini pemanggilan function dashboard nah
				redirect('login_peserta/dashboard');
			}
		}
	}



	public function logout(){
		$data = array('username','password','is_login');
		$this->session->unset_userdata($data);
		redirect('Login_peserta/index');	
	}
}
