<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahun_model extends CI_Model {

	public function daftarTahun(){
		return $this->db->get('tahun')->result();
	}

	public function insert(){
		$tahun = $this->input->post('tahun');

	$data = array(
					'tahun'=>$tahun,
			);
	$this->db->insert('tahun', $data);

	}

	public function getById($id){
		return $query = $this->db->query("SELECT * FROM tahun WHERE id='$id' ")->row_array();

	}

	public function edit(){
		$id = $this->input->post('id');
		$tahun = $this->input->post('tahun');

		$data = array(
					'tahun'=>$tahun,
		);
		$this->db->where('id',$id);
		$this->db->update('tahun', $data);
	}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('tahun');
	}

	public function getlisttahun(){
		return $this->db->get('tahun');
	}
}
