<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria_model extends CI_Model {

	public function getData()
	{
		$query=$this->db->get('kriteria');
		return $query->result();
	}

	public function bobot(){
	$query=$this->db->query("SELECT m.id_perbandingan, m.id_kriteria1, k.keterangan as kriteria1, m.id_kriteria2, t.keterangan as kriteria2, m.nilai from matriks_perbandingan as m inner join kriteria as k on k.id_kriteria=m.id_kriteria1 inner join kriteria as t on t.id_kriteria=m.id_kriteria2 ");
		return $query->result();
	}
}