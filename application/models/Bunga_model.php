<?php defined('BASEPATH') or exit('No direct script access allowed');

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
        // $this->db->get_where('user_role', ['id' => $role_id])->row_array();
        // return $this->db->get_where('bunga', array('idbunga' => 'deposito'));
        // return $this->db->get_where($this->_table, ["idbunga" => 'deposito'])->row();
        return $this->db->get_where('bunga', ['idbunga' => 'deposito'])->result_array();
    }
}
