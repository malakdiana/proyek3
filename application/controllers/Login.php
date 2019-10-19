<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		$this->load->view('login');		
	}

	public function cekLogin(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','username', 'trim|required');
		$this->form_validation->set_rules('password','password', 'trim|required|callback_cekDb');

		if($this->form_validation->run()== false){
			$this->load->view('login');
		}else{
			$session_data=$this->session->userdata('logged_in');
			redirect('Admin','refresh');
		}
	}

	public function cekDb($password)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		$username = $this->input->post('username');
		$password2=($this->input->post('password'));
		$result = $this->Login_model->login($username, $password2);
		// print_r($result);
		// die();
		if($result){
			$sess_array = array();

			foreach ($result as $row){
				$sess_array = array(
					'username'=>$row->username,
					'password'=>$row->password,
					'fullname'=>$row->fullname,
				);
				$this->session->set_userdata('logged_in',$sess_array);
			}

			return true;
		}else{
			$this->session->set_flashdata('gglLogin','<div class="alert alert-danger" role="alert">LOGIN GAGAL <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			return false;
		}
	}

	public function logout()
	{
			$this->session->unset_userdata('logged_in');
			// $this->session->session_destroy();
			echo "<script>alert('Logout Success') </script>";
			redirect('Login','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */