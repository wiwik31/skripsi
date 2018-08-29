<?php 

	defined('BASEPATH') OR exit ('No direct script access allowed');

	class Soal_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->model('Soal_model');
		}

		public function matauji(){
			return $this->db->query("SELECT * FROM soal JOIN matauji on matauji.id = soal.id_matauji")->result();
		}

		public function daftarSoal(){
			return $this->db->query("SELECT * FROM soal JOIN matauji on matauji.id = soal.id_matauji")->result();
			return $this->db->get('soal')->result();
		}

		public function index(){
			$this->load->view('templates/admin/index');
		}

		public function insert(){
			$id_matauji = $this->input->post('id_matauji');
			$pertanyaan = $this->input->post('pertanyaan');
			$a = $this->input->post('a');
			$b = $this->input->post('b');
			$c = $this->input->post('c');
			$d = $this->input->post('d');
			$e = $this->input->post('e');
			$jawaban = $this->input->post('jawaban');
			

			$data = array(
				'id_matauji' => $id_matauji,
				'pertanyaan' => $pertanyaan,
				'a' => $a,
				'b' => $b,
				'c' => $c,
				'd' => $d,
				'e' => $e,
				'jawaban' => $jawaban,
				
			);

			$this->db->insert('soal', $data);

		}

		public function getById($id){
		return $query = $this->db->query("SELECT * FROM soal WHERE id='$id' ")->row_array();

		}

		public function edit(){
		$id = $this->input->post('id');
		$id_matauji = $this->input->post('id_matauji');
			$pertanyaan = $this->input->post('pertanyaan');
			$a = $this->input->post('a');
			$b = $this->input->post('b');
			$c = $this->input->post('c');
			$d = $this->input->post('d');
			$e = $this->input->post('e');
			$jawaban = $this->input->post('jawaban');

		$data = array(
					'id_matauji' => $id_matauji,
					'pertanyaan' => $pertanyaan,
					'a' => $a,
					'b' => $b,
					'c' => $c,
					'd' => $d,
					'e' => $e,
					'jawaban' => $jawaban,
		);
		$this->db->where('id',$id);
		$this->db->update('soal', $data);
		}

	public function hapus($id){
		$this->db->where('id', $id);
		$this->db->delete('soal');
	}

	public function getlistmatauji(){
		return $this->db->get('matauji');
	}

	function get_list_by_id($id){
		$sql = "SELECT  id, id_matauji, pertanyaan, a, b, c, d, e , jawaban FROM id in (".$id.") ";
		return $this->query($sql);
	}

	function get_by_matauji($matauji){
		$this->db->select('*');
		$this->db->from('soal');
		$this->db->where('id_matauji', $matauji);

		return $this->db->get();
	}

	public function getlistsoal(){
	return $this->db->get('soal');

	}
		
}