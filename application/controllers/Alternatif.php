<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif extends CI_Controller {

		function __construct()
	{
		parent::__construct();
		$this->load->model('Alternatif_model');
		
	}

	public function index()
	{
		$data['alternatif']=$this->Alternatif_model->getdata();

		$this->load->view('admin/header');
		$this->load->view('admin/alternatif',$data);
	}
	public function getData()
	{
		echo json_encode($this->Alternatif_model->getdata());
	}
	public function addAlternatif(){
			$this->load->view('admin/header');
		$this->load->view('admin/add_alternatif');
	}
	public function save(){
		$this->Alternatif_model->savedata();
		redirect('Alternatif');
		
	} 

	public function new()
	{
		
		$result = $this->Alternatif_model->new();
		echo json_encode($result);
	}

	public function update()
	{
		$result = $this->Alternatif_model->update();
		echo json_encode($result);
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$result = $this->Alternatif_model->delete($id);
		echo json_encode($result);
	}

	
}