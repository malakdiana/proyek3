<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('excel');
		$this->load->model('Alternatif_model');
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
		$data['alternatif']=$this->Alternatif_model->getdata();
		
		
		$this->load->view('admin/header');
		
		$this->load->view('admin/alternatif',$data);
		$this->proses();

	}

	public function proses(){
		$this->db->empty_table('penilaian');
			$i=1;
		$data['alternatif']=$this->Alternatif_model->getdata();
			$data['kriteria']=$this->Kriteria_model->getdata();
		foreach ($data['kriteria'] as $key ) {

			foreach ($data['alternatif'] as $row ) {
				$y= array(
					'id_penilaian' => $i,
					'id_kriteria' => $key->id_kriteria ,
					'id_alternatif' => $row->id_alternatif );
				$this->db->insert('penilaian',$y);
				$i++;
			}
		}
	}
	public function getData()
	{
		echo json_encode($this->Alternatif_model->getdata());
	}
	public function addAlternatif(){
			$this->load->view('admin/header');
		$this->load->view('admin/add_alternatif');
	}
	public function save(){
		$this->Alternatif_model->savedata();
		redirect('Alternatif');
		
	} 

	public function new()
	{
		
		$result = $this->Alternatif_model->new();

		echo json_encode($result);
			$this->proses();
		
	}

	public function update()
	{
		$result = $this->Alternatif_model->update();
		echo json_encode($result);
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$result = $this->Alternatif_model->delete($id);
		
		
		echo json_encode($result);
			$this->proses();
	}

	public function import()
	{
		if(isset($_FILES["fileku"]["name"])){
			$path = $_FILES["fileku"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			$objWriter = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
			$objWriter->save('uploads/ImportAlternatif.xlsx');
			foreach($object->getWorksheetIterator() as $worksheet){
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for($row=2; $row<=$highestRow; $row++){
					$nama = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
					$desa = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$alias = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$tk = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$investasi = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$kp = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
					$np = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
					$bb = $worksheet->getCellByColumnAndRow(7, $row)->getValue();

				
						
					$data[] = array(
						'nama_alternatif_industri' => $nama,
						'desa' => $desa,
						'tenaga_kerja' => $tk,
						'alias' => $alias,
						'investasi' => $investasi,
						'kapasitas_produksi' => $kp,
						'nilai_produksi' => $np,
						'bahan_baku' => $bb,
					);
					
				}
			}
			$result=$this->Alternatif_model->import($data);
			echo json_encode($result);

		}
	}
}