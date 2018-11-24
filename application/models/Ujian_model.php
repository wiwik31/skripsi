*<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian_model extends CI_Model {

	public function daftarUjian(){
		// return $this->db->get('ujian')->result();
		return $this->db->select('*')
						->from('ujian as a')
						->join('peserta as b', 'b.id=a.id_peserta')
						->get()
						->result();
	}
	
	public function insert($data){

	// 	$id_peserta = $this->input->post('id_peserta');
	// 	$id_panitia = $this->input->post('id_panitia');
	// 	$id_jadwal = $this->input->post('id_jadwal');
	// 	$j_benar = $this->input->post('j_benar');
	// 	$j_salah = $this->input->post('j_salah');
	// 	$nilai = $this->input->post('nilai');
	// 	$status = $this->input->post('status');
	
	
	// $data = array(
	// 				'id_peserta'=>$id_peserta,
	// 				'id_panitia'=>$id_panitia,
	// 				'id_jadwal'=>$id_jadwal,
	// 				'j_benar'=>$j_benar,
	// 				'j_salah'=>$j_salah,
	// 				'nilai'=>$nilai,
	// 				'status'=>$status,
	// 		);
	$this->db->insert('ujian', $data);
	
	}

	public function getById($id){
		return $query = $this->db->query("SELECT * FROM ujian WHERE id_ujian='$id' ")->row_array();

	}
	
	public function edit(){
		$id = $this->input->post('id');
		$id_peserta = $this->input->post('id_peserta');
		$id_panitia = $this->input->post('id_panitia');
		$id_jadwal = $this->input->post('id_jadwal');
		$j_benar = $this->input->post('j_benar');
		$j_salah = $this->input->post('j_salah');
		$nilai = $this->input->post('nilai');
		$status = $this->input->post('status');

		$data = array(
					'id_peserta'=>$id_peserta,
					'id_panitia'=>$id_panitia,
					'id_jadwal'=>$id_jadwal,
					'j_benar'=>$j_benar,
					'j_salah'=>$j_salah,
					'nilai'=>$nilai,
					'status'=>$status,
		);
		$this->db->where('id',$id);
		$this->db->update('ujian', $data);
	}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('ujian');
	}
}
