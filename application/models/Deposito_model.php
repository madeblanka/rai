<?php defined('BASEPATH') or exit('No direct script access allowed');

class Deposito_model extends CI_Model
{
    private $_table = "deposito";

    public $idpengajuandeposito;
    public $idnasabah;
    public $jenissimpanan;
    public $jumlah;
    public $waktu;
    public $pembayaranbungan;
    public $ahliwaris;
    public $statusahliwaris;
    public $tanggal;
    public $status;
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($idpengajuandeposito)
    {
        return $this->db->get_where($this->_table, ["idpengajuandeposito" => $idpengajuandeposito])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->idpengajuandeposito = '100' . rand(000, 999);
        $this->idnasabah = $post["idnasabah"];
        $this->jumlah = $post["jumlah"];
        $this->waktu = $post["waktu"];
        $this->ahliwaris = $post["ahliwaris"];
        $this->statusahliwaris = $post["statusahliwaris"];
        $this->tanggal = date('Y-m-d');
        $this->status = "Menunggu";
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->idpengajuandeposito = $post["idpengajuandeposito"];
        $this->idnasabah = $post["idnasabah"];
        $this->jenissimpanan = $post["ahljenissimpananiwaris"];
        $this->jumlah = $post["jumlah"];
        $this->waktu = $post["waktu"];
        $this->pembayaranbungan = $post["pembayaranbungan"];
        $this->ahliwaris = $post["ahliwaris"];
        $this->statusahliwaris = $post["statusahliwaris"];
        $this->tanggal = $post["tanggal"];
        $this->status = $post["status"];
        return $this->db->update($this->_table, $this, array('idpengajuandeposito' => $post['idpengajuandeposito']));
    }

    public function delete($idpengajuandeposito)
    {
        return $this->db->delete($this->_table, array("idpengajuandeposito" => $idpengajuandeposito));
    }
}
