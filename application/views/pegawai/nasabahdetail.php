<?php $this->load->view("_partialsadmin/head.php") ?>
<?php $this->load->view("_partialsadmin/sidebar.php") ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">


            <div class="card mb-4">
                <div class="card-header">
                    Edit Data Nasabah
                </div>
                <div class="card-body">
                    <div class="col-md-6">
                        <form action="#" method="post">
                            <input type="hidden" value="<?= $nasabah['idnasabah']; ?>" name="idnasabah">
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" name="nik" placeholder="NIK" required value="<?= $nasabah['nik']; ?>" readonly>
                                <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?= $nasabah['nama']; ?>" readonly>
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" name="password" value="<?= $nasabah['password']; ?>" readonly>
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
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
                                <input type="number" class="form-control" name="notelp" aria-describedby="emailHelp" placeholder="08xxxxx" value="<?= $nasabah['notelp']; ?>" readonly>
                                <?= form_error('notelp', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tempat Kerja</label>
                                <input type="text" class="form-control" name="tempatkerja" placeholder="PT.../ CV... / UD..." value="<?= $nasabah['tempatkerja']; ?>" readonly>
                                <?= form_error('tempatkerja', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Lama Bekerja</label>
                                <input type="text" class="form-control" name="lamabekerja" aria-describedby="emailHelp" placeholder="1Tahun 1 Bulan" value="<?= $nasabah['lamakerja']; ?>" readonly>
                                <?= form_error('lamabekerja', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Jabatan</label>
                                <input type="text" class="form-control" name="jabatan" placeholder="Jabatan" value="<?= $nasabah['jabatan']; ?>" readonly>
                                <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="pendapatan">Pendapatan Perbulan</label>
                                <input type="number" class="form-control" name="gaji" aria-describedby="emailHelp" placeholder="xxx.xxx.xxx" value="<?= $nasabah['gaji']; ?>" readonly>
                                <?= form_error('gaji', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="umur">Umur</label>
                                <input type="number" class="form-control" name="umur" placeholder="xx" required value="<?= $nasabah['umur']; ?>" readonly>
                                <?= form_error('umur', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="kelurahan">Alamat</label>
                                <input type="text" class="form-control" name="alamat" aria-describedby="emailHelp" placeholder="Alamat" required value="<?= $nasabah['alamat']; ?>" readonly>
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
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
                                <input type="text" class="form-control" name="kelurahan" aria-describedby="emailHelp" placeholder="Kelurahan" required value="<?= $nasabah['kelurahan']; ?>" readonly>
                                <?= form_error('kelurahan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="kecamatan">Kecamatan</label>
                                <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan" value="<?= $nasabah['kecamatan']; ?>" readonly>
                                <?= form_error('kecamatan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="provinsi">Provinsi</label>
                                <input type="text" class="form-control" name="provinsi" aria-describedby="emailHelp" placeholder="Bali " value="<?= $nasabah['provinsi']; ?>" readonly>
                                <?= form_error('provinsi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="namakerabat">Nama Kerabat</label>
                                <input type="text" class="form-control" name="namakerabat" placeholder="Nama Kerabat" value="<?= $nasabah['namakerabat']; ?>" readonly>
                                <?= form_error('namakerabat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="statuskerabat">Status Kerabat</label>
                                <input type="text" class="form-control" name="statuskerabat" aria-describedby="emailHelp" placeholder="Ex: Sepupu / Tante / Paman" value="<?= $nasabah['statuskerabat']; ?>" readonly>
                                <?= form_error('statuskerabat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="alamatkerabat">Alamat Kerabat</label>
                                <input type="text" class="form-control" name="alamatkerabat" placeholder="Alamat Kerabat" value="<?= $nasabah['alamatkerabat']; ?>" readonly>
                                <?= form_error('alamatkerabat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="pekerjaankerabat">Pekerjaan Kerabat</label>
                                <input type="text" class="form-control" name="pekerjaankerabat" aria-describedby="emailHelp" placeholder="Pekerjaan Kerabat" value="<?= $nasabah['pekerjaankerabat']; ?>" readonly>
                                <?= form_error('pekerjaankerabat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nama Perusahaan Tempat Kerabat Bekerja</label>
                                <input type="text" class="form-control" name="perusahaankerabat" placeholder="Nama Perusahaan" value="<?= $nasabah['perusahaankerabat']; ?>" readonly>
                                <?= form_error('perusahaankerabat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </form>
                        <a href="<?php echo site_url('pegawai/nasabahedit/' . $nasabah['idnasabah']) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                        <a href="<?php echo site_url('pegawai/nasabahdelete/' . $nasabah['idnasabah']) ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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