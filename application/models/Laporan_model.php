<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model {

	public function daftarLaporan(){
		return $this->db->get('laporan')->result();
	}

	// public function daftarpeserta){
	// 	return $this->db->get('peserta')->result();
	// }
	
	// public function daftarLaporan(){
	// 	return $this->db->query("SELECT *, laporan.id as pid FROM laporan JOIN peserta on peserta.id = laporan.id_peserta")->result_array();
	// 	// return $this->db->get('panitia')->result();
	// }
	public function daftarPeserta(){
		// return $this->db->get('peserta')->result();

	return $this->db->select('*, peserta.id AS pid ')
						->from('peserta')
						->join('jurusan', 'jurusan.id = peserta.id_jurusan ')
						->join('panitia', 'panitia.id = peserta.id_panitia ')
						->join('jadwal', 'jadwal.id = peserta.id_jadwal ')
						->order_by('peserta.id', 'DESC')
						->get()
						->result_array();
				}	
		

	public function daftarUjian(){
			return $this->db->select('*')
						->from('ujian as a')
						->join('peserta as b', 'b.id=a.id_peserta')
						->get()
						->result();
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
