<?php $this->load->view("_partialsadmin/head.php") ?>
<?php $this->load->view("_partialsadmin/sidebar.php") ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <div class="row mt-5">
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header">
                            Detail Deposito
                        </div>
                        <div class="card-body">
                            <div class="col-md-6">
                                <table style="margin-left: 30px;">
                                    <tr>
                                        <th style="padding: 5px;">Id Pengajuan Deposito</th>
                                        <td style="padding: 5px;">:</td>
                                        <td style="padding: 5px;"><?= $deposito['idpengajuandeposito']; ?></td>
                                    </tr>
                                    <tr>
                                        <th style="padding: 5px;">Tanggal</th>
                                        <td style="padding: 5px;">:</td>
                                        <td style="padding: 5px;"><?php echo date('d-m-Y', strtotime($deposito['tanggal'])) ?></td>
                                    </tr>
                                    <tr>
                                        <th style="padding: 5px;">Id Nasabah</th>
                                        <td style="padding: 5px;">:</td>
                                        <td style="padding: 5px;"><?= $deposito['idnasabah']; ?></td>
                                    </tr>
                                    <tr>
                                        <th style="padding: 5px;">Nama Nasabah</th>
                                        <td style="padding: 5px;">:</td>
                                        <td style="padding: 5px;"><?= $deposito['nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <th style="padding: 5px;">Alamat</th>
                                        <td style="padding: 5px;">:</td>
                                        <td style="padding: 5px;"><?= $deposito['alamat']; ?></td>
                                    </tr>
                                    <tr>
                                        <th style="padding: 5px;">Jumlah Deposito</th>
                                        <td style="padding: 5px;">:</td>
                                        <td style="padding: 5px;"><?= number_format($deposito['jumlah'], 0, ',', '.') ?> </td>
                                    </tr>
                                    <tr>
                                        <th style="padding: 5px;">Jangka Waktu</th>
                                        <td style="padding: 5px;">:</td>
                                        <td style="padding: 5px;"><?= $deposito['waktu']; ?> Bulan</td>
                                    </tr>
                                    <tr>
                                        <th style="padding: 5px;">Bunga</th>
                                        <td style="padding: 5px;">:</td>
                                        <td style="padding: 5px;"><?= $deposito['bunga']; ?> %</td>
                                    </tr>
                                    <tr>
                                        <th style="padding: 5px;">Status</th>
                                        <td style="padding: 5px;">:</td>
                                        <td style="padding: 5px;"><?= $deposito['status']; ?></td>
                                    </tr>
                                </table>
                                <div class="container">
                                    <div class="row mt-3 ml-2">
                                        <a href="<?php echo site_url('pegawai/depositopermohonan/' . $deposito['idpengajuandeposito']) ?>" class="btn btn-success btn-sm">Cetak Pengajuan</a>

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