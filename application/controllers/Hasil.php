<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil extends CI_Controller {

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
	$this->proses();
	$this->proses2();
	$bobot;
	$alternatif= $this->Alternatif_model->getData();
	$kriteria=$this->Kriteria_model->getData();
	foreach ($alternatif as $key ) {
		$b=0;
		foreach ($kriteria as $row ) {
			$query=$this->db->select('eigen')->from('penilaian')->where('id_alternatif',$key->id_alternatif)->where('id_kriteria',$row->id_kriteria)->get()->result();
			$data=$this->db->select('eigen')->from('kriteria')->where('id_kriteria',$row->id_kriteria)->get()->result();
			$b+=$query[0]->eigen*$data[0]->eigen;

		}
		$bobot[$key->id_alternatif]=$b;

	}
	$this->db->empty_table('hasil');
	$i=1;
	foreach ($alternatif as $key ) {
		$data=array(
			'id_hasil' => $i,
			'id_alternatif'=> $key->id_alternatif,
			'bobot' => $bobot[$key->id_alternatif]
		);
		$this->db->insert('hasil',$data);
$i++;
	}

	$hasil = $this->db->select('*')->from('hasil')->join('alternatif','alternatif.id_alternatif = hasil.id_alternatif')->order_by('bobot','DESC')->get()->result();
	$data['hasil']=$hasil;

		$this->load->view('admin/header');
		$this->load->view('admin/hasil',$data);

}
public function proses(){
	$data['kriteria']=$this->Kriteria_model->getdata();
		$data['bobot']=$this->Kriteria_model->bobot();
		$data['nilai_bobot']= $this->Kriteria_model->arrayBobot();
		$jum=[];
		
		foreach ($data['kriteria'] as $key) {
				$b=0;
			for($i=0;$i<count($data['nilai_bobot']);$i++) {	
			if($data['nilai_bobot'][$i][1]==  $key->id_kriteria){
				$b+=$data['nilai_bobot'][$i][4];
				$jum["$key->id_kriteria"]= $b;
				}
			}
		}
		$data['jumlah']= $jum;
		$j=1;$normalisai=1;
		$normalisaiarray=array();
		foreach ($data['kriteria'] as $key) {
			for($i=0;$i<count($data['nilai_bobot']);$i++) {
			if($data['nilai_bobot'][$i][1]==  $key->id_kriteria){
				$normalisasi = number_format(($data['nilai_bobot'][$i][4]/$jum[$key->id_kriteria]),2); 
				array_push($normalisaiarray, array($data['nilai_bobot'][$i][0], $data['nilai_bobot'][$i][1], $data['nilai_bobot'][$i][2],$data['nilai_bobot'][$i][3],$data['nilai_bobot'][$i][4],$normalisasi)); 
				}
			}
		}
		$data['normalisasi']=$normalisaiarray;

$pw=[];
		foreach ($data['kriteria'] as $key) {
			$b=0;
			for($i=0;$i<count($data['normalisasi']);$i++) {
			if($data['normalisasi'][$i][0]==  $key->id_kriteria){
				$b+=$data['normalisasi'][$i][5];
				$pw[$key->id_kriteria]=$b;
				}
			}

			$pw[$key->id_kriteria]= $pw[$key->id_kriteria]/ count($data['kriteria']);
		}
		$data['pw']= $pw;

foreach ($data['kriteria'] as $key ) {
	$this->db->set('eigen', $pw[$key->id_kriteria]);
$this->db->where('id_kriteria', $key->id_kriteria);
$this->db->update('kriteria'); 
}
}

public function proses2(){
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
foreach ($data['kriteria'] as $key ) {
	foreach ($query->result() as $row ) {
		$this->db->set('eigen',$pw[$key->kolom][$row->id_alternatif])->where('id_kriteria',$key->id_kriteria)->where('id_alternatif',$row->id_alternatif)->update('penilaian');

	}
}

}
}