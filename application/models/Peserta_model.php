<?php 

	defined('BASEPATH') OR exit ('No direct script access allowed');

	class Peserta_model extends CI_Model {
		// function __construct(){
		// 	parent::__construct();
		// 	$this->load->model('Peserta_model');
		// }

		public function daftarPeserta(){
		//RELASIKAN TABEL

		return $this->db->select('*, peserta.id AS pid ')
						->from('peserta')
						->join('jurusan', 'jurusan.id = peserta.id_jurusan ')
						->join('panitia', 'panitia.id = peserta.id_panitia ')
						->join('jadwal', 'jadwal.id = peserta.id_jadwal ')
						->order_by('peserta.id', 'DESC')
						->get()
						->result_array();


		// return $this->db->query("SELECT * FROM peserta JOIN jurusan on jurusan.id = peserta.id_jurusan")->result();
		// return $this->db->query("SELECT * FROM peserta JOIN panitia on panitia.id = peserta.id_panitia")->result();

		}

		public function getlistpeserta(){
			return $this->db->get('peserta');
		}

		public function getlistjurusan(){
			return $this->db->get('jurusan');
		}

		public function getlistpanitia(){
			return $this->db->get('panitia');
		}

		public function getlistjadwal(){
			return $this->db->get('jadwal');
		}

		public function insert(){
			$kode_pendaftaran = $this->input->post('kode_pendaftaran');
			$nama_peserta = $this->input->post('nama_peserta');
			$id_jurusan = $this->input->post('id_jurusan');
			$id_jurusan2 = $this->input->post('id_jurusan2');
			$id_panitia = $this->input->post('id_panitia');
			$id_jadwal = $this->input->post('id_jadwal');
			$jenkel = $this->input->post('jenkel');
			$tgl_lahir = $this->input->post('tgl_lahir');
			$alamat = $this->input->post('alamat');
			$no_telp = $this->input->post('no_telp');
			$email = $this->input->post('email');
			$username = $this->input->post('username');
			$tahun = $this->input->post('tahun');
			$password = md5($this->input->post('password'));

			$data = array(
				'kode_pendaftaran' => $kode_pendaftaran,
				'nama_peserta' => $nama_peserta,
				'id_jurusan' => $id_jurusan,
				'id_jurusan2' => $id_jurusan2,
				'id_panitia' => $id_panitia,
				'id_jadwal' => $id_jadwal,
				'jenkel' => $jenkel,
				'tgl_lahir' => $tgl_lahir,
				'alamat' => $alamat,
				'no_telp' => $no_telp,
				'email' => $email,
				'username' => $username,
				'tahun' => $tahun,
				'password' => $password,
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
		$id_jurusan2 = $this->input->post('id_jurusan2');
		$id_panitia = $this->input->post('id_panitia');
		$id_jadwal = $this->input->post('id_jadwal');
		$jenkel = $this->input->post('jenkel');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$tahun = $this->input->post('tahun');

		$data = array(
					'kode_pendaftaran' => $kode_pendaftaran,
					'nama_peserta' => $nama_peserta,
					'id_jurusan' => $id_jurusan,
					'id_jurusan2' => $id_jurusan2,
					'id_panitia' => $id_panitia,
					'id_jadwal' => $id_jadwal,
					'jenkel' => $jenkel,
					'tgl_lahir' => $tgl_lahir,
					'alamat' => $alamat,
					'no_telp' => $no_telp,
					'email' => $email,
					'username' => $username,
					'password' => $password,
					'tahun' => $tahun,
		);
		$this->db->where('id',$id);
		$this->db->update('peserta', $data);
		}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('peserta');
	}

	
}