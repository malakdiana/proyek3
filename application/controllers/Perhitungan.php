<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perhitungan extends CI_Controller {

		function __construct()
	{
		parent::__construct();
	
		$this->load->model('Kriteria_model');
		$this->load->model('Alternatif_model');
		if ($this->session->userdata('logged_in')==TRUE) 
		{
			// redirect('Dc_Controller/index');
		}else{	
			redirect('Login');
		}
	}


public function index(){

		$data['kriteria']=$this->Kriteria_model->getdata();
		$data['alternatif']=$this->Alternatif_model->getdata();
			$query=$this->db->query("SELECT *  from alternatif ");

		$jum=[];
		  $dataBobot = [];
		  $normalisasi=[];
		  $pw=[];$kali=[];
	$bagi=[];
	$lamda=[];$ci=[];$rc=[];$konsisten=[];
		
		foreach ($data['kriteria'] as $row ) {

		foreach ($query->result() as $key) {
				foreach ($query->result() as $data) {
					$y= $row->kolom;
					$z=number_format($key->$y/ $data->$y,2);
					 $dataBobot[$row->kolom][$key->id_alternatif][$data->id_alternatif]=$z;
				}
			}
		
		foreach ($query->result() as $key) {
			$i=$key->id_alternatif;
			foreach ($dataBobot[$row->kolom] as $data ) {
				$b=0;
				foreach ($query->result() as $x) {
				$b+=$dataBobot[$row->kolom][$x->id_alternatif][$i];
				$jum[$row->kolom][$i]= $b;
				}
			}
		}
		

	
	foreach ($query->result() as $key) {
			$i=$key->id_alternatif;
			foreach ($dataBobot[$row->kolom] as $data ) {
				$b=0;
				foreach ($query->result() as $x) {
				$normalisasi[$row->kolom][$i][$x->id_alternatif]= number_format($dataBobot[$row->kolom][$i][$x->id_alternatif]/$jum[$row->kolom][$x->id_alternatif],2);
				}
			}
		}
		

		foreach ($query->result() as $key) {
			$i=$key->id_alternatif;
			foreach ($dataBobot[$row->kolom] as $data ) {
				$b=0;
				foreach ($query->result() as $x) {
					$b+=$normalisasi[$row->kolom][$i][$x->id_alternatif];
			
				}
			}
			$pw[$row->kolom][$i]=$b/$query->num_rows();
		}
		
		


		foreach ($query->result() as $key) {
			$i=$key->id_alternatif;
			foreach ($dataBobot[$row->kolom] as $data ) {
				$b=0;
				foreach ($query->result() as $x) {
					$b+=number_format($dataBobot[$row->kolom][$i][$x->id_alternatif]*$pw[$row->kolom][$x->id_alternatif],2);
				}
			}
			$kali[$row->kolom][$i]=$b;
		}
		

	foreach ($query->result() as $key) {
		$bagi[$row->kolom][$key->id_alternatif]=number_format($kali[$row->kolom][$key->id_alternatif]/ $pw[$row->kolom][$key->id_alternatif],2);
	}

	$n = $query->num_rows();
	$lamda[$row->kolom]=number_format(array_sum($bagi[$row->kolom])/ $n,2);
	$ci[$row->kolom]= ($lamda[$row->kolom]-$n)/ ($n-1);
	
		


$ir_table = [
			'1' => 0,
			'2' => 0,
			'3' => 0.58,
			'4' => 0.9,
			'5' => 1.12,
			'6' => 1.24,
			'7' => 1.32,
			'8' => 1.41,
			'9' => 1.45,
			'10' => 1.49,
			'11' => 1.51,
		];

	
	$rc[$row->kolom]= $ir_table[$n];


	$konsisten[$row->kolom]= $ci[$row->kolom]/$rc[$row->kolom];

}
		$data['kriteria']=$this->Kriteria_model->getdata();
		$data['alternatif']=$this->Alternatif_model->getdata();
$data['jumlah']=$jum;
		  $data['bobot']=$dataBobot;
		  $data['normalisasi']=$normalisasi;
		  $data['pw']=$pw;$data['kali']=$kali;
	$data['bagi']=$bagi;
	$data['lamda']=$lamda;$data['ci']=$ci;$data['rc']=$rc;$data['konsisten']=$konsisten;
		$this->load->view('admin/header');
		$this->load->view('admin/perhitungan',$data);
	}
}