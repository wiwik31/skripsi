<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panitia_model extends CI_Model {

	public function daftarPanitia(){
		return $this->db->get('panitia')->result();
	}
	
	public function insert(){
		$id_jadwal = $this->input->post('id_jadwal');
		$nama_panitia = $this->input->post('nama_panitia');
		$status = $this->input->post('status');
	
	$data = array(
					'id_jadwal'=>$id_jadwal,
					'nama_panitia'=>$nama_panitia,
					'status'=>$status,
			);
	$this->db->insert('panitia', $data);
	
	}

	public function getById($id){
		return $query = $this->db->query("SELECT * FROM panitia WHERE id='$id' ")->row_array();

	}

	public function edit(){
		$id = $this->input->post('id');
		$id_jadwal = $this->input->post('id_jadwal');
		$nama_panitia = $this->input->post('nama_panitia');
		$status = $this->input->post('status');

		$data = array(
					'id_jadwal'=>$id_jadwal,
					'nama_panitia'=>$nama_panitia,
					'status'=>$status,
		);
		$this->db->where('id',$id);
		$this->db->update('panitia', $data);
	}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('panitia');
	}
}
