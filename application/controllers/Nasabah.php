<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nasabah extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
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
		$this->form_validation->set_rules('nik', 'nik', 'required|trim');
		$this->form_validation->set_rules('nama', 'nama', 'required|trim');
		$this->form_validation->set_rules('email', 'email', 'required|trim');
		$this->form_validation->set_rules('username', 'username', 'required|trim');
		$this->form_validation->set_rules('password', 'password', 'required|trim');
		$this->form_validation->set_rules('jeniskelamin', 'jeniskelamin', 'required|trim');
		$this->form_validation->set_rules('pernikahan', 'pernikahan', 'required|trim');
		$this->form_validation->set_rules('notelp', 'no telp', 'required|trim');

		$this->form_validation->set_rules('tempatkerja', 'tempat kerja', 'required|trim');
		$this->form_validation->set_rules('lamakerja_bulan', 'lama kerja (bulan)', 'required|trim');
		$this->form_validation->set_rules('lamakerja_tahun', 'lama kerja (tahun)', 'required|trim');
		$this->form_validation->set_rules('jabatan', 'jabatan', 'required|trim');
		$this->form_validation->set_rules('gaji', 'gaji', 'required|trim');
		$this->form_validation->set_rules('umur', 'umur', 'required|trim');

		$this->form_validation->set_rules('tgl_lahir', 'tanggal lahir', 'required|trim');
		$this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
		$this->form_validation->set_rules('statusrumah', 'status rumah', 'required|trim');
		$this->form_validation->set_rules('kelurahan', 'kelurahan', 'required|trim');
		$this->form_validation->set_rules('kecamatan', 'kecamatan', 'required|trim');
		$this->form_validation->set_rules('provinsi', 'provinsi', 'required|trim');

		$this->form_validation->set_rules('namakerabat', 'nama kerabat', 'required|trim');
		$this->form_validation->set_rules('statuskerabat', 'status kerabat', 'required|trim');
		$this->form_validation->set_rules('alamatkerabat', 'alamat kerabat', 'required|trim');
		$this->form_validation->set_rules('pekerjaankerabat', 'pekerjaan kerabat', 'required|trim');
		$this->form_validation->set_rules('perusahaankerabat', 'perusahaan kerabat', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view("daftar");
		} else {
			$nasabah = $this->Nasabah_model->save();
			if ($nasabah == true) {
				$this->session->set_flashdata('message', 'Data Berhasil Disimpan');
				redirect("nasabah/login");
			} else {
				$this->load->view("daftar");
			}
		}
	}
	public function edit($idnasabah = null)
	{
		// $this->session->set_flashdata('message', 'Data Berhasil Dirubah');
		if (!isset($idnasabah)) redirect('pegawai/index');
		$siswa = $this->Nasabah_model;
		$data["nasabah"] = $siswa->getByNis($idnasabah);
		if (!$data["nasabah"]) show_404();

		$this->load->view("edit", $data);
	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login Page';
			$this->load->view('login', $data);
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $this->Nasabah_model->login();
			if ($user != null) {
				// cek password yg sdh di hash
				if ($password == $user['password']) {
					// kirim data ke halaman selanjutnya
					$data = [
						'username' => $user['username'],
						'nik' => $user['nik'],
					];
					$this->session->set_userdata($data);

					redirect('nasabah/dashboard');
				} else {
					$this->session->set_flashdata('warning', 'Password Salah');
					redirect('nasabah/login');
				}
			} else {


				$pegawai = $this->db->get_where('pegawai', ['username' => $this->input->post('username')])->row_array();
				if ($pegawai != null) {
					// cek password yg sdh di hash
					if ($password == $pegawai['password']) {
						// kirim data ke halaman selanjutnya
						$data = [
							'email' => $pegawai['email'],
							'username' => $pegawai['username'],
							'idpegawai' => $pegawai['idpegawai'],
						];
						$this->session->set_userdata($data);
						redirect('pegawai/index');
					} else {
						$this->session->set_flashdata('warning', 'Password Salah');
						redirect('nasabah/login');
					}
				} else {
					// user tdk ada
					// send pesan
					$this->session->set_flashdata('warning', 'Username Salah');
					redirect('nasabah/login');
				}

















				$this->session->set_flashdata('warning', 'Username Salah');
				redirect('nasabah/login');
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('nik');

		// send pesan
		$this->session->set_flashdata('message', 'Logout Berhasil');
		redirect('nasabah/index');
	}

	public function detailpengajuan()
	{
		// var_dump($this->session->userdata('nik'));
		// die;
		if ($this->session->userdata('nik')) {
			$nasabah = $this->db->get_where('nasabah', ['nik' => $this->session->userdata('nik')])->row_array();
		} else {
			$this->session->set_flashdata('warning', 'Anda Belum Login');
			redirect('nasabah/login');
		}
		$data['deposito'] = $this->db->get_where('deposito', ['idnasabah' => $nasabah['idnasabah']])->result_array();
		$data['kredit'] = $this->db->get_where('kredit', ['idnasabah' => $nasabah['idnasabah']])->result_array();
		$data['tabungan'] = $this->db->get_where('tabungan', ['idnasabah' => $nasabah['idnasabah']])->result_array();
		$this->load->view('pengajuan/detail', $data);
	}

	public function profile()
	{
		$data['nasabah'] = $this->db->get_where('nasabah', ['nik' => $this->session->userdata('nik')])->row_array();

		$this->load->view('nasabah/profile', $data);
	}
	public function nasabahedit()
	{
		$data['nasabah'] = $this->db->get_where('nasabah', ['nik' => $this->session->userdata('nik')])->row_array();

		$this->load->view('nasabah/edit', $data);
	}

	public function update()
	{
		$this->form_validation->set_rules('nik', 'nik', 'required|trim');
		$this->form_validation->set_rules('nama', 'nama', 'required|trim');
		$this->form_validation->set_rules('email', 'email', 'required|trim');
		$this->form_validation->set_rules('username', 'username', 'required|trim');
		$this->form_validation->set_rules('password', 'password', 'required|trim');
		$this->form_validation->set_rules('jeniskelamin', 'jeniskelamin', 'required|trim');
		$this->form_validation->set_rules('pernikahan', 'pernikahan', 'required|trim');
		$this->form_validation->set_rules('notelp', 'no telp', 'required|trim');

		$this->form_validation->set_rules('tempatkerja', 'tempat kerja', 'required|trim');
		$this->form_validation->set_rules('lamakerja_bulan', 'lama kerja (bulan)', 'required|trim');
		$this->form_validation->set_rules('lamakerja_tahun', 'lama kerja (tahun)', 'required|trim');
		$this->form_validation->set_rules('jabatan', 'jabatan', 'required|trim');
		$this->form_validation->set_rules('gaji', 'gaji', 'required|trim');
		$this->form_validation->set_rules('umur', 'umur', 'required|trim');

		$this->form_validation->set_rules('tgl_lahir', 'tanggal lahir', 'required|trim');
		$this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
		$this->form_validation->set_rules('statusrumah', 'status rumah', 'required|trim');
		$this->form_validation->set_rules('kelurahan', 'kelurahan', 'required|trim');
		$this->form_validation->set_rules('kecamatan', 'kecamatan', 'required|trim');
		$this->form_validation->set_rules('provinsi', 'provinsi', 'required|trim');

		$this->form_validation->set_rules('namakerabat', 'nama kerabat', 'required|trim');
		$this->form_validation->set_rules('statuskerabat', 'status kerabat', 'required|trim');
		$this->form_validation->set_rules('alamatkerabat', 'alamat kerabat', 'required|trim');
		$this->form_validation->set_rules('pekerjaankerabat', 'pekerjaan kerabat', 'required|trim');
		$this->form_validation->set_rules('perusahaankerabat', 'perusahaan kerabat', 'required|trim');

		$post = $this->input->post();
		$data = [
			'nik' => $post['nik'],
			'nama' => $post['nama'],
			'jeniskelamin' => $post['jeniskelamin'],
			'pernikahan' => $post['pernikahan'],
			'notelp' => $post['notelp'],

			'tempatkerja' => $post['tempatkerja'],
			'lamakerja' => $post['lamabekerja'],
			'jabatan' => $post['jabatan'],
			'gaji' => $post['gaji'],
			'umur' => $post['umur'],

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
		redirect('nasabah/profile');
	}

	public function dashboard()
	{
		// var_dump($this->session->userdata('nik'));
		// die;
		$nasabah = $this->db->get_where('nasabah', ['nik' => $this->session->userdata('nik')])->row_array();
		$idnasabah = $nasabah['idnasabah'];
		$this->db->where('idnasabah =', $idnasabah);
		$this->db->where('status =', 'Menunggu');
		$this->db->from('deposito');
		$data['deposito_menunggu']  = $this->db->count_all_results();

		$this->db->where('idnasabah =', $idnasabah);
		$this->db->where('status =', 'Disetujui');
		$this->db->from('deposito');
		$data['deposito_disetujui']  = $this->db->count_all_results();

		$this->db->where('idnasabah =', $idnasabah);
		$this->db->where('status =', 'Menunggu');
		$this->db->from('kredit');
		$data['kredit_menunggu']  = $this->db->count_all_results();

		$this->db->where('idnasabah =', $idnasabah);
		$this->db->where('status =', 'Disetujui');
		$this->db->from('kredit');
		$data['kredit_disetujui']  = $this->db->count_all_results();

		$this->db->where('idnasabah =', $idnasabah);
		$this->db->where('status =', 'Menunggu');
		$this->db->from('tabungan');
		$data['tabungan_menunggu']  = $this->db->count_all_results();

		$this->db->where('idnasabah =', $idnasabah);
		$this->db->where('status =', 'Disetujui');
		$this->db->from('tabungan');
		$data['tabungan_disetujui']  = $this->db->count_all_results();

		$this->load->view("nasabah/dashboard", $data);
	}
}
