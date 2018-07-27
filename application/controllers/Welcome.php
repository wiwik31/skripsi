<?php
 
class Welcome extends CI_Controller {
	function __construct(){
		parent ::__construct();
	}

	public function home(){
		$this->load->view('templates/index');
	}

	public function index()
	{
		$this->load->view('templates/index');
	}
}
