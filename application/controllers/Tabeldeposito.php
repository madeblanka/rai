<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabeldeposito extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Tabeldeposito_model");
    }
	public function deposito()
	{
        $data["deposito"] = $this->Tabeldeposito_model->getAll();
		$this->load->view('perhitungan/deposito',$data);
	}


}
