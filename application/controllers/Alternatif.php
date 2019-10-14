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
	public function addAlternatif(){
			$this->load->view('admin/header');
		$this->load->view('admin/add_alternatif');
	}

	
}