<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	public function checkLogin($username, $password)
	{
		return $this->db->query(" SELECT * FROM admin WHERE username='$username' AND password='$password' ")->row();
	}

	public function checkLoginpeserta($username, $password)
	{
		return $this->db->query(" SELECT * FROM peserta WHERE username='$username' AND password='$password' ")->row();
	}

}
