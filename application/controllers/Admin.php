<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Admin_model'); //load model Admin
	}
	
	public function index()
	{
		$data['contents'] = 'admin/admin/list'; 
		$data['kelompok_data'] = $this->Admin_model->daftarAdmin();
		$this->load->view('templates/admin/index', $data);
	}

	public function create()
	{
		if (isset($_POST['submit'])){
			$this->Admin_model->insert();
			redirect('admin/index');
		}
		
		$data['contents'] = 'admin/admin/create'; 
		$this->load->view('templates/admin/index', $data);


	}

	public function edit(){
		if (isset($_POST['submit'])){
			$this->Admin_model->edit();
			redirect('admin/index');
		}

		$id=$this->uri->segment(3);
		$data['admin'] = $this->Admin_model->getById($id);
		$data['contents'] = 'admin/admin/edit'; 
		$this->load->view('templates/admin/index', $data);
	}

	public function hapus(){
		$id=$this->uri->segment(3);
		$this->Admin_model->hapus($id);
		redirect('admin/index');

	}

}
