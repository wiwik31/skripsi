<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Soal_model'); //load model soal
		$this->load->model('Matauji_model');
		$this->load->model('Ujian_model');
	}




	public function online(){
		$id_peserta = $this->session->userdata('id_peserta');

		//ini mengecek dua hal
		//  jika peserta sudah ikut ujian, maka tdk akan bisa lagi ikut ujian
		$check_peserta = $this->db->query("SELECT  a.id_peserta  from ujian a where id_peserta='$id_peserta' ")->result();
		if ($check_peserta) {
			$this->session->set_flashdata('error', 'Maaf, Anda sudah melakukan ujian. Silahkan tunggu pemberitahuan selanjutnya.');
			redirect('login_peserta/dashboard');
		}

		//METODE LCM
		//Batas soal yang tampil
		$jumlah = $this->db->query("SELECT * FROM soal ")->result();
		//Untuk setting soal nanti
		//    $j_tampil = $this->db->query("SELECT * from tbl_settingsoal")->row();
		$j_tampil = 30;

		//Ketentuan
		$m = count($jumlah);
		$a = 1;
		$c = 7;
		$xn = 6;

		$soal_data = array();
		for ($i=1; $i <= $j_tampil; $i++) {
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
		// echo "<pre>";
		// var_dump($soal_data);
		// echo "</pre>";
		// exit;

		$data = array('data' =>$soal_data);
		$data['contents'] = 'peserta/soal';
		$data['title'] = 'Ujian Online | Peserta';
		$this->load->view('templates/peserta/app', $data);
	

	}

	public function cekJawaban(){
		$id_peserta = $this->session->userdata('id_peserta');

		// $j_tampil = $this->db->query("SELECT * from tbl_settingsoal")->row();
		$j_tampil = 30;
		$pilihan = $this->input->post('pilihan');
		$id_soal = $this->input->post('id');
		$skor = 0;
		$benar = 0;
		$salah = 0;
		$kosong = 0;

		// var_dump($id_soal);exit;

		for ($i=0; $i < $j_tampil ; $i++) {
			$nomor =$id_soal[$i];
			if (!empty($pilihan[$nomor])) {
				$jawaban = $pilihan[$nomor];
				$check = $this->db->query(" SELECT * FROM soal WHERE id = '$nomor' AND jawaban= '$jawaban' ")->result();
				if ($check) {
					$benar++;
				}else{
					$salah++;
				}
			}else{
				$kosong++;
			}
		}

		// $jum_soal = $this->Soal_model->get_all();
		//rumus skor
		$skor = $benar / $j_tampil * 100;
		$nilai = number_format($skor, 1);
		$status = 0;
		if ($nilai >= 70) {
			$status = '1';
		}else{
			$status = '0';
		}

		$data = array(
				'id_peserta' => $id_peserta,
				'j_benar' => $benar,
				'j_salah' => $salah,
				'nilai' => $nilai,
				'status' => $status,
		);
		
		// var_dump($data);exit;
		$this->Ujian_model->insert($data);
		$this->session->set_flashdata('success', 'Terimakasih, Silahkan menghubungi panitia untuk mencetak hasil ujian.');
		redirect('login_peserta/dashboard');


        
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

        $data['matauji'] = $this->Matauji_model->daftarMatauji();
		$data['contents'] = 'admin/soal/create';
		$this->load->view('templates/admin/index', $data);


	}

	public function edit(){

		if (isset($_POST['submit'])){
			$this->Soal_model->edit();
			redirect('soal/index');
		}


		$id=$this->uri->segment(3);
        $data['matauji_data'] = $this->Matauji_model->daftarMatauji();
		$data['id_matauji'] = $this->Soal_model->getById($id);
        // var_dump($this->Soal_model->getById($id));exit;
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
