<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {

		function __construct()
	{
		parent::__construct();
		$this->load->model('Kriteria_model');
		
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
	
		$jumlah1=0;$jumlah2=0;$jumlah3=0;$jumlah4=0;$jumlah5=0;	$j=1;
		$pw1=0;$pw2=0;$pw3=0;$pw4=0;$pw5=0;
		$kali1=0;$kali2=0;$kali3=0;$kali4=0;$kali5=0;
		foreach ($data['kriteria'] as $key) {
		
			for($i=0;$i<count($data['nilai_bobot']);$i++) {
			if($data['nilai_bobot'][$i][1]==  $key->id_kriteria){

				if($j==1){
					$jumlah1+=$data['nilai_bobot'][$i][4];
				}
				else if($j==2){
					$jumlah2+=$data['nilai_bobot'][$i][4];
				}
				else if($j==3){
					$jumlah3+=$data['nilai_bobot'][$i][4];
				}
				else if($j==4){
					$jumlah4+=$data['nilai_bobot'][$i][4];
				}
				else if($j==5){
					$jumlah5+=$data['nilai_bobot'][$i][4];
				}

				}
			}

			$j++;
		}

		$data['jumlah']= array($jumlah1,$jumlah2,$jumlah3, $jumlah4,$jumlah5
    );
		$j=1;$normalisai=1;
		$normalisaiarray=array();
		foreach ($data['kriteria'] as $key) {
		
			for($i=0;$i<count($data['nilai_bobot']);$i++) {
			if($data['nilai_bobot'][$i][1]==  $key->id_kriteria){

				if($j==1){
					$normalisasi = number_format(($data['nilai_bobot'][$i][4]/$jumlah1),2); 
				}
				else if($j==2){
					$normalisasi = number_format(($data['nilai_bobot'][$i][4]/$jumlah2),2);
				}
				else if($j==3){
						$normalisasi = number_format(($data['nilai_bobot'][$i][4]/$jumlah3),2);
				}
				else if($j==4){
						$normalisasi = number_format(($data['nilai_bobot'][$i][4]/$jumlah4),2);
				}
				else if($j==5){
						$normalisasi = number_format(($data['nilai_bobot'][$i][4]/$jumlah5),2);
				}
				array_push($normalisaiarray, array($data['nilai_bobot'][$i][0], $data['nilai_bobot'][$i][1], $data['nilai_bobot'][$i][2],$data['nilai_bobot'][$i][3],$data['nilai_bobot'][$i][4],$normalisasi)); 

				}
			}

			$j++;
		}
		$data['normalisasi']=$normalisaiarray;
$j=1;
		foreach ($data['kriteria'] as $key) {
		
			for($i=0;$i<count($data['normalisasi']);$i++) {
			if($data['normalisasi'][$i][0]==  $key->id_kriteria){
				if($j==1){
					$pw1 += $data['normalisasi'][$i][5];
				}
				else if($j==2){
					$pw2 += $data['normalisasi'][$i][5];
				}
				else if($j==3){
					$pw3 += $data['normalisasi'][$i][5];
				}
				else if($j==4){
					$pw4 += $data['normalisasi'][$i][5];
				}
				else if($j==5){
					$pw5 += $data['normalisasi'][$i][5];
				}
				}
			}

			$j++;
		}
		$data['pw']= array(($pw1/5),($pw2/5),($pw3/5),($pw4/5),($pw5/5));

		$j=1;

		
			for($i=0;$i<count($data['nilai_bobot']);$i++) {
$c=0;
		foreach ($data['kriteria'] as $key) {
			
			if($data['nilai_bobot'][$i][0] == $key->id_kriteria){

				if($data['nilai_bobot'][$i][1]='1'){
					$kali1 += $data['nilai_bobot'][$i][4]*$data['pw'][0];
				}
				if($data['nilai_bobot'][$i][1]='2'){
					$kali2 += $data['nilai_bobot'][$i][4]*$data['pw'][1];
				}
				if($data['nilai_bobot'][$i][1]='3'){
					$kali3 += $data['nilai_bobot'][$i][4]*$data['pw'][2];
				}
				if($data['nilai_bobot'][$i][1]='4'){
					$kali4 += $data['nilai_bobot'][$i][4]*$data['pw'][3];
				}
				if($data['nilai_bobot'][$i][1]='5'){
					$kali5 += $data['nilai_bobot'][$i][4]*$data['pw'][4];
				}
				}

			}
		}

	
		$data['vektor']= array($kali1,$kali2,$kali3,$kali4,$kali5);





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
