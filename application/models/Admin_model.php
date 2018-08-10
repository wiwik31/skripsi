<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function daftarAdmin(){
		return $this->db->get('admin')->result();
	}
	
	public function insert(){
		$nama_admin = $this->input->post('nama_admin');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$image = $this->input->post('image');
		$status = $this->input->post('status');
	
	$data = array(
					'nama_admin'=>$nama_admin,
					'email'=>$email,
					'username'=>$username,
					'password'=>$password,
					'image'=>$image,
					'status'=>$status,
			);
	$this->db->insert('admin', $data);
	
	}

	public function getById($id){
		return $query = $this->db->query("SELECT * FROM admin WHERE id='$id' ")->row_array();

	}

	public function edit(){
		$id = $this->input->post('id');
		$nama_admin = $this->input->post('nama_admin');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$image = $this->input->post('image');
		$status = $this->input->post('status');

		$data = array(
					'nama_admin'=>$nama_admin,
					'email'=>$email,
					'username'=>$username,
					'password'=>$password,
					'image'=>$image,
					'status'=>$status,
		);
		$this->db->where('id',$id);
		$this->db->update('admin', $data);
	}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('admin');
	}
}
