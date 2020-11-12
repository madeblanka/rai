<?php $this->load->view("_partialsindex/head.php") ?>
<?php $this->load->view("_partialsindex/navbar.php") ?>
<section id="home" class="video-hero" style="height: 500px; background-image: url(<?php echo base_url('assetsindex/images/cover_img_1.jpg') ?>);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
    <div class="overlay"></div>
    <div class="display-t display-t2 text-center">
        <div class="display-tc display-tc2">
            <div class="container">
                <div class="col-md-12 col-md-offset-0">
                    <div class="animate-box">
                        <h2>Dashboard</h2>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <table class="bg-danger">
                                        <tr>
                                            <th style="padding: 10px;">Pengajuan Deposito</th>
                                        </tr>
                                        <tr>
                                            <td style="padding:10px">Disetujui <?= $deposito_disetujui; ?></td>
                                            <td style="padding:10px">Menunggu <?= $deposito_menunggu; ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-4">
                                    <table class="bg-info">
                                        <tr>
                                            <th style="padding: 10px;">Pengajuan Kredit</th>
                                        </tr>
                                        <tr>
                                            <td style="padding:10px">Disetujui <?= $kredit_disetujui; ?></td>
                                            <td style="padding:10px">Menunggu <?= $kredit_menunggu; ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-4">
                                    <table class="bg-success">
                                        <tr>
                                            <th style="padding: 10px;">Pengajuan Tabungan</th>
                                        </tr>
                                        <tr>
                                            <td style="padding:10px">Disetujui <?= $tabungan_disetujui; ?></td>
                                            <td style="padding:10px">Menunggu <?= $tabungan_menunggu; ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php $this->load->view("_partialsindex/footer.php") ?>