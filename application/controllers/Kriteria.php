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
		$data['kriteria']=$this->Kriteria_model->getdata();

		$this->load->view('admin/header');
		$this->load->view('admin/kriteria',$data);
	}

	public function nilai_bobot(){
		$data['kriteria']=$this->Kriteria_model->getdata();
		$data['bobot']=$this->Kriteria_model->bobot();


		$this->load->view('admin/header');
		$this->load->view('admin/bobot_kriteria',$data);
	}

	
}
