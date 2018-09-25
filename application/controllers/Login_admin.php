<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Login_admin extends CI_Controller {
	function __construct(){
		parent ::__construct();
		$this->load->model('Login_model'); //load model login

	}

	public function index()
	{
		$this->load->view('templates/login/login');
	}

	public function login(){
		if (isset($_POST['submit'])){
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$check = $this->Login_model->checkLogin($username,$password);

			if (!$check){
				redirect('Login_admin');
			}else{
				$data = array(
					'username' => $username,
					'password' => $password,
					'is_login' => TRUE,
				);
				$this->session->set_userdata($data);
				redirect('Welcome');
			}
		}
	}

	public function logout(){
		$data = array('username','password','is_login');
		$this->session->unset_userdata($data);
		redirect('Login_admin/index');

	}
}
