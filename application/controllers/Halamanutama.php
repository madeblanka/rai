<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halamanutama extends CI_Controller {
	function __construct() {
		parent::__construct(); 
  
		$this->load->model('Tabeldeposito_model');
        $this->load->model('Tabelkredit_model');
		$this->load->model('Tabeltabungan_model');
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function hitungdeposito()
	{
		$data['deposito'] = $this->Tabeldeposito_model->getAll();
		$this->load->view('perhitungan/deposito',$data);
	}
	public function hitungkredit()
	{
		$data['kredit'] = $this->Tabelkredit_model->getAll();
		$this->load->view('perhitungan/kredit');
	}
	public function hitungtabungan()
	{
		$data['tabungan'] = $this->Tabeltabungan_model->getAll();
		$this->load->view('perhitungan/tabungan');
	}

}
