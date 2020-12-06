<?php $this->load->view("_partialsindex/head.php") ?>
<?php $this->load->view("_partialsindex/navbar.php") ?>
<section id="home" class="video-hero" style="height: 500px; background-image: url(<?php echo base_url('assetsindex/images/cover_img_1.jpg') ?>);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
    <div class="overlay"></div>
    <div class="display-t display-t2 text-center">
        <div class="display-tc display-tc2">
            <div class="container">
                <div class="col-md-12 col-md-offset-0">
                    <div class="animate-box">
                        <h2>Pendaftaran Calon Nasabah</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="colorlib-blog">
    <div class="container">
        <div class="row">
            <form action="<?php echo site_url('nasabah/add') ?>" method="post">
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" name="nik" placeholder="NIK">
                    <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="password">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="nama">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jeniskelamin" id="pria" value="Pria" checked>
                        <label class="form-check-label" for="pria">
                            Pria
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jeniskelamin" id="perempuan" value="Perempuan">
                        <label class="form-check-label" for="perempuan">
                            Perempuan
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pernikahan" id="belummenikah" value="Belum Menikah" checked>
                        <label class="form-check-label" for="belummenikah">
                            Belum Menikah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pernikahan" id="menikah" value="Menikah">
                        <label class="form-check-label" for="menikah">
                            Menikah
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pernikahan" id="ceraihidup" value="Cerai Hidup">
                        <label class="form-check-label" for="ceraihidup">
                            Cerai Hidup
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">No Handphone</label>
                    <input type="number" class="form-control" name="notelp" aria-describedby="emailHelp" placeholder="08xxxxx">
                    <?= form_error('notelp', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tempat Kerja</label>
                    <input type="text" class="form-control" name="tempatkerja" placeholder="PT.../ CV... / UD...">
                    <?= form_error('tempatkerja', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Lama Bekerja (tahun)</label>
                    <input type="text" class="form-control" name="lamakerja_tahun" aria-describedby="emailHelp" placeholder="Lama Bekerja (Tahun)">
                    <?= form_error('lamakerja_tahun', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Lama Bekerja (bulan)</label>
                    <input type="text" class="form-control" name="lamakerja_bulan" aria-describedby="emailHelp" placeholder="Lama Bekerja (bulan)">
                    <?= form_error('lamakerja_bulan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" placeholder="Jabatan">
                    <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="pendapatan">Pendapatan Perbulan</label>
                    <input type="number" class="form-control" name="gaji" aria-describedby="emailHelp" placeholder="xxx.xxx.xxx">
                    <?= form_error('gaji', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="kelurahan">Alamat</label>
                    <input type="text" class="form-control" name="alamat" aria-describedby="emailHelp" placeholder="Alamat">
                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <div class="container" style="padding-left: 0; padding-right:0;">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="kelurahan">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir" aria-describedby="emailHelp" placeholder="Tanggal Lahir">
                                <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="nama">Status Rumah</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusrumah" id="MilikPribadi" value="Milik Pribadi" checked>
                        <label class="form-check-label">
                            Milik Pribadi
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusrumah" id="kontrak" value="Kontrak">
                        <label class="form-check-label">
                            Kontrak
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="statusrumah" id="kos" value="Kos">
                        <label class="form-check-label">
                            Kos
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="namakerabat">Nama Kerabat</label>
                    <input type="text" class="form-control" name="namakerabat" placeholder="Nama Kerabat">
                    <?= form_error('namakerabat', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="alamatkerabat">Alamat Kerabat</label>
                    <input type="text" class="form-control" name="alamatkerabat" placeholder="Alamat Kerabat">
                    <?= form_error('alamatkerabat', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="pekerjaankerabat">Pekerjaan Kerabat</label>
                    <input type="text" class="form-control" name="pekerjaankerabat" aria-describedby="emailHelp" placeholder="Pekerjaan Kerabat">
                    <?= form_error('pekerjaankerabat', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="ahliwaris">Ahli Waris</label>
                    <input type="text" class="form-control" name="ahliwaris" aria-describedby="emailHelp" placeholder="Pekerjaan Kerabat">
                    <?= form_error('ahliwaris', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="statusahliwaris">Status Ahli Waris</label>
                    <input type="text" class="form-control" name="statusahliwaris" aria-describedby="emailHelp" placeholder="Pekerjaan Kerabat">
                    <?= form_error('statusahliwaris', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view("_partialsindex/footer.php") ?>