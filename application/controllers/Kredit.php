<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kredit extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model("Kredit_model");
	}

	public function index()
	{
		$data["kredit"] = $this->Kredit_model->getAll();
		$this->load->view('kredit/index',$data);
	}
	public function daftar()
	{
		$this->load->view('kredit/daftar');
	}
	public function edit()
	{
		$this->load->view('kredit/edit');
	}

}
