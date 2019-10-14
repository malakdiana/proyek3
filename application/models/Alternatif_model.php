<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif_model extends CI_Model {

	public function getData()
	{
		$query=$this->db->get('alternatif');
		return $query->result();
	}


	public function saveData(){

		   $d = $this->input->post('investasi');
             $d = str_replace('Rp', '', $d);
              $d = str_replace('.', '', $d);
               $d = str_replace(' ', '', $d);

                $e =$this->input->post('nilaiProduksi');
             $e = str_replace('Rp', '', $d);
              $e = str_replace('.', '', $d);
               $e = str_replace(' ', '', $d);

                 $f =$this->input->post('nilaibahan');
             $f = str_replace('Rp', '', $d);
              $f = str_replace('.', '', $d);
               $f = str_replace(' ', '', $d);


		   $data = array(
       
		'industri' => $this->input->post('industri'),
		'desa' => $this->input->post('desa'),
		'tenagaKerja' => $this->input->post('tenagaKerja'),
		'investasi' => $d,
		'produksi' => $this->input->post('produksi'),
		'nilaiProduksi' => $e,
		'nilaibahan' => $f
	);
		      $this->db->insert('alternatif', $data);

	}
}