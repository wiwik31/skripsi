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

	public function cekJawaban(){
        if (isset($_POST['submit'])) {
            $j_tampil = $this->db->query("SELECT * from tbl_settingsoal")->row();
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
                   $check = $this->db->query(" SELECT * FROM tbl_soal WHERE id_soal = '$nomor' AND jawaban= '$jawaban' ")->result();
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
            $status = '';
            if ($nilai >= 70) {
                $status = "Lulus";
            }else{
                $status = 'Tidak Lulus';
            }

            $data = array(
                    'id_peserta' => $this->session->userdata('id_peserta'),
                    'jumlah_benar' => $benar,
                    'jumlah_salah' => $salah,
                    'nilai' => $nilai,
                    'status' => $status,
            );
            $this->Ujian_model->insert($data);
            $this->session->set_flashdata('success', 'Terimakasih, Pemberitahuan kelulusan akan kami infokan melalui Email.');
            redirect('welcome');
            
            
        }
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
