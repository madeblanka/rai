<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabeltabungan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Tabeltabungan_model");
    }
	public function tabungan()
	{
        $data["tabungan"] = $this->Tabeltabungan_model->getAll();
		$this->load->view('perhitungan/tabungan',$data);
	}


}
