<?php 

	defined('BASEPATH') OR exit ('No direct script access allowed');

	class Peserta_model extends CI_Model {
		// function __construct(){
		// 	parent::__construct();
		// 	$this->load->model('Peserta_model');
		// }

		public function jurusan(){
		//RELASIKAN TABEL
		return $this->db->query("SELECT * FROM peserta JOIN jurusan on jurusan.id = peserta.id_jurusan")->result();

		}

		// public function jurusan($limit, $start  = 0, $q = NULL){
		// 	//RELASIKAN TABEL JURUSAN DENGAN PESERTA
		// 	$this->db->join('jurusan', 'jurusan.id = peserta.id_jurusan', $q);
		// 	$this->db->order_by('id','DESC');
		// 	$this->db->limit($limit, $start);

		// 	return $this->db->get('peserta')->result();
		// }

		public function daftarPeserta(){
			return $this->db->get('peserta')->result();
		}

		public function index(){
			$this->load->view('templates/admin/index');
		}

		public function insert(){
			$kode_pendaftaran = $this->input->post('kode_pendaftaran');
			$nama_peserta = $this->input->post('nama_peserta');
			$id_jurusan = $this->input->post('id_jurusan');
			$id_panitia = $this->input->post('id_panitia');
			$id_jadwal = $this->input->post('id_jadwal');
			$jenkel = $this->input->post('jenkel');
			$tgl_lahir = $this->input->post('tgl_lahir');
			$alamat = $this->input->post('alamat');
			$no_telp = $this->input->post('no_telp');
			$email = $this->input->post('email');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$status = $this->input->post('status');

			$data = array(
				'kode_pendaftaran' => $kode_pendaftaran,
				'nama_peserta' => $nama_peserta,
				'id_jurusan' => $id_jurusan,
				'id_panitia' => $id_panitia,
				'id_jadwal' => $id_jadwal,
				'jenkel' => $jenkel,
				'tgl_lahir' => $tgl_lahir,
				'alamat' => $alamat,
				'no_telp' => $no_telp,
				'email' => $email,
				'username' => $username,
				'password' => $password,
				'status' => $status,
			);

			$this->db->insert('peserta', $data);

		}

		public function getById($id){
		return $query = $this->db->query("SELECT * FROM peserta WHERE id='$id' ")->row_array();

		}

		public function edit(){
		$id = $this->input->post('id');
		$kode_pendaftaran = $this->input->post('kode_pendaftaran');
		$nama_peserta = $this->input->post('nama_peserta');
		$id_jurusan = $this->input->post('id_jurusan');
		$id_panitia = $this->input->post('id_panitia');
		$id_jadwal = $this->input->post('id_jadwal');
		$jenkel = $this->input->post('jenkel');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$status = $this->input->post('status');

		$data = array(
					'kode_pendaftaran' => $kode_pendaftaran,
					'nama_peserta' => $nama_peserta,
					'id_jurusan' => $id_jurusan,
					'id_panitia' => $id_panitia,
					'id_jadwal' => $id_jadwal,
					'jenkel' => $jenkel,
					'tgl_lahir' => $tgl_lahir,
					'alamat' => $alamat,
					'no_telp' => $no_telp,
					'email' => $email,
					'username' => $username,
					'password' => $password,
					'status' => $status,
		);
		$this->db->where('id',$id);
		$this->db->update('peserta', $data);
		}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('peserta');
	}

	public function getlistjurusan()
	{
		return $this->db->get('jurusan');
	}
		
}