<?php 

	defined('BASEPATH') OR exit ('No direct script access allowed');

	class Jurusan_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->model('Jurusan_model');
		}

		public function daftarJurusan(){
			return $this->db->get('jurusan')->result();
		}

		public function index(){
			$this->load->view('templates/admin/index');
		}

		public function insert(){
			$kode = $this->input->post('kode');
			$nama = $this->input->post('nama');
			$jumlah_peserta = $this->input->post('jumlah_peserta');

			$data = array(
				'kode' => $kode,
				'nama' => $nama,
				'jumlah_peserta' => $jumlah_peserta,
			);

			$this->db->insert('jurusan', $data);

		}

		public function getById($id){
		return $query = $this->db->query("SELECT * FROM jurusan WHERE id='$id' ")->row_array();

		}

		public function edit(){
		$id = $this->input->post('id');
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$jumlah_peserta = $this->input->post('jumlah_peserta');

		$data = array(
					'kode'=>$kode,
					'nama'=>$nama,
					'jumlah_peserta'=>$jumlah_peserta,
		);
		$this->db->where('id',$id);
		$this->db->update('jurusan', $data);
		}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('jurusan');
	}
		
}