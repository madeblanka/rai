<?php $this->load->view("_partialsadmin/head.php") ?>
<?php $this->load->view("_partialsadmin/sidebar.php") ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <div class="row mt-5">
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header">
                            Detail Kredit
                        </div>
                        <div class="card-body">
                            <div class="col-md-6">
                                <table style="margin-left: 30px;">
                                    <tr>
                                        <th style="padding: 5px;">Id Pengajuan Kredit</th>
                                        <td style="padding: 5px;">:</td>
                                        <td style="padding: 5px;"><?= $kredit['idpengajuankredit']; ?></td>
                                    </tr>
                                    <tr>
                                        <th style="padding: 5px;">Tanggal</th>
                                        <td style="padding: 5px;">:</td>
                                        <td style="padding: 5px;"><?= date('d-m-Y', strtotime($kredit['tanggal'])) ?></td>
                                    </tr>
                                    <tr>
                                        <th style="padding: 5px;">Id Nasabah</th>
                                        <td style="padding: 5px;">:</td>
                                        <td style="padding: 5px;"><?= $kredit['idnasabah']; ?></td>
                                    </tr>
                                    <tr>
                                        <th style="padding: 5px;">Nama Nasabah</th>
                                        <td style="padding: 5px;">:</td>
                                        <td style="padding: 5px;"><?= $kredit['nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <th style="padding: 5px;">Alamat</th>
                                        <td style="padding: 5px;">:</td>
                                        <td style="padding: 5px;"><?= $kredit['alamat']; ?></td>
                                    </tr>
                                    <tr>
                                        <th style="padding: 5px;">Jumlah kredit</th>
                                        <td style="padding: 5px;">:</td>
                                        <td style="padding: 5px;"><?= number_format($kredit['jumlah'], 0, ',', '.') ?> </td>
                                    </tr>
                                    <tr>
                                        <th style="padding: 5px;">Jangka Waktu</th>
                                        <td style="padding: 5px;">:</td>
                                        <td style="padding: 5px;"><?= $kredit['bulan']; ?> Bulan</td>
                                    </tr>
                                    <tr>
                                        <th style="padding: 5px;">Bunga</th>
                                        <td style="padding: 5px;">:</td>
                                        <td style="padding: 5px;"><?= $kredit['bunga']; ?> %</td>
                                    </tr>
                                    <tr>
                                        <th style="padding: 5px;">Status</th>
                                        <td style="padding: 5px;">:</td>
                                        <td style="padding: 5px;"><?= $kredit['status']; ?></td>
                                    </tr>
                                </table>
                                <div class="container">
                                    <div class="row mt-3 ml-2">
                                        <a href="<?php echo site_url('pegawai/kreditpermohonan/' . $kredit['idpengajuankredit']) ?>" class="btn btn-success btn-sm">Cetak Surat Pengajuan</a>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; 2020</div>
            </div>
        </div>
    </footer>
</div>
</div>
<?php $this->load->view("_partialsadmin/footer.php") ?>