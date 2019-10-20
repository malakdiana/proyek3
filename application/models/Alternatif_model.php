<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif_model extends CI_Model {

	public function getData()
	{
		$query=$this->db->get('alternatif');
		return $query->result();
	}


	public function new(){

		   $d = $this->input->post('investasi');
             $d = str_replace('Rp', '', $d);
              $d = str_replace('.', '', $d);
               $d = str_replace(' ', '', $d);

                $e =$this->input->post('nilai');
             $e = str_replace('Rp', '', $d);
              $e = str_replace('.', '', $d);
               $e = str_replace(' ', '', $d);

                 $f =$this->input->post('bahan');
             $f = str_replace('Rp', '', $d);
              $f = str_replace('.', '', $d);
               $f = str_replace(' ', '', $d);


		   $data = array(
       
		'nama_alternatif_industri' => $this->input->post('alternatif'),
		'desa' => $this->input->post('desa'),
		'tenaga_kerja' => $this->input->post('tenaga'),
		'alias' => $this->input->post('alias'),
		'investasi' => $d,
		'kapasitas_produksi' => $this->input->post('kapasitas'),
		'nilai_produksi' => $e,
		'bahan_baku' => $f
	);
		      $this->db->insert('alternatif', $data);

	}

	public function update(){

		   $d = $this->input->post('investasi');
             $d = str_replace('Rp', '', $d);
              $d = str_replace('.', '', $d);
               $d = str_replace(' ', '', $d);

                $e =$this->input->post('nilai');
             $e = str_replace('Rp', '', $d);
              $e = str_replace('.', '', $d);
               $e = str_replace(' ', '', $d);

                 $f =$this->input->post('bahan');
             $f = str_replace('Rp', '', $d);
              $f = str_replace('.', '', $d);
               $f = str_replace(' ', '', $d);


		   $data = array(
       
		'nama_alternatif_industri' => $this->input->post('alternatif'),
		'desa' => $this->input->post('desa'),
		'tenaga_kerja' => $this->input->post('tenaga'),
		'alias' => $this->input->post('alias'),
		'investasi' => $d,
		'kapasitas_produksi' => $this->input->post('kapasitas'),
		'nilai_produksi' => $e,
		'bahan_baku' => $f
	);
		    $this->db->where('id_alternatif', $this->input->post('id'));
        return $this->db->update('alternatif', $data);

	}
	public function delete($id)
	{
        $this->db->where('id_alternatif', $id);
        $result = $this->db->delete('alternatif');
        return $result;
	}

	public function import($data)
	{
		return $this->db->insert_batch('alternatif',$data);
	}
}