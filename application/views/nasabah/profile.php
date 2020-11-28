<?php $this->load->view("_partialsindex/head.php") ?>
<?php $this->load->view("_partialsindex/navbar.php") ?>
<section id="home" class="video-hero" style="height: 500px; background-image: url(<?php echo base_url('assetsindex/images/cover_img_1.jpg') ?>);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
    <div class="overlay"></div>
    <div class="display-t display-t2 text-center">
        <div class="display-tc display-tc2">
            <div class="container">
                <div class="col-md-12 col-md-offset-0">
                    <div class="animate-box">
                        <h2>User Profile</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="colorlib-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php if (isset($nasabah)) { ?>
                    <h3>Profile Nasabah</h3>
                    <table style="margin-left: 30px;">
                        <tr>
                            <th style="padding: 5px;">NIK</th>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;"><?= $nasabah['nik']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding: 5px;">Nama</th>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;"><?= $nasabah['nama']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding: 5px;">Email</th>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;"><?= $nasabah['email']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding: 5px;">Username</th>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;"><?= $nasabah['username']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding: 5px;">Jenis Kelamin</th>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;"><?= $nasabah['jeniskelamin']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding: 5px;">Pernikahan</th>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;"><?= $nasabah['pernikahan']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding: 5px;">Telepon</th>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;"><?= $nasabah['notelp']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding: 5px;">Tempat Kerja</th>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;"><?= $nasabah['tempatkerja']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding: 5px;">Lama Kerja (tahun)</th>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;"><?= $nasabah['lamakerja_tahun']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding: 5px;">Lama Kerja (bulan)</th>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;"><?= $nasabah['lamakerja_bulan']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding: 5px;">Jabatan</th>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;"><?= $nasabah['jabatan']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding: 5px;">Gaji</th>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;"><?= $nasabah['gaji']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding: 5px;">Umur</th>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;"><?= $nasabah['umur']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding: 5px;">Alamat</th>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;"><?= $nasabah['alamat']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding: 5px;">Tanggal Lahir</th>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;"><?= date("d-m-Y", strtotime($nasabah['tgl_lahir'])); ?></td>
                        </tr>
                        <tr>
                            <th style="padding: 5px;">Status Rumah</th>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;"><?= $nasabah['statusrumah']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding: 5px;">Nama Kerabat</th>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;"><?= $nasabah['namakerabat']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding: 5px;">Status Kerabat</th>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;"><?= $nasabah['statuskerabat']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding: 5px;">Alamat Kerabat</th>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;"><?= $nasabah['alamatkerabat']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding: 5px;">Pekerjaan Kerabat</th>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;"><?= $nasabah['pekerjaankerabat']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding: 5px;">Perusahaan Kerabat</th>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;"><?= $nasabah['perusahaankerabat']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding: 5px;">Kelurahan</th>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;"><?= $nasabah['kelurahan']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding: 5px;">Kecamatan</th>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;"><?= $nasabah['kecamatan']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding: 5px;">Provinsi</th>
                            <td style="padding: 5px;">:</td>
                            <td style="padding: 5px;"><?= $nasabah['provinsi']; ?></td>
                        </tr>
                    </table>
                    <!-- <a href="<?php// echo site_url('nasabah/nasabahedit/') ?>" class="btn btn-small btn-warning" style="margin-top: 30px;"><i class="fas fa-edit"></i> Edit Profile</a> -->
                <?php } ?>
            </div>

        </div>
    </div>
</div>
<?php $this->load->view("_partialsindex/footer.php") ?>