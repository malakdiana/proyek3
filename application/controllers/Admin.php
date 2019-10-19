<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in')==TRUE) 
		{
			// redirect('Dc_Controller/index');
		}else{	
			redirect('Login');
		}
	}
	
	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/index');
	}

	
}
