<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tabeldeposito_model extends CI_Model
{
    private $_table = "tabeldeposito";

    public $iddeposito;
    public $jumlah;
    public $bunga;
    public $bulan;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($iddeposito)
    {
        return $this->db->get_where($this->_table, ["iddeposito" => $iddeposito])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->iddeposito = rand(000,999);
        $this->jumlah = $post["jumlah"];
        $this->bunga = $post["bunga"];
        $this->bulan = $post["bulan"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->iddeposito = $post["iddeposito"];
        $this->jumlah = $post["jumlah"];
        $this->bunga = $post["bunga"];
        $this->bulan = $post["bulan"];
        return $this->db->update($this->_table, $this, array('iddeposito' => $post['iddeposito']));
    }

    public function delete($iddeposito)
    {
        return $this->db->delete($this->_table, array("iddeposito" => $iddeposito));
    }
}   