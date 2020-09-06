<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabelkredit extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Tabelkredit_model");
    }
	public function kredit()
	{
        $data["kredit"] = $this->Tabelkredit_model->getAll();
		$this->load->view('perhitungan/kredit',$data);
	}


}
