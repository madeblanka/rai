<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {
	// public function __construct()
    // {
    //     parent::__construct();
	// 	$this->load->model("Nasabah_model");
	// 	$this->load->model("Perhitungan_model");
	// }
	public function index()
	{
		 // List of Models
		 $models = array(
			'Nasabah_model' => 'nasabah',
			'Perhitungan_model' => 'perhitungan',
		   );
		   // Load Multiple Models
		   foreach ($models as $file => $object_name)
		   {
			$this->load->model($file, $object_name);
		   }
		   // Panggil model "my_model"
		   $data1["nasabah"] = $this->nasabah->getAll();
		   // Panggil model "user_model"
		   $data2["perhitungan"] = $this->perhitungan->getAll();
		   $this->load->view("dashboard",$data1,$data2);
	}
	public function hitungdeposito()
	{
		$this->load->view('perhitungan/deposito');
	}
	public function hitungkredit()
	{
		$this->load->view('perhitungan/kredit');
	}

}
