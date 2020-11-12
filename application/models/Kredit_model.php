<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kredit_model extends CI_Model
{
    private $_table = "tabelkredit";
  
    public $idpengajuankredit;
    public $idnasabah;
    public $jumlah;
    public $bunga;
    public $bulan;
    public $tanggal;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($idpengajuankredit)
    {
        return $this->db->get_where($this->_table, ["idpengajuankredit" => $idpengajuankredit])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->idpengajuankredit = '200'.rand(000,999);
        $this->idnasabah = $post["idnasabah"];
        $this->jumlah = $post["jumlah"];
        $this->bunga = $post["bunga"];
        $this->bulan = $post["bulan"];
        $this->tanggal = date('Y-m-d');
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->idpengajuankredit = $post["idpengajuankredit"];
        $this->idnasabah = $post["idnasabah"];
        $this->jumlah = $post["jumlah"];
        $this->bunga = $post["bunga"];
        $this->bulan = $post["bulan"];
        $this->tanggal = $post["tanggal"];
        return $this->db->update($this->_table, $this, array('idpengajuankredit' => $post['idpengajuankredit']));
    }

    public function delete($idpengajuankredit)
    {
        return $this->db->delete($this->_table, array("idpengajuankredit" => $idpengajuankredit));
    }
}