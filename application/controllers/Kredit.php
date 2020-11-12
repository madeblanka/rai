<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kredit extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model("Kredit_model");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data["kredit"] = $this->Kredit_model->getAll();
		$this->load->view('kredit/index', $data);
	}
	public function daftar()
	{
		if ($this->session->userdata('nik')) {
			$data['nasabah'] = $this->db->get_where('nasabah', ['nik' => $this->session->userdata('nik')])->row_array();
		} else {
			$this->session->set_flashdata('warning', 'Anda Belum Login');
			redirect('nasabah/login');
		}

		$this->form_validation->set_rules('jumlah', 'jumlah', 'required|trim|greater_than[999999]');
		$this->form_validation->set_rules('lama', 'lama', 'required|trim|less_than[61]');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('pengajuan/kredit', $data);
		} else {
			$jumlah = $this->input->post('jumlah');
			$lama = $this->input->post('lama');
			$post = $this->input->post();
			$query = "SELECT * 
					FROM `tabelkredit`
					WHERE  '$jumlah' >= `jumlah1` AND  '$jumlah' < `jumlah2` 
					";
			$data_kred = $this->db->query($query)->row_array();

			$bunga = $data_kred['bunga'];
			$data = [
				'idnasabah' => $post["idnasabah"],
				'jumlah' => $post["jumlah"],
				'bunga' => $bunga,
				'bulan' => $post['lama'],
				'tanggal' => $post["tanggal"],
				'status' => "Menunggu",
			];
			$this->db->insert('kredit', $data);
			$this->session->set_flashdata('message', 'Pengajuan Kredit Berhasil');
			redirect("nasabah/detailpengajuan");
		}
		// $this->load->view('kredit/daftar');
	}
	public function edit()
	{
		$this->load->view('kredit/edit');
	}
}
