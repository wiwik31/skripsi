<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Ujian_model'); //load model Mataujian
		$this->load->model('Laporan_model'); //load model Mataujian
		$this->load->model('Peserta_model'); //load model Peserta
		$this->load->model('Admin_model'); //load model Peserta

	}

	function checkHasil($id){
	 	$check = $this->db->query(" SELECT * FROM ujian WHERE id_peserta = '$id' ")->row();
	 	if (!$check) {
	 		return 'gaada';
	 	}

	 	$peserta = $this->db->query("SELECT * FROM peserta where id='$id' ")->row();

		$arr = array(); 
	  	if ($check->nilai >=50) {
			$checkJurusan = $this->db->query("SELECT * FROM jurusan WHERE id ='$peserta->id_jurusan' ")->row();
	  		$arr = array(
	  			'nilai'=>$check->nilai,
	  			'jurusan'=> $checkJurusan->jurusan
	  		);
	    }else{
	    	$checkJurusan = $this->db->query("SELECT * FROM jurusan WHERE id ='$peserta->id_jurusan2' ")->row();
	  		$arr =array(
	  			'nilai'=>$check->nilai,
	  			'jurusan'=> $checkJurusan->jurusan
	  		);
	    }

	    // var_dump(array('hasil'=>$arr));exit;

	    return $arr;
		
	}

	public function index()
	{
		$data = array(
					'contents' => 'admin/laporan/list',
					'peserta' => $this->db->get('peserta')->result(),
					'ujian' => $this->db->get('ujian')->result(),
					'jadwal' => $this->db->get('jadwal')->result(),
					'soal' => $this->db->get('soal')->result(),
					'panitia' => $this->db->get('panitia')->result(),
					'admin' => $this->db->get('admin')->result(),
				);

		$data['kelompok_data'] = $this->Laporan_model->daftarPeserta();
		$this->load->view('templates/admin/index', $data);
	}



	public function create()
	{
		if (isset($_POST['submit'])){
			$this->Laporan_model->insert();
			redirect('laporan/index');
		}
		
		$data['contents'] = 'admin/laporan/create'; 
		$this->load->view('templates/admin/index', $data);


	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Laporan_model->edit();
			redirect('laporan/index');
		}

		$id=$this->uri->segment(3);
		$data['laporan'] = $this->Laporan_model->getById($id);
		$data['contents'] = 'admin/laporan/edit'; 
		$this->load->view('templates/admin/index', $data);
	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$this->Laporan_model->hapus($id);
		redirect('laporan/index');

	}

}
