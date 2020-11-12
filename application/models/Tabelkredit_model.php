<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tabelkredit_model extends CI_Model
{
    private $_table = "tabelkredit";

    public $idkredit;
    public $jumlah;
    public $bunga;
    public $bulan;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($idkredit)
    {
        return $this->db->get_where($this->_table, ["idkredit" => $idkredit])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->idkredit = rand(000,999);
        $this->jumlah = $post["jumlah"];
        $this->bunga = $post["bunga"];
        $this->bulan = $post["bulan"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->idkredit = $post["idkredit"];
        $this->jumlah = $post["jumlah"];
        $this->bunga = $post["bunga"];
        $this->bulan = $post["bulan"];
        return $this->db->update($this->_table, $this, array('idkredit' => $post['idkredit']));
    }

    public function delete($idkredit)
    {
        return $this->db->delete($this->_table, array("idkredit" => $idkredit));
    }
}   