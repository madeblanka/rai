<?php $this->load->view("_partialsindex/head.php") ?>
<?php $this->load->view("_partialsindex/navbar.php") ?>
<section id="home" class="video-hero" style="height: 500px; background-image: url(<?php echo base_url('assetsindex/images/cover_img_1.jpg') ?>);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
    <div class="overlay"></div>
    <div class="display-t display-t2 text-center">
        <div class="display-tc display-tc2">
            <div class="container">
                <div class="col-md-12 col-md-offset-0">
                    <div class="animate-box">
                        <h2>Edit Profile Nasabah</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="colorlib-blog">
    <div class="container">
        <div class="row">
            <form action="<?php echo site_url('nasabah/update') ?>" method="post">
                <input type="hidden" value="<?= $nasabah['idnasabah']; ?>" name="idnasabah">
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" name="nik" placeholder="NIK" required value="<?= $nasabah['nik']; ?>">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?= $nasabah['nama']; ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" value="<?= $nasabah['email']; ?>">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username" value="<?= $nasabah['username']; ?>">
                </div>
                <div class="form-group">
                    <label for="nama">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jeniskelamin" id="pria" value="Pria" <?php echo ($nasabah['jeniskelamin'] == 'Pria') ? 'checked' : '' ?>>
                        <label class="form-check-label" for="pria">
                            Pria
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jeniskelamin" id="perempuan" value="Perempuan" <?php echo ($nasabah['jeniskelamin'] == 'Perempuan') ? 'checked' : '' ?>>
                        <label class="form-check-label" for="perempuan">
                            Perempuan
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pernikahan" id="belummenikah" value="Belum Menikah" <?php echo ($nasabah['pernikahan'] == 'Belum Menikah') ? 'checked' : '' ?>>
                        <label class="form-check-label" for="belummenikah">
                            Belum Menikah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pernikahan" id="menikah" value="Menikah" <?php echo ($nasabah['pernikahan'] == 'Menikah') ? 'checked' : '' ?>>
                        <label class="form-check-label" for="menikah">
                            Menikah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pernikahan" id="ceraihidup" value="Cerai Hidup" <?php echo ($nasabah['pernikahan'] == 'Cerai Hidup') ? 'checked' : '' ?>>
                        <label class="form-check-label" for="ceraihidup">
                            Cerai Hidup
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">No Handphone</label>
                    <input type="number" class="form-control" name="notelp" aria-describedby="emailHelp" placeholder="08xxxxx" value="<?= $nasabah['notelp']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tempat Kerja</label>
                    <input type="text" class="form-control" name="tempatkerja" placeholder="PT.../ CV... / UD..." value="<?= $nasabah['tempatkerja']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Lama Bekerja</label>
                    <input type="text" class="form-control" name="lamabekerja" aria-describedby="emailHelp" placeholder="1Tahun 1 Bulan" value="<?= $nasabah['lamakerja']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" placeholder="Jabatan" value="<?= $nasabah['jabatan']; ?>">
                </div>
                <div class="form-group">
                    <label for="pendapatan">Pendapatan Perbulan</label>
                    <input type="number" class="form-control" name="gaji" aria-describedby="emailHelp" placeholder="xxx.xxx.xxx" value="<?= $nasabah['gaji']; ?>">
                </div>
                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="number" class="form-control" name="umur" placeholder="xx" required value="<?= $nasabah['umur']; ?>">
                </div>
                <div class="form-group">
                    <label for="kelurahan">Alamat</label>
                    <input type="text" class="form-control" name="alamat" aria-describedby="emailHelp" placeholder="Alamat" required value="<?= $nasabah['alamat']; ?>">
                </div>
                <div class="form-group">
                    <label for="nama">Status Rumah</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusrumah" id="MilikPribadi" value="Milik Pribadi" <?php echo ($nasabah['statusrumah'] == 'Milik Pribadi') ? 'checked' : '' ?>>
                        <label class="form-check-label">
                            Milik Pribadi
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusrumah" id="kontrak" value="Kontrak" <?php echo ($nasabah['statusrumah'] == 'Kontrak') ? 'checked' : '' ?>>
                        <label class="form-check-label">
                            Kontrak
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusrumah" id="kos" value="Kos" <?php echo ($nasabah['statusrumah'] == 'Kos') ? 'checked' : '' ?>>
                        <label class="form-check-label">
                            Kos
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="kelurahan">Kelurahan</label>
                    <input type="text" class="form-control" name="kelurahan" aria-describedby="emailHelp" placeholder="Kelurahan" required value="<?= $nasabah['kelurahan']; ?>">
                </div>
                <div class="form-group">
                    <label for="kecamatan">Kecamatan</label>
                    <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan" value="<?= $nasabah['kecamatan']; ?>">
                </div>
                <div class="form-group">
                    <label for="provinsi">Provinsi</label>
                    <input type="text" class="form-control" name="provinsi" aria-describedby="emailHelp" placeholder="Bali " value="<?= $nasabah['provinsi']; ?>">
                </div>
                <div class="form-group">
                    <label for="namakerabat">Nama Kerabat</label>
                    <input type="text" class="form-control" name="namakerabat" placeholder="Nama Kerabat" value="<?= $nasabah['namakerabat']; ?>">
                </div>
                <div class="form-group">
                    <label for="statuskerabat">Status Kerabat</label>
                    <input type="text" class="form-control" name="statuskerabat" aria-describedby="emailHelp" placeholder="Ex: Sepupu / Tante / Paman" value="<?= $nasabah['statuskerabat']; ?>">
                </div>
                <div class="form-group">
                    <label for="alamatkerabat">Alamat Kerabat</label>
                    <input type="text" class="form-control" name="alamatkerabat" placeholder="Alamat Kerabat" value="<?= $nasabah['alamatkerabat']; ?>">
                </div>
                <div class="form-group">
                    <label for="pekerjaankerabat">Pekerjaan Kerabat</label>
                    <input type="text" class="form-control" name="pekerjaankerabat" aria-describedby="emailHelp" placeholder="Pekerjaan Kerabat" value="<?= $nasabah['pekerjaankerabat']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Perusahaan Tempat Kerabat Bekerja</label>
                    <input type="text" class="form-control" name="perusahaankerabat" placeholder="Nama Perusahaan" value="<?= $nasabah['perusahaankerabat']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view("_partialsindex/footer.php") ?>