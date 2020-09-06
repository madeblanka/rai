<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabungan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model("Tabungan_model");
	}
	public function index()
	{
		$data["tabungan"] = $this->Tabungan_model->getAll();
		$this->load->view('tabungan/index',$data);
	}
	public function daftar()
	{
		$this->load->view('tabungan/daftar');
	}
	public function edit()
	{
		$this->load->view('tabungan/edit');
	}


}
