<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nasabah extends CI_Controller {

	public function __construct(){
		parent::__construct();		
		$this->load->model('Nasabah_model');
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function daftar()
	{
		$this->load->view('daftar');
	}
	public function add()
    {
		$nasabah = $this->Nasabah_model->save();
		if($nasabah == true)
		{
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		
		redirect("halamanutama/index");
		}
		else
		{
			$this->load->view("daftar"); 
		}
	}
	public function edit($idnasabah = null)
    {
        if (!isset($idnasabah)) redirect('pegawai/index');
            $siswa = $this->Nasabah_model;
            $data["nasabah"] = $siswa->getByNis($idnasabah);
        if (!$data["nasabah"]) show_404();
        
        $this->load->view("edit", $data);
    }
}
