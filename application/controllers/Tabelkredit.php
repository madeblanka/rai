<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tabelkredit extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Tabelkredit_model");
        $this->load->library('form_validation');
    }

    public function kredit()
    {
        $this->form_validation->set_rules('jumlah', 'jumlah', 'required|trim|greater_than[999999]');
        $this->form_validation->set_rules('lama', 'lama pinjaman', 'required|trim|less_than[61]');
        if ($this->form_validation->run() == false) {
            $this->load->view('perhitungan/kredit');
        } else {
            $jumlah = $this->input->post('jumlah');
            $lama = $this->input->post('lama');
            $query = "SELECT * 
                FROM `tabelkredit`
				WHERE  '$jumlah' >= `jumlah1` AND  '$jumlah' < `jumlah2` 
				";

            $data_kred = $this->db->query($query)->row_array();

            $bunga = $data_kred['bunga'];
            $pokok = $jumlah / $lama;
            $hitung = [];
            $bungahit = 0;
            $pokokhit = 0;
            $angsuran = 0;
            $total_bunga = 0;
            $total_pokok = 0;
            $total_angsuran = 0;
            $sisa_pinjaman = $jumlah;

            for ($i = 0; $i <= $lama; $i++) {
                $total_bunga += $bungahit;
                $total_pokok += $pokokhit;
                $total_angsuran += $angsuran;
                array_push($hitung, [
                    'periode' => $i + 1,
                    'bunga' => $bungahit,
                    'pokok' => $pokokhit,
                    'angsuran' => $angsuran,
                    'sisa_pinjaman' => $sisa_pinjaman,
                ]);

                $bungahit = $sisa_pinjaman * $bunga / 100;
                $pokokhit = $jumlah / $lama;
                $sisa_pinjaman = $sisa_pinjaman - $pokokhit;
                $angsuran = $bungahit + $pokokhit;
            }




            // var_dump($hitung);
            // die;

            $data['jumlah'] = $jumlah;
            $data['lama'] = $lama;
            $data['bunga'] = $bunga;
            $data['hitung'] = $hitung;
            $data['total_bunga'] = $total_bunga;
            $data['total_pokok'] = $total_pokok;
            $data['total_angsuran'] = $total_angsuran;

            $this->load->view('perhitungan/kredit', $data);
        }
    }
}
