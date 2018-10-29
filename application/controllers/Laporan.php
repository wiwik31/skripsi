<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Laporan_model'); //load model Mataujian
	}
	
	public function index()
	{
		$data = array(
					'contents' => 'admin/laporan/list',
					'terdaftar' => $this->db->get('terdaftar')->result(),
					'selesai_ujian' => $this->db->get('selesai_ujian')->result(),
					'lulus' => $this->db->get('lulus')->result(),
					'tidak_lulus' => $this->db->get('tidak_lulus')->result(),
				);
		// $data['contents'] = 'admin/laporan/list'; 
		$data['kelompok_data'] = $this->Laporan_model->daftarLaporan();
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
