<?php 

	defined('BASEPATH') OR exit ('No direct script access allowed');

	class Home_model extends CI_Model {

		public function daftarPeserta(){
			return $this->db->get('peserta')->result();
		}

		public function daftarSoal(){
			return $this->db->get('soal')->result();
		}
		

}