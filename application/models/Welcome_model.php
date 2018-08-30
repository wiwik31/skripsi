<?php 

	defined('BASEPATH') OR exit ('No direct script access allowed');

	class Welcome_model extends CI_Model {

		public function daftarPeserta(){
			return $this->db->get('peserta')->result();
		}


}