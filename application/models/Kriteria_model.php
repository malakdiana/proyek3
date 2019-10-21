<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria_model extends CI_Model {

	public function getData()
	{
		$query=$this->db->get('kriteria');
		return $query->result();
	}

	public function bobot(){
	$query=$this->db->query("SELECT m.id_perbandingan, m.id_kriteria1, k.keterangan as kriteria1, m.id_kriteria2, t.keterangan as kriteria2, m.nilai , m.n_kriteria1, m.n_kriteria2 from matriks_perbandingan as m inner join kriteria as k on k.id_kriteria=m.id_kriteria1 inner join kriteria as t on t.id_kriteria=m.id_kriteria2 ");
 
		return $query->result();
	}
  public function arrayBobot(){
      $query=$this->db->query("SELECT m.id_perbandingan, m.id_kriteria1, k.keterangan as kriteria1, m.id_kriteria2, t.keterangan as kriteria2, m.nilai , m.n_kriteria1, m.n_kriteria2 from matriks_perbandingan as m inner join kriteria as k on k.id_kriteria=m.id_kriteria1 inner join kriteria as t on t.id_kriteria=m.id_kriteria2 ");
  $dataBobot = array();
  foreach ($query->result() as $key) {
             array_push($dataBobot, array($key->id_kriteria1, $key->id_kriteria2, $key->n_kriteria1,$key->n_kriteria2,$key->nilai,$key->id_perbandingan));     
               }

    return $dataBobot;
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

	public function editBobot(){

 //          $id=array();$n_kriteria1=array();$n_kriteria2=array();
 //          $id= $this->input->post('id_perbandingan');
 //          $n_kriteria1 = $this->input->post('n_kriteria1');
 //          $n_kriteria2 = $this->input->post('n_kriteria2');
 //           for ($i=0; $i < count($id) ; $i++) { 
 //           $nilai = number_format(($n_kriteria1[$i] / $n_kriteria2[$i]),2);
 //             $data = array(
 //        'n_kriteria1' => $n_kriteria1[$i],
 //        'n_kriteria2' => $n_kriteria2[$i],
 //        'nilai'=> $nilai);
          
      
 // $this->db->where('id_perbandingan', $id[$i]);
 //         $this->db->update('matriks_perbandingan', $data);

 //           }

    $kriteria1=$this->input->post('kriteria1');
    $kriteria2=$this->input->post('kriteria2');
    $perbandingan = $this->input->post('perbandingan');
    $nilai1=number_format(($perbandingan / 1),2);
    $nilai2=number_format((1 / $perbandingan),2);
    $data = array(
      'id_kriteria1' => $kriteria1,
      'id_kriteria2' => $kriteria2,
      'n_kriteria1' => $perbandingan,
      'n_kriteria2' => 1,
      'nilai' => $nilai1
       );
    $this->db->where('id_kriteria1',$kriteria1)->where('id_kriteria2',$kriteria2)->update('matriks_perbandingan',$data);
    $datax = array(
      'id_kriteria1' => $kriteria2,
      'id_kriteria2' => $kriteria1,
      'n_kriteria1' => 1,
      'n_kriteria2' => $perbandingan,
       'nilai' => $nilai2
       );
    $this->db->where('id_kriteria1',$kriteria2)->where('id_kriteria2',$kriteria1)->update('matriks_perbandingan',$datax);



	}
}