<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bunga_model extends CI_Model
{
    private $_table = "bunga";

    public $idbunga;
    public $bunga;
    
    public function getkredit()
    {
        return $this->db->get_where('bunga', array('idbunga' => 'kredit'));
    }
    public function gettabungan()
    {
        return $this->db->get_where('bunga', array('idbunga' => 'tabungan'));
    }
    public function getdeposito()
    {           
        return $this->db->get_where($this->_table, ["idbunga" => 'deposito'])->row();
    }
}