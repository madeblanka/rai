<?php $this->load->view("_partialsadmin/head.php") ?>
<?php $this->load->view("_partialsadmin/sidebar.php") ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">


            <div class="card mb-4">
                <div class="card-header">
                    Detail Nasabah
                </div>
                <div class="card-body">
                    <div class="col-md-6">
                        <form action="<?php echo site_url('pegawai/nasabahupdate') ?>" method="post">
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
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username" required value="<?= $nasabah['username']; ?>" readonly>
                                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" name="password" placeholder="password" required value="<?= $nasabah['password']; ?>" readonly>
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
                                <label for="exampleInputEmail1">Lama Bekerja (tahun)</label>
                                <input type="text" class="form-control" name="lamakerja_tahun" aria-describedby="emailHelp" placeholder="Lama Bekerja (Tahun)" required value="<?= $nasabah['lamakerja_tahun']; ?>" readonly>
                                <?= form_error('lamakerja_tahun', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Lama Bekerja (bulan)</label>
                                <input type="text" class="form-control" name="lamakerja_bulan" aria-describedby="emailHelp" placeholder="Lama Bekerja (bulan)" required value="<?= $nasabah['lamakerja_bulan']; ?>" readonly>
                                <?= form_error('lamakerja_bulan', '<small class="text-danger pl-3">', '</small>'); ?>
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
                                <label for="kelurahan">Alamat</label>
                                <input type="text" class="form-control" name="alamat" aria-describedby="emailHelp" placeholder="Alamat" required value="<?= $nasabah['alamat']; ?>" readonly>
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <div class="container" style="padding-left: 0; padding-right:0;">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label for="kelurahan">Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="tgl_lahir" aria-describedby="emailHelp" placeholder="Tanggal Lahir" required value="<?= $nasabah['tgl_lahir']; ?>" readonly>
                                            <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                </div>
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
                                <label for="namakerabat">Nama Kerabat</label>
                                <input type="text" class="form-control" name="namakerabat" placeholder="Nama Kerabat" value="<?= $nasabah['namakerabat']; ?>" readonly>
                                <?= form_error('namakerabat', '<small class="text-danger pl-3">', '</small>'); ?>
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
                                <label for="ahliwaris">Ahli Waris</label>
                                <input type="text" class="form-control" name="ahliwaris" aria-describedby="emailHelp" placeholder=">Ahli Waris" value="<?= $nasabah['ahliwaris']; ?>" readonly>
                                <?= form_error('ahliwaris', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="statusahliwaris">Status Ahli Waris</label>
                                <input type="text" class="form-control" name="statusahliwaris" aria-describedby="emailHelp" placeholder="Status Ahli Waris" value="<?= $nasabah['statusahliwaris']; ?>" readonly>
                                <?= form_error('statusahliwaris', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="status">Status Nasabah</label>
                                <input type="text" class="form-control" name="status" aria-describedby="emailHelp" placeholder="Status Ahli Waris" value="<?= $nasabah['status']; ?>" readonly>
                                <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
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