<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function login($username, $password){
		$query= $this->db->query("select *  from user where username='".$username."' and password = '".$password."'");
	    return $query->result();
	}	

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */