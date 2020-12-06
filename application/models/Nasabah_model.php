<?php defined('BASEPATH') or exit('No direct script access allowed');

class Nasabah_model extends CI_Model
{
    private $_table = "nasabah";

    public $idnasabah;
    public $password;
    public $nik;
    public $nama;
    public $jeniskelamin;
    public $pernikahan;
    public $notelp;
    public $tempatkerja;
    public $lamakerja_tahun;
    public $lamakerja_bulan;
    public $tgl_lahir;
    public $jabatan;
    public $gaji;
    public $alamat;
    public $statusrumah;
    public $namakerabat;
    public $alamatkerabat;
    public $pekerjaankerabat;
    public $ahliwaris;
    public $statusahliwaris;


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($idnasabah)
    {
        return $this->db->get_where($this->_table, ["idnasabah" => $idnasabah])->row();
    }

    public function save()
    {
        $timestamp = date("Y-m-d H:i:s");

        $post = $this->input->post();
        $this->idnasabah = '5171' . rand(00000, 99999);
        // $this->password = rand(000000, 999999);
        $this->password = $post["password"];
        $this->nik = $post["nik"];
        $this->username = $post["username"];
        $this->nama = $post["nama"];
        $this->jeniskelamin = $post["jeniskelamin"];
        $this->pernikahan = $post["pernikahan"];
        $this->notelp = $post["notelp"];
        $this->tempatkerja = $post["tempatkerja"];
        $this->lamakerja_tahun = $post["lamakerja_tahun"];
        $this->lamakerja_bulan = $post["lamakerja_bulan"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->jabatan = $post["jabatan"];
        $this->gaji = $post["gaji"];
        $this->alamat = $post["alamat"];
        $this->statusrumah = $post["statusrumah"];
        $this->namakerabat = $post["namakerabat"];
        $this->alamatkerabat = $post["alamatkerabat"];
        $this->pekerjaankerabat = $post["pekerjaankerabat"];
        $this->status = "Tidak Aktif";
        $this->ahliwaris = $post["ahliwaris"];
        $this->statusahliwaris = $post["statusahliwaris"];
        $this->tgl_input = $timestamp;
        return $this->db->insert($this->_table, $this);
    }

    // public function update()
    // {
    //     $timestamp = date("Y-m-d H:i:s");

    //     $post = $this->input->post();
    //     $this->idnasabah = $post["idnasabah"];
    //     $this->password = $post["password"];
    //     $this->nik = $post["nik"];
    //     $this->email = $post["email"];
    //     $this->username = $post["username"];
    //     $this->nama = $post["nama"];
    //     $this->price = $post["price"];
    //     $this->jeniskelamin = $post["jeniskelamin"];
    //     $this->pernikahan = $post["pernikahan"];
    //     $this->notelp = $post["notelp"];
    //     $this->tempatkerja = $post["tempatkerja"];
    //     $this->lamakerja_tahun = $post["lamakerja_tahun"];
    //     $this->lamakerja_bulan = $post["lamakerja_bulan"];
    //     $this->tgl_lahir = $post["tgl_lahir"];
    //     $this->jabatan = $post["jabatan"];
    //     $this->gaji = $post["gaji"];
    //     $this->umur = $post["umur"];
    //     $this->alamat = $post["alamat"];
    //     $this->statusrumah = $post["statusrumah"];
    //     $this->namakerabat = $post["namakerabat"];
    //     $this->statuskerabat = $post["statuskerabat"];
    //     $this->alamatkerabat = $post["alamatkerabat"];
    //     $this->pekerjaankerabat = $post["pekerjaankerabat"];
    //     $this->perusahaankerabat = $post["perusahaankerabat"];
    //     $this->kelurahan = $post["kelurahan"];
    //     $this->kecamatan = $post["kecamatan"];
    //     $this->provinsi = $post["provinsi"];
    //     $this->tgl_update = $timestamp;
    //     return $this->db->update($this->_table, $this, array('idnasabah' => $post['idnasabah']));
    // }

    public function delete($idnasabah)
    {
        return $this->db->delete($this->_table, array("idnasabah" => $idnasabah));
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        return $this->db->get_where('nasabah', ['username' => $username])->row_array();
    }
}
