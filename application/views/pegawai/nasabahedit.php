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
                        <form action="<?php echo site_url('pegawai/nasabahupdate') ?>" method="post">
                            <input type="hidden" value="<?= $nasabah['idnasabah']; ?>" name="idnasabah">
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" name="nik" placeholder="NIK" value="<?= $nasabah['nik']; ?>">
                                <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?= $nasabah['nama']; ?>">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username" value="<?= $nasabah['username']; ?>">
                                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" name="password" placeholder="password" value="<?= $nasabah['password']; ?>">
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
                                <input type="number" class="form-control" name="notelp" aria-describedby="emailHelp" placeholder="08xxxxx" value="<?= $nasabah['notelp']; ?>">
                                <?= form_error('notelp', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tempat Kerja</label>
                                <input type="text" class="form-control" name="tempatkerja" placeholder="PT.../ CV... / UD..." value="<?= $nasabah['tempatkerja']; ?>">
                                <?= form_error('tempatkerja', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Lama Bekerja (tahun)</label>
                                <input type="text" class="form-control" name="lamakerja_tahun" aria-describedby="emailHelp" placeholder="Lama Bekerja (Tahun)" value="<?= $nasabah['lamakerja_tahun']; ?>">
                                <?= form_error('lamakerja_tahun', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Lama Bekerja (bulan)</label>
                                <input type="text" class="form-control" name="lamakerja_bulan" aria-describedby="emailHelp" placeholder="Lama Bekerja (bulan)" value="<?= $nasabah['lamakerja_bulan']; ?>">
                                <?= form_error('lamakerja_bulan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Jabatan</label>
                                <input type="text" class="form-control" name="jabatan" placeholder="Jabatan" value="<?= $nasabah['jabatan']; ?>">
                                <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="pendapatan">Pendapatan Perbulan</label>
                                <input type="number" class="form-control" name="gaji" aria-describedby="emailHelp" placeholder="xxx.xxx.xxx" value="<?= $nasabah['gaji']; ?>">
                                <?= form_error('gaji', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="kelurahan">Alamat</label>
                                <input type="text" class="form-control" name="alamat" aria-describedby="emailHelp" placeholder="Alamat" value="<?= $nasabah['alamat']; ?>">
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <div class="container" style="padding-left: 0; padding-right:0;">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label for="kelurahan">Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="tgl_lahir" aria-describedby="emailHelp" placeholder="Tanggal Lahir" value="<?= $nasabah['tgl_lahir']; ?>">
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
                                <input type="text" class="form-control" name="namakerabat" placeholder="Nama Kerabat" value="<?= $nasabah['namakerabat']; ?>">
                                <?= form_error('namakerabat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="alamatkerabat">Alamat Kerabat</label>
                                <input type="text" class="form-control" name="alamatkerabat" placeholder="Alamat Kerabat" value="<?= $nasabah['alamatkerabat']; ?>">
                                <?= form_error('alamatkerabat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="pekerjaankerabat">Pekerjaan Kerabat</label>
                                <input type="text" class="form-control" name="pekerjaankerabat" aria-describedby="emailHelp" placeholder="Pekerjaan Kerabat" value="<?= $nasabah['pekerjaankerabat']; ?>">
                                <?= form_error('pekerjaankerabat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="ahliwaris">Ahli Waris</label>
                                <input type="text" class="form-control" name="ahliwaris" aria-describedby="emailHelp" placeholder="Ahli Waris" value="<?= $nasabah['ahliwaris']; ?>">
                                <?= form_error('ahliwaris', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="statusahliwaris">Status Ahli Waris</label>
                                <input type="text" class="form-control" name="statusahliwaris" aria-describedby="emailHelp" placeholder="Status Ahli Waris" value="<?= $nasabah['statusahliwaris']; ?>">
                                <?= form_error('statusahliwaris', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>


                            <div class="form-group">
                                <label for="status">Status Nasabah</label>
                                <select class="form-control" id="" name="status">
                                    <option value="">Pilih Status Nasabah</option>
                                    <?php if ($nasabah['status'] == 'Aktif') { ?>
                                        <option value="Aktif" selected>Aktif</option>
                                    <?php } else { ?>
                                        <option value="Aktif">Aktif</option>
                                    <?php } ?>
                                    <?php if ($nasabah['status'] == 'Tidak Aktif') { ?>
                                        <option value="Tidak Aktif" selected>Tidak Aktif</option>
                                    <?php } else { ?>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                    <?php } ?>
                                </select>
                                <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
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