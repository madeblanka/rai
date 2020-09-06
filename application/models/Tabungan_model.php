<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tabungan_model extends CI_Model
{
    private $_table = "tabungan";

    public $idpengajuantabungan;
    public $idnasabah;
    public $ahliwaris;
    public $statusahliwaris;
    public $jenistabungan;
    public $bunga;
    public $jumlah;
    public $total;
    public $tanggal;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($idpengajuantabungan)
    {
        return $this->db->get_where($this->_table, ["idpengajuantabungan" => $idpengajuantabungan])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->idpengajuantabungan = '300'.rand(000,999);
        $this->idnasabah = $post["idnasabah"];
        $this->ahliwaris = $post["ahliwaris"];
        $this->statusahliwaris = $post["statusahliwaris"];
        $this->jenistabungan = $post["jenistabungan"];
        $this->bunga = $post["bunga"];
        $this->jumlah = $post["jumlah"];
        $this->total = $post["total"];
        $this->tanggal = date('Y-m-d');
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->idpengajuantabungan = $post["idpengajuantabungan"];
        $this->idnasabah = $post["idnasabah"];
        $this->ahliwaris = $post["ahliwaris"];
        $this->statusahliwaris = $post["statusahliwaris"];
        $this->jenistabungan = $post["jenistabungan"];
        $this->bunga = $post["bunga"];
        $this->jumlah = $post["jumlah"];
        $this->total = $post["total"];
        $this->tanggal = date('Y-m-d');
        return $this->db->update($this->_table, $this, array('idpengajuantabungan' => $post['idpengajuantabungan']));
    }

    public function delete($idpengajuantabungan)
    {
        return $this->db->delete($this->_table, array("idpengajuantabungan" => $idpengajuantabungan));
    }
}   