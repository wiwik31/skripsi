<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matauji_model extends CI_Model {

	public function daftarMatauji(){
		return $this->db->get('matauji')->result();
	}
	
	public function insert(){
		$nama_matauji = $this->input->post('nama_matauji');
		$status = $this->input->post('status');
	
	$data = array(
					'nama_matauji'=>$nama_matauji,
					'status'=>$status,
			);
	$this->db->insert('matauji', $data);
	
	}

	public function getById($id){
		return $query = $this->db->query("SELECT * FROM matauji WHERE id='$id' ")->row_array();

	}

	public function edit(){
		$id = $this->input->post('id');
		$nama_matauji = $this->input->post('nama_matauji');
		$status = $this->input->post('status');

		$data = array(
					'nama_matauji'=>$nama_matauji,
					'status'=>$status,
		);
		$this->db->where('id',$id);
		$this->db->update('matauji', $data);
	}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('matauji');
	}
}
