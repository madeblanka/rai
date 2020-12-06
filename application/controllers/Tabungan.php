<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tabungan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model("Tabungan_model");
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data["tabungan"] = $this->Tabungan_model->getAll();
		$this->load->view('tabungan/index', $data);
	}
	// public function daftar()
	// {
	// 	$this->load->view('tabungan/daftar');
	// }
	public function daftar()
	{
		if ($this->session->userdata('nik')) {
			$data['nasabah'] = $this->db->get_where('nasabah', ['nik' => $this->session->userdata('nik')])->row_array();
		} else {
			$this->session->set_flashdata('warning', 'Anda Belum Login');
			redirect('nasabah/login');
		}
		$data['tabungan'] = $this->db->get('tabeltabungan')->result_array();

		$this->form_validation->set_rules('jumlah', 'jumlah', 'required|trim');
		$this->form_validation->set_rules('bunga', 'jangka waktu', 'required|trim');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['tabungan'] = $this->db->get('tabeltabungan')->result_array();
			$this->load->view('pengajuan/tabungan', $data);
		} else {
			$post = $this->input->post();
			$data_tabungan = $this->db->get_where('tabeltabungan', ['idtabungan' => $post['bunga']])->row_array();

			$data = [
				'idnasabah' => $post["idnasabah"],
				'jumlah' => $post["jumlah"],
				'bunga' => $data_tabungan["bunga"],
				'waktu' => $waktu = intval(substr($data_tabungan["bulan"], 0, 2)),
				'tanggal' => $post["tanggal"],
				'status' => "Menunggu",
			];
			$this->db->insert('tabungan', $data);
			$this->session->set_flashdata('message', 'Pengajuan Tabungan Program Berhasil');
			redirect("nasabah/detailpengajuan");
		}
		// $this->load->view('tabungan/daftar');
	}
	public function edit()
	{
		$this->load->view('tabungan/edit');
	}
}
