<?php 

	defined('BASEPATH') OR exit ('No direct script access allowed');

	class T_jadwal_model extends CI_Model {

		public function daftarJadwal(){
			return $this->db->get('jadwal')->result();
		}

		// public function index(){
		// 	$this->load->view('templates/peserta/index');
		// }

		// public function getById($id){
		// return $query = $this->db->query("SELECT * FROM jadwal WHERE id='$id' ")->row_array();

		// }

		
}