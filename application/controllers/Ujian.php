<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Ujian_model'); //load model Mataujian
		$this->load->model('Peserta_model'); //load model Mataujian
		$this->load->model('Jurusan_model'); //load model Mataujian
		$this->load->model('Panitia_model'); //load model Mataujian
		$this->load->model('Jadwal_model'); //load model Mataujian
	}
	
	public function index()
	{
		$data['contents'] = 'admin/ujian/list'; 
		$data['kelompok_data'] = $this->Ujian_model->daftarUjian();
		$this->load->view('templates/admin/index', $data);
	}

	public function create()
	{
		if (isset($_POST['submit'])){
			$this->Ujian_model->insert();
			redirect('ujian/index');
		}
		
		$data['contents'] = 'admin/ujian/create'; 
		$this->load->view('templates/admin/index', $data);


	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Ujian_model->edit();
			redirect('ujian/index');
		}

		$id=$this->uri->segment(3);
		$data['ujian'] = $this->Ujian_model->getById($id);
		$data['contents'] = 'admin/ujian/edit'; 
		$this->load->view('templates/admin/index', $data);
	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$this->Ujian_model->hapus($id);
		redirect('ujian/index');

	}

	public function cetak($id){
		$data['hasil'] = $this->checkHasil($id);
		$data['peserta'] = $this->Peserta_model->getById($id);
		$data['jurusan'] = $this->Jurusan_model->getById($this->Peserta_model->getById($id)['id_jurusan']);
		$data['jurusan2'] = $this->Jurusan_model->getById($this->Peserta_model->getById($id)['id_jurusan2']);
		$data['jadwal'] = $this->Jadwal_model->getById($this->Peserta_model->getById($id)['id_jadwal']);
		$data['panitia'] = $this->Panitia_model->getById($this->Peserta_model->getById($id)['id_panitia']);
		$data['contents'] = 'admin/ujian/cetak'; 
		$this->load->view('templates/admin/index', $data);

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

}
