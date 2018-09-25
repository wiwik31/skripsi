<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Soal_model'); //load model soal
		$this->load->model('Matauji_model');
	}




	public function online(){
		//METODE LCM
		//Batas soal yang tampil
		$jumlah = $this->db->query("SELECT * FROM soal ")->result();
		//Untuk setting soal nanti
       //$j_tampil = $this->db->query("SELECT * from tbl_settingsoal")->row();

		//Ketentuan
		$m = count($jumlah);
		$a = 1;
		$c = 7;
		$xn = 6;

		$soal_data = array();
		for ($i=1; $i <= $j_tampil->jumlah_soal; $i++) {
            $r = rand(1, $m);
			//LCM
			$xn = ($a * $r +$c) % $m;
			if ($xn < 6){
				$xn = $m;
			}
			$soals = $this->db->query(" SELECT * FROM soal WHERE id ='$xn'")->result();

			foreach ($soals as $soal ) {
				$soal_data[] = $soal;
			}

		}

		$data = array('soal' =>$soal_data);
		$this->load->view('templates/peserta/index','peserta/soal', $data);

	}


	public function index()
	{
		$data['contents'] = 'admin/soal/list';
		$data['kelompok_data'] = $this->Soal_model->daftarSoal();
		$this->load->view('templates/admin/index', $data);

	}

	public function create(){
		if (isset($_POST['submit'])){
			$this->Soal_model->insert();
			redirect('soal/index');
		}

		$data['contents'] = 'admin/soal/create';
		$this->load->view('templates/admin/index', $data);


	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Soal_model->edit();
			redirect('soal/index');
		}

		$id=$this->uri->segment(3);
		$data['matauji'] = $this->Matauji_model->daftarMatauji();
		$data['soal'] = $this->Soal_model->getById($id);
		$data['contents'] = 'admin/soal/edit';
		$this->load->view('templates/admin/index', $data);
	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$this->Soal_model->hapus($id);
		redirect('soal/index');

	}

}
