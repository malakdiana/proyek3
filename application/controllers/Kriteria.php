<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {

		function __construct()
	{
		parent::__construct();
		$this->load->model('Kriteria_model');
		if ($this->session->userdata('logged_in')==TRUE) 
		{
			// redirect('Dc_Controller/index');
		}else{	
			redirect('Login');
		}
	}
	public function index()
	{
		// $data['kriteria']=$this->Kriteria_model->getdata();

		$this->load->view('admin/header');
		$this->load->view('admin/kriteria');
	}

	public function getData()
	{
		echo json_encode($this->Kriteria_model->getdata());
	}

	public function nilai_bobot(){
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
		

$kali=[];
		foreach ($data['kriteria'] as $key) {
			$b=0;
			for($i=0;$i<count($data['nilai_bobot']);$i++) {
			$x=$data['nilai_bobot'][$i][0];
			if($x == $key->id_kriteria){
				$k=$data['nilai_bobot'][$i][1];
				$b+=number_format(($data['nilai_bobot'][$i][4]*$pw[$k]),2);
				$kali[$x]=$b;
			}
			}
		}

		$data['vektor']= $kali;
	$bagi=[];
	foreach ($data['kriteria'] as $key) {
			$bagi[$key->id_kriteria]=number_format($kali[$key->id_kriteria]/ $pw[$key->id_kriteria],2);
		}
	$data['bagi']= $bagi;
	#menghitung ci
		$n = count($data['kriteria']);

	$data['lamda']=number_format(array_sum($bagi)/ $n,2);
$data['ci']= ($data['lamda']-$n)/ ($n-1);
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

	
		$data['rc']= $ir_table[$n];

	$data['konsisten']= $data['ci']/$data['rc'];

		$this->load->view('admin/header');
		$this->load->view('admin/bobot_kriteria',$data);
	}

	public function new()
	{
		$kriteria = $this->input->post('kriteria');
		$keterangan = $this->input->post('keterangan');
		$batas = $this->input->post('batas');
		$result = $this->Kriteria_model->new($kriteria,$keterangan,$batas);
		echo json_encode($result);
	}

	public function update()
	{
		$id = $this->input->post('id');
		$kriteria = $this->input->post('kriteria');
		$keterangan = $this->input->post('keterangan');
		$batas = $this->input->post('batas');
		$result = $this->Kriteria_model->update($id,$kriteria,$keterangan,$batas);
		echo json_encode($result);
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$result = $this->Kriteria_model->delete($id);
		echo json_encode($result);
	}

	public function editBobot(){
		$this->Kriteria_model->editBobot();
		redirect('Kriteria/nilai_bobot');
	}

	
}
