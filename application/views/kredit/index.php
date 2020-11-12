<?php $this->load->view("_partialsadmin/head.php") ?>
<?php $this->load->view("_partialsadmin/sidebar.php") ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                Tabel Data kredit
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="<?php echo base_url('assets/dist/dataTable')?>" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th>ID Pengajuan kredit</th>
                                            <th>ID Nasabah</th>
                                            <th>Jumlah</th>
                                            <th>Bunga</th>
                                            <th>Bulan</th>
                                            <th>Tanggal Pengajuan</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        foreach ($kredit as $kredit): ?>
                                            <tr>
                                            <td><?php echo $kredit->idpengajuankredit ?></td>
                                            <td><?php echo $kredit->idnasabah ?></td>
                                            <td><?php echo $kredit->jumlah ?></td>
                                            <td><?php echo $kredit->bunga ?></td>
                                            <td><?php echo $kredit->bulan ?></td>
                                            <td><?php echo $kredit->tanggal ?></td>
                                            <td><?php echo $kredit->status ?></td>
                                            <td><a href="<?php echo site_url('kredit/edit/'.$kredit->idpengajuankredit) ?>"
                                                class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                                <a href="<?php echo site_url('kredit/delete/'.$kredit->idpengajuankredit) ?>"
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

