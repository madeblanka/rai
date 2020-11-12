<?php $this->load->view("_partialsadmin/head.php") ?>
<?php $this->load->view("_partialsadmin/sidebar.php") ?>
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
            <form action="<?php echo site_url('nasabah/edit') ?>" method="post">
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" name="nik" placeholder="NIK" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
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
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tempat Kerja</label>
                    <input type="text" class="form-control" name="tempatkerja" placeholder="PT.../ CV... / UD...">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Lama Bekerja</label>
                    <input type="text" class="form-control" name="lamabekerja" aria-describedby="emailHelp" placeholder="1Tahun 1 Bulan">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" placeholder="Jabatan">
                </div>
                <div class="form-group">
                    <label for="pendapatan">Pendapatan Perbulan</label>
                    <input type="number" class="form-control" name="gaji" aria-describedby="emailHelp" placeholder="xxx.xxx.xxx">
                </div>
                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="number" class="form-control" name="umur" placeholder="xx" required>
                </div>
                <div class="form-group">
                    <label for="kelurahan">Alamat</label>
                    <input type="text" class="form-control" name="alamat" aria-describedby="emailHelp" placeholder="Alamat" required>
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
                    <label for="kelurahan">Kelurahan</label>
                    <input type="text" class="form-control" name="kelurahan" aria-describedby="emailHelp" placeholder="Kelurahan" required>
                </div>
                <div class="form-group">
                    <label for="kecamatan">Kecamatan</label>
                    <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan">
                </div>
                <div class="form-group">
                    <label for="provinsi">Provinsi</label>
                    <input type="text" class="form-control" name="provinsi" aria-describedby="emailHelp" placeholder="Bali ">
                </div>
                <div class="form-group">
                    <label for="namakerabat">Nama Kerabat</label>
                    <input type="text" class="form-control" name="namakerabat" placeholder="Nama Kerabat">
                </div>
                <div class="form-group">
                    <label for="statuskerabat">Status Kerabat</label>
                    <input type="text" class="form-control" name="statuskerabat" aria-describedby="emailHelp" placeholder="Ex: Sepupu / Tante / Paman">
                </div>
                <div class="form-group">
                    <label for="alamatkerabat">Alamat Kerabat</label>
                    <input type="text" class="form-control" name="alamatkerabat" placeholder="Alamat Kerabat">
                </div>
                <div class="form-group">
                    <label for="pekerjaankerabat">Pekerjaan Kerabat</label>
                    <input type="text" class="form-control" name="pekerjaankerabat" aria-describedby="emailHelp" placeholder="Pekerjaan Kerabat">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Perusahaan Tempat Kerabat Bekerja</label>
                    <input type="text" class="form-control" name="perusahaankerabat" placeholder="Nama Perusahaan">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view("_partialsadmin/footer.php") ?>