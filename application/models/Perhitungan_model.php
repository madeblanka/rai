<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Perhitungan_model extends CI_Model
{
    private $_table = "tabelperhitungan";

    public $idperhitungan;
    public $idnasabah;
    public $jenis;
    public $jumlah;
    public $bunga;
    public $bulan;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getByIdperhitungan($idperhitungan)
    {
        return $this->db->get_where($this->_table, ["idperhitungan" => $idperhitungan])->row();
    }

    public function grafikdeposito()
    {
        $this->db->where('jenis','deposito');
        return $this->db->get('tabelperhitungan')->num_rows();
    }

    public function grafiktabungan()
    {
        $this->db->where('jenis','tabungan');
        return $this->db->get('tabelperhitungan')->num_rows();
    }

    public function grafikkredit()
    {
        $this->db->where('jenis','kredit');
        return $this->db->get('tabelperhitungan')->num_rows();
    }

    public function save($idnasabah)
    {
        $post = $this->input->post();
        $this->idperhitungan = rand(00000,99999);
        $this->idnasabah = $idnasabah;
        $this->jenis = $post["jenis"];
        $this->jumlah = $post["jumlah"];
        $this->bunga = $post["bunga"];
        $this->bulan = $post["bulan"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->idperhitungan = $post["idperhitungan"];
        $this->idnasabah = $post["idnasabah"];
        $this->jenis = $post["jenis"];
        $this->jumlah = $post["jumlah"];
        $this->bunga = $post["bunga"];
        $this->bulan = $post["bulan"];
        return $this->db->update($this->_table, $this, array('idperhitungan' => $post['idperhitungan']));
    }

    public function delete($idperhitungan)
    {
        return $this->db->delete($this->_table, array("idperhitungan" => $idperhitungan));
    }
}   