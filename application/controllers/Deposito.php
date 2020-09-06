<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deposito extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
		$this->load->model("Deposito_model");
	}

	public function index()
	{
		$data["deposito"] = $this->Deposito_model->getAll();
		$this->load->view('deposito/index',$data);
	}

}
