<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Deposito extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model("Deposito_model");
		// $this->load->model("Bunga_model");
		$this->load->library('form_validation');

		if ($this->session->userdata('nik')) {
			$nasabah_login = $this->db->get_where('nasabah', ['nik' => $this->session->userdata('nik')])->row_array();
		}
	}

	public function index()
	{
		$data["deposito"] = $this->Deposito_model->getAll();
		$this->load->view('deposito/index', $data);
	}
	public function daftar()
	{
		if ($this->session->userdata('nik')) {
			$data['nasabah'] = $this->db->get_where('nasabah', ['nik' => $this->session->userdata('nik')])->row_array();
		} else {
			$this->session->set_flashdata('warning', 'Anda Belum Login');
			redirect('nasabah/login');
		}
		$data['deposito'] = $this->db->get('tabeldeposito')->result_array();

		$this->form_validation->set_rules('jumlah', 'jumlah', 'required|trim|greater_than[4999999]');
		$this->form_validation->set_rules('bunga', 'jenis deposito', 'required|trim');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['deposito'] = $this->db->get('tabeldeposito')->result_array();
			$this->load->view('pengajuan/deposito', $data);
		} else {
			$post = $this->input->post();
			$data_depo = $this->db->get_where('tabeldeposito', ['iddeposito' => $post['bunga']])->row_array();
			$waktu = intval(substr($data_depo['bulan'], 0, 2));
			$data = [
				'idnasabah' => $post["idnasabah"],
				'jumlah' => $post["jumlah"],
				'bunga' => $data_depo["bunga"],
				'waktu' => $waktu,
				'tanggal' => $post["tanggal"],
				'status' => "Menunggu",
			];
			$this->db->insert('deposito', $data);
			$this->session->set_flashdata('message', 'Pengajuan Deposito Berhasil');
			redirect("nasabah/detailpengajuan");
		}
	}
	public function edit($idpengajuandeposito)
	{
		$data["deposito"] = $this->Deposito_model->getByid($idpengajuandeposito);
		$this->load->view('deposito/index', $data);
	}
}
