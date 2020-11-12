<?php $this->load->view("_partialsadmin/head.php") ?>
<?php $this->load->view("_partialsadmin/sidebar.php") ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                Tabel Data Nasabah
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th>ID Nasabah</th>
                                            <th>Password</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Status Pernikahan</th>
                                            <th>No Telphone</th>
                                            <th>Tempat Kerja</th>
                                            <th>Lama Bekerja</th>
                                            <th>Jabatan</th>
                                            <th>Gaji</th>
                                            <th>Umur</th>
                                            <th>Alamat</th>
                                            <th>Status Tempat Tinggal</th>
                                            <th>Nama Kerabat</th>
                                            <th>Status Kerabat</th>
                                            <th>Alamat Kerabat</th>
                                            <th>Pekerjaan Kerabat</th>
                                            <th>Perusahaan</th>
                                            <th>Kelurahan</th>
                                            <th>Kecamatan</th>
                                            <th>Provinsi</th>
                                            <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        foreach ($nasabah as $nasabah): ?>
                                            <tr>
                                            <td><?php echo $nasabah->idnasabah ?></td>
                                            <td><?php echo $nasabah->password ?></td>
                                            <td><?php echo $nasabah->nik ?></td>
                                            <td><?php echo $nasabah->nama ?></td>
                                            <td><?php echo $nasabah->jeniskelamin ?></td>
                                            <td><?php echo $nasabah->pernikahan ?></td>
                                            <td><?php echo $nasabah->notelp ?></td>
                                            <td><?php echo $nasabah->tempatkerja ?></td>
                                            <td><?php echo $nasabah->lamakerja ?></td>
                                            <td><?php echo $nasabah->jabatan ?></td>
                                            <td><?php echo $nasabah->gaji ?></td>
                                            <td><?php echo $nasabah->umur ?></td>
                                            <td><?php echo $nasabah->alamat ?></td>
                                            <td><?php echo $nasabah->statusrumah ?></td>
                                            <td><?php echo $nasabah->namakerabat ?></td>
                                            <td><?php echo $nasabah->statuskerabat ?></td>
                                            <td><?php echo $nasabah->alamatkerabat ?></td>
                                            <td><?php echo $nasabah->pekerjaankerabat ?></td>
                                            <td><?php echo $nasabah->perusahaankerabat ?></td>
                                            <td><?php echo $nasabah->kelurahan?></td>
                                            <td><?php echo $nasabah->kecamatan ?></td>
                                            <td><?php echo $nasabah->provinsi ?></td>
                                            <td><a href="<?php echo site_url('nasabah/edit/'.$nasabah->idnasabah) ?>"
                                                class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                                <a href="<?php echo site_url('nasabah/delete/'.$nasabah->idnasabah) ?>"
                                            onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                            </tr>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
<?php $this->load->view("_partialsadmin/footer.php") ?>

