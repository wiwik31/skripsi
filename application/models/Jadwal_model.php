<?php 

	defined('BASEPATH') OR exit ('No direct script access allowed');

	class Jadwal_model extends CI_Model {
		// function __construct(){
		// 	parent::__construct();
		// 	$this->load->model('Jadwal_model');
		// }

		public function daftarjadwal(){
			return $this->db->get('jadwal')->result();
		}

		public function index(){
			$this->load->view('templates/admin/index');
		}

		public function insert(){
			$jadwal = $this->input->post('jadwal');
			$waktu = $this->input->post('waktu');
			$tgl = $this->input->post('tgl');


			$data = array(
				'jadwal' => $jadwal,
				'waktu' => $waktu,
				'tgl' => $tgl,
				
			);

			$this->db->insert('jadwal', $data);

		}

		public function getById($id){
		return $query = $this->db->query("SELECT * FROM jadwal WHERE id='$id' ")->row_array();

		}

		public function edit(){
		$id = $this->input->post('id');
		$jadwal = $this->input->post('jadwal');
		$waktu = $this->input->post('waktu');
		$tgl = $this->input->post('tgl');


		$data = array(
					'jadwal' => $jadwal,
					'waktu' => $waktu,
					'tgl' => $tgl,

		);
		$this->db->where('id',$id);
		$this->db->update('jadwal', $data);
		}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('jadwal');
	}

	//UNTUK PESERTA
	public function t_jadwal(){
			return $this->db->get('jadwal')->result();
		

	}
		
}