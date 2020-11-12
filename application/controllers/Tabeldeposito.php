<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tabeldeposito extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Tabeldeposito_model");
        $this->load->library('form_validation');
    }
    public function deposito()
    {
        $this->form_validation->set_rules('jumlah', 'jumlah', 'required|trim|greater_than[4999999]');
        $this->form_validation->set_rules('bunga', 'bunga', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['deposito'] = $this->db->get('tabeldeposito')->result_array();
            // $this->session->set_flashdata('warning', 'Data Belum Lengkap');
            $this->load->view('perhitungan/deposito', $data);
        } else {
            $data['deposito'] = $this->db->get('tabeldeposito')->result_array();
            $data['jumlah'] = $this->input->post('jumlah');
            $data['iddeposito'] = $this->input->post('bunga');
            $data_depo = $this->db->get_where('tabeldeposito', ['iddeposito' => $this->input->post('bunga')])->row_array();
            $data['bunga_dep'] = floatval($data_depo['bunga']);

            $data['bulan'] = intval(substr($data_depo['bulan'], 0, 2));
            $bungaperbulan = ($data['bunga_dep'] * $data['jumlah'] / 100) / 12;

            if ($bungaperbulan > 240000) {
                $data['pajakperbulan'] = $bungaperbulan * (10 / 100);
                $data['pajak'] = $data['pajakperbulan'] * $data['bulan'];
                $data['totbunga'] = $bungaperbulan * $data['bulan'];

                $data['bungaperbulansblpajak'] = $bungaperbulan;
                $data['bungaperbulan'] = $bungaperbulan - $data['pajakperbulan'];
                $data['bunga'] =  $data['totbunga'] - $data['pajak'];
                // $data['bunga'] = ($data['bungaperbulan'] * $data['bulan']);
            } else {
                $data['bunga'] = ($bungaperbulan * $data['bulan']);
                $data['bungaperbulan'] = $bungaperbulan;
            }
            $this->load->view('perhitungan/deposito', $data);
        }
    }
}
