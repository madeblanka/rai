<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deposito extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
		$this->load->model("Deposito_model");
		$this->load->model("Bunga_model");
	}

	public function index()
	{
		$data["deposito"] = $this->Deposito_model->getAll();
		$this->load->view('deposito/index',$data);
	}
	public function daftar()
	{
		$data["bunga"] = $this->Bunga_model->getdeposito();
		$this->load->view('deposito/daftar',$data);
	}
	public function edit($idpengajuandeposito)
	{
		$data["deposito"] = $this->Deposito_model->getByid($idpengajuandeposito);
		$this->load->view('deposito/index',$data);
	}

}
