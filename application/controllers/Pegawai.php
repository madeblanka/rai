<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->model("Nasabah_model");
		// $this->load->model("Perhitungan_model");
		$this->load->library('form_validation');
	}
	public function index()
	{
		// // List of Models
		// $models = array(
		// 	'Nasabah_model' => 'nasabah',
		// 	'Perhitungan_model' => 'perhitungan',
		// );
		// // Load Multiple Models
		// foreach ($models as $file => $object_name) {
		// 	$this->load->model($file, $object_name);
		// }
		// // Panggil model "my_model"
		// $data1["nasabah"] = $this->nasabah->getAll();
		// // Panggil model "user_model"
		// $data2["perhitungan"] = $this->perhitungan->getAll();
		// $this->load->view("dashboard", $data1, $data2);
		$this->db->where('status =', 'Menunggu');
		$this->db->from('deposito');
		$data['deposito_menunggu']  = $this->db->count_all_results();

		$this->db->where('status =', 'Disetujui');
		$this->db->from('deposito');
		$data['deposito_disetujui']  = $this->db->count_all_results();

		$this->db->where('status =', 'Menunggu');
		$this->db->from('kredit');
		$data['kredit_menunggu']  = $this->db->count_all_results();

		$this->db->where('status =', 'Disetujui');
		$this->db->from('kredit');
		$data['kredit_disetujui']  = $this->db->count_all_results();

		$this->db->where('status =', 'Menunggu');
		$this->db->from('tabungan');
		$data['tabungan_menunggu']  = $this->db->count_all_results();

		$this->db->where('status =', 'Disetujui');
		$this->db->from('tabungan');
		$data['tabungan_disetujui']  = $this->db->count_all_results();

		$this->load->view("dashboard", $data);
	}
	public function hitungdeposito()
	{
		$this->load->view('perhitungan/deposito');
	}
	public function hitungkredit()
	{
		$this->load->view('perhitungan/kredit');
	}





	// public function login()
	// {
	// 	$this->form_validation->set_rules('idpegawai', 'idpegawai', 'required|trim');
	// 	$this->form_validation->set_rules('password', 'Password', 'required|trim');

	// 	if ($this->form_validation->run() == false) {
	// 		$data['title'] = 'Login Page';
	// 		$this->load->view('pegawai/login', $data);
	// 	} else {
	// 		$idpegawai = $this->input->post('idpegawai');
	// 		$password = $this->input->post('password');

	// 		$user = $this->db->get_where('pegawai', ['idpegawai' => $this->input->post('idpegawai')])->row_array();
	// 		if ($user != null) {
	// 			// cek password yg sdh di hash
	// 			if ($password == $user['password']) {
	// 				// kirim data ke halaman selanjutnya
	// 				$data = [
	// 					'idpegawai' => $user['idpegawai'],
	// 				];
	// 				$this->session->set_userdata($data);
	// 				redirect('pegawai/index');
	// 			} else {
	// 				$this->session->set_flashdata('warning', 'Password Salah');
	// 				redirect('pegawai/login');
	// 			}
	// 		} else {
	// 			// user tdk ada
	// 			// send pesan
	// 			$this->session->set_flashdata('warning', 'ID Salah');
	// 			redirect('pegawai/login');
	// 		}
	// 	}
	// }

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('idpegawai');

		// send pesan
		$this->session->set_flashdata('message', 'Logout Berhasil');
		redirect('nasabah/index');
	}

	public function deposito()
	{
		$data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
		// $data['deposito'] = $this->db->get('deposito')->result_array();
		$query = "SELECT `deposito`.* , `nasabah`.`nama`
					FROM `deposito` JOIN `nasabah`
					ON `deposito`.`idnasabah` = `nasabah`.`idnasabah`					
					WHERE `deposito`.`idnasabah` = `nasabah`.`idnasabah`               
					";
		$data['deposito'] = $this->db->query($query)->result_array();
		// var_dump($data['deposito']);
		// die;
		$this->load->view('pegawai/deposito', $data);
	}

	public function depositodetail($id)
	{
		$query = "SELECT `deposito`.* , `nasabah`.*
				FROM `deposito` JOIN `nasabah`
				ON `deposito`.`idnasabah` = `nasabah`.`idnasabah`					
				WHERE `deposito`.`idnasabah` = `nasabah`.`idnasabah` AND `deposito`.`idpengajuandeposito` = $id
				";

		$data['deposito'] = $this->db->query($query)->row_array();

		// var_dump($data['deposito']);
		// die;
		$this->load->view('pegawai/depositodetail', $data);
	}

	public function depositoedit($id)
	{
		$data['deposito'] = $this->db->get_where('deposito', ['idpengajuandeposito' => $id])->row_array();
		// var_dump($data['deposito']);
		// die;
		$this->load->view('pegawai/depositoedit', $data);
	}

	public function depositoupdate()
	{
		$this->form_validation->set_rules('idpengajuandeposito', 'idpengajuandeposito', 'required|trim');
		$this->form_validation->set_rules('jumlah', 'jumlah', 'required|trim');
		$this->form_validation->set_rules('waktu', 'waktu', 'required|trim');
		$this->form_validation->set_rules('bunga', 'bunga', 'required|trim');
		$this->form_validation->set_rules('ahliwaris', 'ahliwaris', 'required|trim');
		$this->form_validation->set_rules('statusahliwaris', 'statusahliwaris', 'required|trim');
		$this->form_validation->set_rules('status', 'status', 'required|trim');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'required|trim');

		if ($this->form_validation->run() == false) {
			$post = $this->input->post();
			$data['deposito'] = $this->db->get_where('deposito', ['idpengajuandeposito' => $post['idpengajuandeposito']])->row_array();
			// var_dump($data['deposito']);
			// die;
			$this->load->view('pegawai/depositoedit', $data);
		} else {
			$post = $this->input->post();
			$data = [
				'jumlah' => $post['jumlah'],
				'waktu' => $post['waktu'],
				'bunga' => $post['bunga'],
				'ahliwaris' => $post['ahliwaris'],
				'statusahliwaris' => $post['statusahliwaris'],
				'tanggal' => $post['tanggal'],
				'status' => $post['status'],
			];
			$this->db->where('idpengajuandeposito', $post['idpengajuandeposito']);
			$this->db->update('deposito', $data);

			$this->session->set_flashdata('message', 'Data Berhasil Dirubah');
			redirect('pegawai/deposito');
		}
	}

	public function depositodelete($id)
	{
		$this->db->delete('deposito', ['idpengajuandeposito' => $id]);
		$this->session->set_flashdata('message', 'Data Berhasil Dihapus');
		redirect('pegawai/deposito');
	}

	public function depositobunga()
	{
		$data['tabeldeposito'] = $this->db->get('tabeldeposito')->result_array();
		// var_dump($data['deposito']);
		// die;
		$this->load->view('pegawai/depositobunga', $data);
	}

	public function depositobungaedit($id)
	{
		$data['tabeldeposito'] = $this->db->get_where('tabeldeposito', ['iddeposito' => $id])->row_array();
		// var_dump($data['deposito']);
		// die;
		$this->load->view('pegawai/depositobungaedit', $data);
	}

	public function depositobungaupdate()
	{
		$pegawai = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('iddeposito', 'id deposito', 'required|trim');
		$this->form_validation->set_rules('bunga', 'bunga', 'required|trim');
		$this->form_validation->set_rules('bulan', 'jangka waktu', 'required|trim');
		if ($this->form_validation->run() == false) {
			$post = $this->input->post();
			$data['tabeldeposito'] = $this->db->get_where('tabeldeposito', ['iddeposito' => $post['iddeposito']])->row_array();
			// var_dump($data['deposito']);
			// die;
			$this->load->view('pegawai/depositobungaedit', $data);
		} else {
			$timestamp = date("Y-m-d H:i:s");
			$post = $this->input->post();
			$data = [
				'idpegawai' => $pegawai['idpegawai'],
				'bunga' => $post['bunga'],
				'bulan' => $post['bulan'],
				'tgl_update' => $timestamp,
			];
			$this->db->where('iddeposito', $post['iddeposito']);
			$this->db->update('tabeldeposito', $data);

			$this->session->set_flashdata('message', 'Data Berhasil Dirubah');
			redirect('pegawai/depositobunga');
		}
	}

	public function depositopermohonan($id)
	{

		$query = "SELECT `deposito`.* , `nasabah`.*
				FROM `deposito` JOIN `nasabah`
				ON `deposito`.`idnasabah` = `nasabah`.`idnasabah`					
				WHERE `deposito`.`idnasabah` = `nasabah`.`idnasabah` AND `deposito`.`idpengajuandeposito` = $id
				";

		$data['deposito'] = $this->db->query($query)->row_array();
		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "deposito-permohonan.pdf";
		$this->pdf->load_view('pegawai/laporan/deposito-permohonan', $data);
	}

	public function depositolaporan()
	{
		// var_dump('aaa');
		// die;
		// $data = array(
		// 	"dataku" => array(
		// 		"nama" => "Petani Kode",
		// 		"url" => "http://petanikode.com"
		// 	)
		// );
		$tanggal_mulai = $this->input->post('tanggal_mulai');
		$tanggal_selesai = $this->input->post('tanggal_selesai');

		$query = "SELECT `deposito`.* , `nasabah`.`nama`
				FROM `deposito` JOIN `nasabah`
				ON `deposito`.`idnasabah` = `nasabah`.`idnasabah`					
				WHERE `deposito`.`idnasabah` = `nasabah`.`idnasabah` AND `deposito`.`tanggal` >= '$tanggal_mulai'  AND `deposito`.`tanggal` <= '$tanggal_selesai'                         
				";

		$data['deposito'] = $this->db->query($query)->result_array();
		$data['tanggal_mulai'] = $tanggal_mulai;
		$data['tanggal_selesai'] = $tanggal_selesai;
		if (!$data['deposito']) {
			$this->session->set_flashdata('warning', "Data deposito kosong pada tanggal " . date('d-m-Y', strtotime($tanggal_mulai)) . " s/d " . date('d-m-Y', strtotime($tanggal_mulai)));
			redirect('pegawai/deposito');
		}
		// var_dump($data['deposito']);
		// die;
		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-deposito.pdf";
		$this->pdf->load_view('pegawai/laporan/laporandeposito', $data);
	}

	public function depositobungatambah()
	{
		$this->form_validation->set_rules('bunga', 'bunga', 'required|trim');
		$this->form_validation->set_rules('bulan', 'jangka waktu', 'required|trim');
		if ($this->form_validation->run() == false) {
			$data['tabeldeposito'] = $this->db->get('tabeldeposito')->result_array();

			$this->load->view('pegawai/depositobunga', $data);
		} else {
			$timestamp = date("Y-m-d H:i:s");
			$pegawai = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();

			$post = $this->input->post();
			// var_dump($pegawai);
			$data = [
				'idpegawai' => $pegawai['idpegawai'],
				'bunga' => $post['bunga'],
				'bulan' => $post['bulan'],
				'tgl_input' => $timestamp,
			];

			$this->db->insert('tabeldeposito', $data);
			redirect('pegawai/depositobunga');
		}
	}

	public function depositobungadelete($id)
	{
		$this->db->delete('tabeldeposito', ['iddeposito' => $id]);
		$this->session->set_flashdata('message', 'Data Berhasil Dihapus');
		redirect('pegawai/depositobunga');
	}



	public function kredit()
	{
		$data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
		$query = "SELECT `kredit`.* , `nasabah`.`nama`
					FROM `kredit` JOIN `nasabah`
					ON `kredit`.`idnasabah` = `nasabah`.`idnasabah`					
					WHERE `kredit`.`idnasabah` = `nasabah`.`idnasabah`               
					";
		$data['kredit'] = $this->db->query($query)->result_array();
		// var_dump($data['kredit']);
		// die;
		$this->load->view('pegawai/kredit', $data);
	}

	public function kreditdetail($id)
	{
		$query = "SELECT `kredit`.* , `nasabah`.*
				FROM `kredit` JOIN `nasabah`
				ON `kredit`.`idnasabah` = `nasabah`.`idnasabah`					
				WHERE `kredit`.`idnasabah` = `nasabah`.`idnasabah` AND `kredit`.`idpengajuankredit` = $id
				";

		$data['kredit'] = $this->db->query($query)->row_array();

		// var_dump($data['kredit']);
		// die;
		$this->load->view('pegawai/kreditdetail', $data);
	}

	public function kreditedit($id)
	{
		$data['kredit'] = $this->db->get_where('kredit', ['idpengajuankredit' => $id])->row_array();
		// var_dump($data['kredit']);
		// die;
		$this->load->view('pegawai/kreditedit', $data);
	}

	public function kreditupdate()
	{
		$this->form_validation->set_rules('idpengajuankredit', 'idpengajuankredit', 'required|trim');
		$this->form_validation->set_rules('jumlah', 'jumlah', 'required|trim');
		$this->form_validation->set_rules('bunga', 'bunga', 'required|trim');
		$this->form_validation->set_rules('bulan', 'bulan', 'required|trim');
		// $this->form_validation->set_rules('jenis_bunga', 'jenis_bunga', 'required|trim');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'required|trim');
		$this->form_validation->set_rules('status', 'status', 'required|trim');

		if ($this->form_validation->run() == false) {
			$post = $this->input->post();
			$data['kredit'] = $this->db->get_where('kredit', ['idpengajuankredit' => $post['idpengajuankredit']])->row_array();
			// var_dump($data['kredit']);
			// die;
			$this->load->view('pegawai/kreditedit', $data);
		} else {
			$post = $this->input->post();
			$data = [
				'jumlah' => $post['jumlah'],
				'bunga' => $post['bunga'],
				'bulan' => $post['bulan'],
				// 'jenis_bunga' => $post['jenis_bunga'],
				'tanggal' => $post['tanggal'],
				'status' => $post['status'],
			];
			$this->db->where('idpengajuankredit', $post['idpengajuankredit']);
			$this->db->update('kredit', $data);

			$this->session->set_flashdata('message', 'Data Berhasil Dirubah');
			redirect('pegawai/kredit');
		}
	}

	public function kreditdelete($id)
	{
		$this->db->delete('kredit', ['idpengajuankredit' => $id]);
		$this->session->set_flashdata('message', 'Data Berhasil Dihapus');
		redirect('pegawai/kredit');
	}

	public function kreditbunga()
	{
		$data['tabelkredit'] = $this->db->get('tabelkredit')->result_array();
		// var_dump($data['kredit']);
		// die;
		$this->load->view('pegawai/kreditbunga', $data);
	}

	public function kreditbungaedit($id)
	{
		$data['tabelkredit'] = $this->db->get_where('tabelkredit', ['idkredit' => $id])->row_array();
		// var_dump($data['kredit']);
		// die;
		$this->load->view('pegawai/kreditbungaedit', $data);
	}

	public function kreditbungaupdate()
	{
		$this->form_validation->set_rules('idkredit', 'id kredit', 'required|trim');
		$this->form_validation->set_rules('jumlah1', 'jumlah minimal', 'required|trim');
		$this->form_validation->set_rules('jumlah2', 'jumlah maksimal', 'required|trim');
		$this->form_validation->set_rules('bunga', 'jangka waktu', 'required|trim');
		// $this->form_validation->set_rules('bulan', 'bulan', 'required|trim');
		if ($this->form_validation->run() == false) {
			$post = $this->input->post();
			$data['tabelkredit'] = $this->db->get_where('tabelkredit', ['idkredit' => $post['idkredit']])->row_array();
			$this->load->view('pegawai/kreditbungaedit', $data);
		} else {

			$timestamp = date("Y-m-d H:i:s");
			$pegawai = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();

			$post = $this->input->post();
			$data = [
				'idpegawai' => $pegawai['idpegawai'],
				'jumlah1' => $post['jumlah1'],
				'jumlah2' => $post['jumlah2'],
				'bunga' => $post['bunga'],
				// 'bulan' => $post['bulan'],
				'tgl_update' => $timestamp,
			];
			$this->db->where('idkredit', $post['idkredit']);
			$this->db->update('tabelkredit', $data);

			$this->session->set_flashdata('message', 'Data Berhasil Dirubah');
			redirect('pegawai/kreditbunga');
		}
	}

	public function kreditbungadelete($id)
	{
		$this->db->delete('tabelkredit', ['idkredit' => $id]);
		$this->session->set_flashdata('message', 'Data Berhasil Dihapus');
		redirect('pegawai/kreditbunga');
	}

	public function kreditbungatambah()
	{
		$this->form_validation->set_rules('jumlah1', 'plapon minimal', 'required|trim');
		$this->form_validation->set_rules('jumlah2', 'plapon maksimal', 'required|trim');
		$this->form_validation->set_rules('bunga', 'bunga', 'required|trim');
		// $this->form_validation->set_rules('bulan', 'bulan', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['tabelkredit'] = $this->db->get('tabelkredit')->result_array();
			$this->load->view('pegawai/kreditbunga', $data);
		} else {
			$timestamp = date("Y-m-d H:i:s");
			$pegawai = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();

			$post = $this->input->post();
			$data = [
				'idpegawai' => $pegawai['idpegawai'],
				'jumlah1' => $post['jumlah1'],
				'jumlah2' => $post['jumlah2'],
				'bunga' => $post['bunga'],
				// 'bulan' => $post['bulan'],
				'tgl_input' => $timestamp,
			];

			$this->db->insert('tabelkredit', $data);
			redirect('pegawai/kreditbunga');
		}
	}

	public function kreditlaporan()
	{
		$tanggal_mulai = $this->input->post('tanggal_mulai');
		$tanggal_selesai = $this->input->post('tanggal_selesai');

		$query = "SELECT `kredit`.* , `nasabah`.`nama`
				FROM `kredit` JOIN `nasabah`
				ON `kredit`.`idnasabah` = `nasabah`.`idnasabah`					
				WHERE `kredit`.`idnasabah` = `nasabah`.`idnasabah` AND `kredit`.`tanggal` >= '$tanggal_mulai'  AND `kredit`.`tanggal` <= '$tanggal_selesai'                         
				";

		$data['kredit'] = $this->db->query($query)->result_array();
		$data['tanggal_mulai'] = $tanggal_mulai;
		$data['tanggal_selesai'] = $tanggal_selesai;
		if (!$data['kredit']) {
			$this->session->set_flashdata('warning', "Data pinjaman kosong pada tanggal " . date('d-m-Y', strtotime($tanggal_mulai)) . " s/d " . date('d-m-Y', strtotime($tanggal_mulai)));
			redirect('pegawai/kredit');
		}
		// var_dump($data['kredit']);
		// die;
		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-kredit.pdf";
		$this->pdf->load_view('pegawai/laporan/laporankredit', $data);
	}

	public function kreditpermohonan($id)
	{

		$query = "SELECT `kredit`.* , `nasabah`.*
				FROM `kredit` JOIN `nasabah`
				ON `kredit`.`idnasabah` = `nasabah`.`idnasabah`					
				WHERE `kredit`.`idnasabah` = `nasabah`.`idnasabah` AND `kredit`.`idpengajuankredit` = $id
				";

		$data['kredit'] = $this->db->query($query)->row_array();
		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "kredit-permohonan.pdf";
		$this->pdf->load_view('pegawai/laporan/kredit-permohonan', $data);
	}







	public function tabungan()
	{
		$data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
		// $data['tabungan'] = $this->db->get('tabungan')->result_array();
		$query = "SELECT `tabungan`.* , `nasabah`.`nama`
					FROM `tabungan` JOIN `nasabah`
					ON `tabungan`.`idnasabah` = `nasabah`.`idnasabah`					
					WHERE `tabungan`.`idnasabah` = `nasabah`.`idnasabah`               
					";
		$data['tabungan'] = $this->db->query($query)->result_array();
		// var_dump($data['tabungan']);
		// die;
		$this->load->view('pegawai/tabungan', $data);
	}

	public function tabunganedit($id)
	{
		$data['tabungan'] = $this->db->get_where('tabungan', ['idpengajuantabungan' => $id])->row_array();
		// var_dump($data['tabungan']);
		// die;
		$this->load->view('pegawai/tabunganedit', $data);
	}

	public function tabunganupdate()
	{
		$this->form_validation->set_rules('idpengajuantabungan', 'idpengajuantabungan', 'required|trim');
		$this->form_validation->set_rules('jumlah', 'jumlah', 'required|trim');
		$this->form_validation->set_rules('waktu', 'waktu', 'required|trim');
		$this->form_validation->set_rules('bunga', 'bunga', 'required|trim');
		$this->form_validation->set_rules('ahliwaris', 'ahliwaris', 'required|trim');
		$this->form_validation->set_rules('statusahliwaris', 'statusahliwaris', 'required|trim');
		$this->form_validation->set_rules('status', 'status', 'required|trim');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'required|trim');

		if ($this->form_validation->run() == false) {
			$post = $this->input->post();
			$data['tabungan'] = $this->db->get_where('tabungan', ['idpengajuantabungan' => $post['idpengajuantabungan']])->row_array();
			// var_dump($data['tabungan']);
			// die;
			$this->load->view('pegawai/tabunganedit', $data);
		} else {
			$post = $this->input->post();
			$data = [
				'jumlah' => $post['jumlah'],
				'waktu' => $post['waktu'],
				'bunga' => $post['bunga'],
				'ahliwaris' => $post['ahliwaris'],
				'statusahliwaris' => $post['statusahliwaris'],
				'tanggal' => $post['tanggal'],
				'status' => $post['status'],
			];
			$this->db->where('idpengajuantabungan', $post['idpengajuantabungan']);
			$this->db->update('tabungan', $data);

			$this->session->set_flashdata('message', 'Data Berhasil Dirubah');
			redirect('pegawai/tabungan');
		}
	}

	public function tabungandelete($id)
	{
		$this->db->delete('tabungan', ['idpengajuantabungan' => $id]);
		$this->session->set_flashdata('message', 'Data Berhasil Dihapus');
		redirect('pegawai/tabungan');
	}

	public function tabunganbunga()
	{
		$data['tabeltabungan'] = $this->db->get('tabeltabungan')->result_array();
		// var_dump($data['tabungan']);
		// die;
		$this->load->view('pegawai/tabunganbunga', $data);
	}

	public function tabunganbungaedit($id)
	{
		$data['tabeltabungan'] = $this->db->get_where('tabeltabungan', ['idtabungan' => $id])->row_array();
		// var_dump($data['tabungan']);
		// die;
		$this->load->view('pegawai/tabunganbungaedit', $data);
	}

	public function tabunganbungaupdate()
	{
		$this->form_validation->set_rules('idtabungan', 'id tabungan', 'required|trim');
		$this->form_validation->set_rules('bunga', 'bunga', 'required|trim');
		$this->form_validation->set_rules('bulan', 'jangka waktu', 'required|trim');
		if ($this->form_validation->run() == false) {
			$post = $this->input->post();
			$data['tabeltabungan'] = $this->db->get_where('tabeltabungan', ['idtabungan' => $post['idtabungan']])->row_array();
			$this->load->view('pegawai/tabunganbungaedit', $data);
		} else {

			$timestamp = date("Y-m-d H:i:s");
			$pegawai = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();


			$post = $this->input->post();
			$data = [
				'idpegawai' => $pegawai['idpegawai'],
				'bunga' => $post['bunga'],
				'bulan' => $post['bulan'],
				'tgl_update' => $timestamp,
			];
			$this->db->where('idtabungan', $post['idtabungan']);
			$this->db->update('tabeltabungan', $data);

			$this->session->set_flashdata('message', 'Data Berhasil Dirubah');
			redirect('pegawai/tabunganbunga');
		}
	}

	public function tabunganbungatambah()
	{
		$this->form_validation->set_rules('bunga', 'bunga', 'required|trim');
		$this->form_validation->set_rules('bulan', 'jangka waktu', 'required|trim');
		if ($this->form_validation->run() == false) {
			$data['tabeltabungan'] = $this->db->get('tabeltabungan')->result_array();
			$this->load->view('pegawai/tabunganbunga', $data);
		} else {
			$timestamp = date("Y-m-d H:i:s");
			$pegawai = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();

			$post = $this->input->post();
			$data = [
				'idpegawai' => $pegawai['idpegawai'],
				'bunga' => $post['bunga'],
				'bulan' => $post['bulan'],
				'tgl_input' => $timestamp,
			];

			$this->db->insert('tabeltabungan', $data);
			redirect('pegawai/tabunganbunga');
		}
	}

	public function tabunganbungadelete($id)
	{
		$this->db->delete('tabeltabungan', ['idtabungan' => $id]);
		$this->session->set_flashdata('message', 'Data Berhasil Dihapus');
		redirect('pegawai/tabunganbunga');
	}

	public function tabunganlaporan()
	{

		$tanggal_mulai = $this->input->post('tanggal_mulai');
		$tanggal_selesai = $this->input->post('tanggal_selesai');

		$query = "SELECT `tabungan`.* , `nasabah`.`nama`
				FROM `tabungan` JOIN `nasabah`
				ON `tabungan`.`idnasabah` = `nasabah`.`idnasabah`					
				WHERE `tabungan`.`idnasabah` = `nasabah`.`idnasabah` AND `tabungan`.`tanggal` >= '$tanggal_mulai'  AND `tabungan`.`tanggal` <= '$tanggal_selesai'                         
				";

		$data['tabungan'] = $this->db->query($query)->result_array();
		$data['tanggal_mulai'] = $tanggal_mulai;
		$data['tanggal_selesai'] = $tanggal_selesai;
		if (!$data['tabungan']) {
			$this->session->set_flashdata('warning', "Data tabungan kosong pada tanggal " . date('d-m-Y', strtotime($tanggal_mulai)) . " s/d " . date('d-m-Y', strtotime($tanggal_mulai)));
			redirect('pegawai/tabungan');
		}
		// var_dump($data['tabungan']);
		// die;
		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-tabungan.pdf";
		$this->pdf->load_view('pegawai/laporan/laporantabungan', $data);
	}


	public function nasabah()
	{
		$data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
		$data['nasabah'] = $this->db->get('nasabah')->result_array();
		$this->load->view('pegawai/nasabah', $data);
	}

	public function nasabahedit($id)
	{
		$data['nasabah'] = $this->db->get_where('nasabah', ['idnasabah' => $id])->row_array();
		// var_dump($data['nasabah']);
		// die;
		$this->load->view('pegawai/nasabahedit', $data);
	}

	public function nasabahupdate()
	{
		$pegawai = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nik', 'nik', 'required|trim');
		$this->form_validation->set_rules('nama', 'nama', 'required|trim');
		$this->form_validation->set_rules('username', 'username', 'required|trim');
		$this->form_validation->set_rules('password', 'password', 'required|trim');
		$this->form_validation->set_rules('jeniskelamin', 'jeniskelamin', 'required|trim');
		$this->form_validation->set_rules('pernikahan', 'pernikahan', 'required|trim');
		$this->form_validation->set_rules('notelp', 'notelp', 'required|trim');

		$this->form_validation->set_rules('tempatkerja', 'tempatkerja', 'required|trim');
		$this->form_validation->set_rules('lamakerja_tahun', 'lamakerja_tahun', 'required|trim');
		$this->form_validation->set_rules('lamakerja_bulan', 'lamakerja_bulan', 'required|trim');
		$this->form_validation->set_rules('jabatan', 'jabatan', 'required|trim');
		$this->form_validation->set_rules('gaji', 'gaji', 'required|trim');
		$this->form_validation->set_rules('umur', 'umur', 'required|trim');

		$this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required|trim');
		$this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
		$this->form_validation->set_rules('statusrumah', 'statusrumah', 'required|trim');
		$this->form_validation->set_rules('kelurahan', 'kelurahan', 'required|trim');
		$this->form_validation->set_rules('kecamatan', 'kecamatan', 'required|trim');
		$this->form_validation->set_rules('provinsi', 'provinsi', 'required|trim');

		$this->form_validation->set_rules('namakerabat', 'namakerabat', 'required|trim');
		$this->form_validation->set_rules('statuskerabat', 'statuskerabat', 'required|trim');
		$this->form_validation->set_rules('alamatkerabat', 'alamatkerabat', 'required|trim');
		$this->form_validation->set_rules('pekerjaankerabat', 'pekerjaankerabat', 'required|trim');
		$this->form_validation->set_rules('perusahaankerabat', 'perusahaankerabat', 'required|trim');

		if ($this->form_validation->run() == false) {
			$post = $this->input->post();
			$data['nasabah'] = $this->db->get_where('nasabah', ['idnasabah' => $post['idnasabah']])->row_array();
			$this->load->view('pegawai/nasabahedit', $data);
		} else {
			$post = $this->input->post();
			$data = [
				'idpegawai' => $pegawai['idpegawai'],
				'nik' => $post['nik'],
				'nama' => $post['nama'],
				'jeniskelamin' => $post['jeniskelamin'],
				'pernikahan' => $post['pernikahan'],
				'notelp' => $post['notelp'],
				'username' => $post['username'],
				'password' => $post['password'],

				'tempatkerja' => $post['tempatkerja'],
				'lamakerja_tahun' => $post['lamakerja_tahun'],
				'lamakerja_bulan' => $post['lamakerja_bulan'],
				'jabatan' => $post['jabatan'],
				'gaji' => $post['gaji'],
				'umur' => $post['umur'],

				'tgl_lahir' => $post['tgl_lahir'],
				'alamat' => $post['alamat'],
				'statusrumah' => $post['statusrumah'],
				'kelurahan' => $post['kelurahan'],
				'kecamatan' => $post['kecamatan'],
				'provinsi' => $post['provinsi'],

				'namakerabat' => $post['namakerabat'],
				'statuskerabat' => $post['statuskerabat'],
				'alamatkerabat' => $post['alamatkerabat'],
				'pekerjaankerabat' => $post['pekerjaankerabat'],
				'perusahaankerabat' => $post['perusahaankerabat'],

			];
			$this->db->where('idnasabah', $post['idnasabah']);
			$this->db->update('nasabah', $data);


			$this->session->set_flashdata('message', 'Data Berhasil Dirubah');
			redirect('pegawai/nasabah');
		}
	}

	public function nasabahdelete($id)
	{
		$this->db->delete('nasabah', ['idnasabah' => $id]);
		$this->session->set_flashdata('message', 'Data Berhasil Dihapus');
		redirect('pegawai/nasabah');
	}

	public function nasabahdetail($id)
	{
		$data['nasabah'] = $this->db->get_where('nasabah', ['idnasabah' => $id])->row_array();
		// var_dump($data['nasabah']);
		// die;
		$this->load->view('pegawai/nasabahdetail', $data);
	}





	public function tabungandetail($id)
	{
		$query = "SELECT `tabungan`.* , `nasabah`.*
				FROM `tabungan` JOIN `nasabah`
				ON `tabungan`.`idnasabah` = `nasabah`.`idnasabah`					
				WHERE `tabungan`.`idnasabah` = `nasabah`.`idnasabah` AND `tabungan`.`idpengajuantabungan` = $id
				";

		$data['tabungan'] = $this->db->query($query)->row_array();

		// var_dump($data['tabungan']);
		// die;
		$this->load->view('pegawai/tabungandetail', $data);
	}

	public function nasabahlaporan($idnasabah)
	{

		// $tanggal_mulai = $this->input->post('tanggal_mulai');
		// $tanggal_selesai = $this->input->post('tanggal_selesai');

		$data['nasabah'] = $this->db->get_where('nasabah', ['idnasabah' => $idnasabah])->row_array();
		$data['deposito'] = $this->db->get_where('deposito', ['idnasabah' => $idnasabah])->result_array();
		$data['kredit'] = $this->db->get_where('kredit', ['idnasabah' => $idnasabah])->result_array();
		$data['tabungan'] = $this->db->get_where('tabungan', ['idnasabah' => $idnasabah])->result_array();

		// $data['tanggal_mulai'] = $tanggal_mulai;
		// $data['tanggal_selesai'] = $tanggal_selesai;
		// var_dump($data['kredit']);
		// die;
		if (!$data['deposito'] && !$data['kredit'] && !$data['tabungan']) {
			$this->session->set_flashdata('warning', 'Data Pengajuan Nasabah Kosong');
			redirect('pegawai/nasabah');
		}
		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-nasabah.pdf";
		$this->pdf->load_view('pegawai/laporan/laporannasabah', $data);
	}

	public function tabunganpermohonan($id)
	{

		$query = "SELECT `tabungan`.* , `nasabah`.*
				FROM `tabungan` JOIN `nasabah`
				ON `tabungan`.`idnasabah` = `nasabah`.`idnasabah`					
				WHERE `tabungan`.`idnasabah` = `nasabah`.`idnasabah` AND `tabungan`.`idpengajuantabungan` = $id
				";

		$data['tabungan'] = $this->db->query($query)->row_array();
		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "tabungan-permohonan.pdf";
		$this->pdf->load_view('pegawai/laporan/tabungan-permohonan', $data);
	}


	public function nasabahlaporanall()
	{

		$tanggal_mulai = $this->input->post('tanggal_mulai');
		$tanggal_selesai = $this->input->post('tanggal_selesai');
		$data['tanggal_mulai'] = $tanggal_mulai;
		$data['tanggal_selesai'] = $tanggal_selesai;
		//  $query = "SELECT SUM(jumlah),bulan,tahun
		//             FROM `pengunjung` 
		//             WHERE `tanggal` >= '$tanggal_mulai' AND `tanggal` <= '$tanggal_selesai' 
		//             GROUP BY bulan
		//             ORDER BY tanggal ASC";  
		$query = "SELECT `deposito`.* , `nasabah`.`nama`
					FROM `deposito` JOIN `nasabah`
					ON `deposito`.`idnasabah` = `nasabah`.`idnasabah`					
					WHERE `deposito`.`idnasabah` = `nasabah`.`idnasabah`               
					";
		$query = "SELECT idnasabah,SUM(jumlah) as total
                    FROM `tabungan`    
					WHERE `tanggal` >= '$tanggal_mulai' AND `tanggal` <= '$tanggal_selesai'                  
                    GROUP BY idnasabah
                    ";
		$tabungan = $this->db->query($query)->result_array();

		$nasabah = $this->db->get('nasabah')->result_array();
		$tampung = [];
		foreach ($nasabah as $n) {
			$temp = [];
			array_push($temp, $n['idnasabah']);
			array_push($temp, $n['nama']);
			$idnasabah = $n['idnasabah'];
			$query = "SELECT SUM(jumlah) as total_tabungan
                    FROM `tabungan`    
					WHERE `tanggal` >= '$tanggal_mulai' AND `tanggal` <= '$tanggal_selesai' AND `idnasabah` = $idnasabah                
                    GROUP BY idnasabah
					";
			$tabungan = $this->db->query($query)->row_array();
			if ($tabungan) {
				array_push($temp, intval($tabungan['total_tabungan']));
			} else {
				array_push($temp, 0);
			}
			$query = "SELECT SUM(jumlah) as total_kredit
                    FROM `kredit`    
					WHERE `tanggal` >= '$tanggal_mulai' AND `tanggal` <= '$tanggal_selesai' AND `idnasabah` = $idnasabah                
                    GROUP BY idnasabah
					";
			$kredit = $this->db->query($query)->row_array();
			if ($kredit) {
				array_push($temp, intval($kredit['total_kredit']));
			} else {
				array_push($temp, 0);
			}
			$query = "SELECT SUM(jumlah) as total_deposito
                    FROM `deposito`    
					WHERE `tanggal` >= '$tanggal_mulai' AND `tanggal` <= '$tanggal_selesai' AND `idnasabah` = $idnasabah                
                    GROUP BY idnasabah
					";
			$deposito = $this->db->query($query)->row_array();
			if ($deposito) {
				array_push($temp, intval($deposito['total_deposito']));
			} else {
				array_push($temp, 0);
			}

			array_push($tampung, $temp);
		}
		$data['tampung'] = $tampung;

		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-nasabah-all.pdf";
		$this->pdf->load_view('pegawai/laporan/laporannasabahall', $data);
	}
}
