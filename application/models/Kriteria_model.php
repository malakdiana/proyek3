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

	public function new($kriteria,$keterangan,$batas)
	{
		$data = array(
            'kriteria'               =>$kriteria,
            'keterangan'       =>$keterangan,
            'batas_max'       =>$batas,
        );

        return $this->db->insert('kriteria', $data);
	}	

	public function update($id,$kriteria,$keterangan,$batas)
	{
		
		$data = array(
            'kriteria'               =>$kriteria,
            'keterangan'       =>$keterangan,
            'batas_max'       =>$batas,
        );
		$this->db->where('id_kriteria', $id);
        return $this->db->update('kriteria', $data);
	}

	public function delete($id)
	{
        $this->db->where('id_kriteria', $id);
        $result = $this->db->delete('kriteria');
        return $result;
	}
}