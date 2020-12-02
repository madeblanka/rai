<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tabeltabungan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Tabeltabungan_model");
        $this->load->library('form_validation');
    }
    public function tabungan()
    {
        // $data["tabungan"] = $this->Tabeltabungan_model->getAll();
        // $this->load->view('perhitungan/tabungan',$data);

        $this->form_validation->set_rules('jumlah', 'jumlah', 'required|trim|greater_than[10000]');
        $this->form_validation->set_rules('bunga', 'jangka waktu', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['tabungan'] = $this->db->get('tabeltabungan')->result_array();
            // var_dump($data['tabungan']);
            // die;
            $this->load->view('perhitungan/tabungan', $data);
        } else {
            $data['tabungan'] = $this->db->get('tabeltabungan')->result_array();
            $data_tab = $this->db->get_where('tabeltabungan', ['idtabungan' => $this->input->post('bunga')])->row_array();

            $data['idtabungan'] = $this->input->post('bunga');
            $data['jumlah'] = $this->input->post('jumlah');
            $data['lama'] = intval(substr($data_tab['bulan'], 0, 2));
            $data['bunga'] = $data_tab['bunga'];
            $data['date'] = date("d-m-Y");

            $jumlah =  $this->input->post('jumlah');
            $bunga = $data_tab['bunga'];
            $lama = intval(substr($data_tab['bulan'], 0, 2));

            $hitung = [];
            $bungahit = 0;
            $setoranhit = 0;
            $tabungan = 0;
            $total_bunga = 0;
            $total_setoran = 0;
            $total_tabungan = 0;

            // for ($i = 0; $i < $lama; $i++) {
            //     $setoranhit = $jumlah;
            //     $tabungan = $tabungan + ($bungahit + $setoranhit);
            //     array_push($hitung, [
            //         'periode' => $i + 1,
            //         'setoran' => $setoranhit,
            //         'bunga' => $bungahit,
            //         'tabungan' => $tabungan,
            //     ]);

            //     $bungahit = $jumlah * $bunga / 100;
            //     // $bungahit = $tabungan * $bunga / 100;
            //     $total_setoran += $setoranhit;
            //     $total_bunga += $bungahit;
            // }

            for ($i = 0; $i < $lama; $i++) {
                $setoranhit = $jumlah;
                $bungahit = $jumlah * $bunga / 100;
                $tabungan = $tabungan + ($bungahit + $setoranhit);
                array_push($hitung, [
                    'periode' => $i + 1,
                    'setoran' => $setoranhit,
                    'bunga' => $bungahit,
                    'tabungan' => $tabungan,
                ]);
                $total_setoran += $setoranhit;
                $total_bunga += $bungahit;
            }



            $data['hitung'] = $hitung;
            $data['total_setoran'] = $total_setoran;
            $data['total_bunga'] = $total_bunga;
            $data['total_tabungan'] = $tabungan;

            $this->load->view('perhitungan/tabungan', $data);
        }
    }
}
