<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif_model extends CI_Model {

	public function getData()
	{
		$query=$this->db->get('alternatif');
		return $query->result();
	}
}