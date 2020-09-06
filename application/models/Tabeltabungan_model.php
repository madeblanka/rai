<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tabeltabungan_model extends CI_Model
{
    private $_table = "tabeltabungan";

    public $idtabungan;
    public $jumlah;
    public $bunga;
    public $bulan;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($idtabungan)
    {
        return $this->db->get_where($this->_table, ["idtabungan" => $idtabungan])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->idtabungan = rand(000,999);
        $this->jumlah = $post["jumlah"];
        $this->bunga = $post["bunga"];
        $this->bulan = $post["bulan"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->idtabungan = $post["idtabungan"];
        $this->jumlah = $post["jumlah"];
        $this->bunga = $post["bunga"];
        $this->bulan = $post["bulan"];
        return $this->db->update($this->_table, $this, array('idtabungan' => $post['idtabungan']));
    }

    public function delete($idtabungan)
    {
        return $this->db->delete($this->_table, array("idtabungan" => $idtabungan));
    }
}   