<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panitia_model extends CI_Model {

	public function daftarPanitia(){
		return $this->db->query("SELECT * FROM panitia JOIN jadwal on jadwal.id = panitia.id_jadwal")->result();
		// return $this->db->get('panitia')->result();
	}
	public function getlistpanitia(){
		return $this->db->get('panitia');
	}

	public function getlistjadwal(){
		return $this->db->get('jadwal');
	}
	
	public function insert(){
		$id_jadwal = $this->input->post('id_jadwal');
		$nama_panitia = $this->input->post('nama_panitia');
	
	$data = array(
					'id_jadwal'=>$id_jadwal,
					'nama_panitia'=>$nama_panitia,
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

		$data = array(
					'id_jadwal'=>$id_jadwal,
					'nama_panitia'=>$nama_panitia,
		);
		$this->db->where('id',$id);
		$this->db->update('panitia', $data);
	}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('panitia');
	}


}
