<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halamanutama extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
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
