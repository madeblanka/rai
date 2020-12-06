<?php $this->load->view("_partialsindex/head.php") ?>
<?php $this->load->view("_partialsindex/navbar.php") ?>
<section id="home" class="video-hero" style="height: 500px; background-image: url(<?php echo base_url('assetsindex/images/cover_img_1.jpg') ?>);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
    <div class="overlay"></div>
    <div class="display-t display-t2 text-center">
        <div class="display-tc display-tc2">
            <div class="container">
                <div class="col-md-12 col-md-offset-0">
                    <div class="animate-box">
                        <h2>Pengajuan Deposito</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="colorlib-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <?php if (isset($deposito)) { ?>
                    <h3>Pengajuan Deposito</h3>
                    <hr>
                    <?php foreach ($deposito as $d) : ?>
                        <h4>Jumlah Deposito: Rp. <?= number_format($d['jumlah'], 0, ',', '.'); ?></h4>
                        <div style="margin-left: 40px;">
                            <p>Jangka Waktu : <?= $d['waktu']; ?></p>
                            <p>Bunga : <?= $d['bunga']; ?> % per Tahun</p>
                            <p>Status Pengajuan : <?= $d['status']; ?></p>
                        </div>
                        <br>
                    <?php endforeach; ?>
                <?php } ?>
            </div>
            <div class="col-lg-4">
                <?php if (isset($kredit)) { ?>
                    <h3>Pengajuan Pinjaman</h3>
                    <hr>
                    <?php foreach ($kredit as $k) : ?>
                        <h4>Jumlah Pinjaman: Rp. <?= number_format($k['jumlah'], 0, ',', '.'); ?></h4>
                        <div style="margin-left: 40px;">
                            <p>Jangka Waktu : <?= $k['bulan']; ?> Bulan</p>
                            <p>Bunga : <?= $k['bunga']; ?> % per Bulan</p>
                            <p>Status Pengajuan : <?= $k['status']; ?></p>
                            <p>.</p>
                        </div>
                        <br>
                    <?php endforeach; ?>
                <?php } ?>
            </div>
            <div class="col-lg-4">
                <?php if (isset($tabungan)) { ?>
                    <h3>Pengajuan Tabungan Berjangka</h3>
                    <hr>
                    <?php foreach ($tabungan as $t) : ?>
                        <h4>Jumlah Setoran: Rp. <?= number_format($t['jumlah'], 0, ',', '.'); ?></h4>
                        <div style="margin-left: 40px;">
                            <p>Jangka Waktu : <?= $t['waktu']; ?> Bulan</p>
                            <p>Bunga : <?= $t['bunga']; ?> % per Tahun</p>
                            <p>Status Pengajuan : <?= $t['status']; ?></p>
                        </div>
                        <br>
                    <?php endforeach; ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("_partialsindex/footer.php") ?>