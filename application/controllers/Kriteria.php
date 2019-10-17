<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {

		function __construct()
	{
		parent::__construct();
		$this->load->model('Kriteria_model');
		
	}
	public function index()
	{
		// $data['kriteria']=$this->Kriteria_model->getdata();

		$this->load->view('admin/header');
		$this->load->view('admin/kriteria');
	}

	public function getData()
	{
		echo json_encode($this->Kriteria_model->getdata());
	}

	public function nilai_bobot(){
		$data['kriteria']=$this->Kriteria_model->getdata();
		$data['bobot']=$this->Kriteria_model->bobot();


		$this->load->view('admin/header');
		$this->load->view('admin/bobot_kriteria',$data);
	}

	public function new()
	{
		$kriteria = $this->input->post('kriteria');
		$keterangan = $this->input->post('keterangan');
		$batas = $this->input->post('batas');
		$result = $this->Kriteria_model->new($kriteria,$keterangan,$batas);
		echo json_encode($result);
	}

	public function update()
	{
		$id = $this->input->post('id');
		$kriteria = $this->input->post('kriteria');
		$keterangan = $this->input->post('keterangan');
		$batas = $this->input->post('batas');
		$result = $this->Kriteria_model->update($id,$kriteria,$keterangan,$batas);
		echo json_encode($result);
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$result = $this->Kriteria_model->delete($id);
		echo json_encode($result);
	}

	public function editBobot(){
		$this->Kriteria_model->editBobot();
		redirect('Kriteria/nilai_bobot');
	}

	
}
