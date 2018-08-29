<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model {

	public function daftarLaporan(){
		return $this->db->get('laporan')->result();
	}
	
	public function insert(){
		$terdaftar = $this->input->post('terdaftar');
		$selesai_ujian = $this->input->post('selesai_ujian');
		$lulus = $this->input->post('lulus');
		$tidak_lulus = $this->input->post('tidak_lulus');
	
	$data = array(
					'terdaftar'=>$terdaftar,
					'selesai_ujian'=>$selesai_ujian,
					'lulus'=>$lulus,
					'tidak_lulus'=>$tidak_lulus,
					);
	$this->db->insert('laporan', $data);
	
	}

	public function getById($id){
		return $query = $this->db->query("SELECT * FROM laporan WHERE id='$id' ")->row_array();

	}

	public function edit(){
		$id = $this->input->post('id');
		$terdaftar = $this->input->post('terdaftar');
		$selesai_ujian = $this->input->post('selesai_ujian');
		$lulus = $this->input->post('lulus');
		$tidak_lulus = $this->input->post('tidak_lulus');

		$data = array(
					'terdaftar'=>$terdaftar,
					'selesai_ujian'=>$selesai_ujian,
					'lulus'=>$lulus,
					'tidak_lulus'=>$tidak_lulus,
		);
		$this->db->where('id',$id);
		$this->db->update('laporan', $data);
	}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('laporan');
	}
}
