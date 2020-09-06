<?php $this->load->view("_partialsadmin/head.php") ?>
<?php $this->load->view("_partialsadmin/sidebar.php") ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                Tabel Data deposito
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="<?php echo base_url('assets/dist/dataTable')?>" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th>ID Pengajuan Deposito</th>
                                            <th>ID Nasabah</th>
                                            <th>Jenis Simpanan</th>
                                            <th>Jumlah</th>
                                            <th>Tenor</th>
                                            <th>Pembayaran Bunga</th>
                                            <th>Ahli Waris</th>
                                            <th>Status Ahli Waris</th>
                                            <th>Tanggal Pengajuan</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        foreach ($deposito as $deposito): ?>
                                            <tr>
                                            <td><?php echo $deposito->idpengajuandeposito ?></td>
                                            <td><?php echo $deposito->idnasabah ?></td>
                                            <td><?php echo $deposito->jenissimpanan ?></td>
                                            <td><?php echo $deposito->jumlah ?></td>
                                            <td><?php echo $deposito->waktu ?></td>
                                            <td><?php echo $deposito->pembayaranbunga ?></td>
                                            <td><?php echo $deposito->ahliwaris ?></td>
                                            <td><?php echo $deposito->statusahliwaris ?></td>
                                            <td><?php echo $deposito->tanggal?></td>
                                            <td><?php echo $deposito->status?></td>
                                            <td><a href="<?php echo site_url('deposito/edit/'.$deposito->idpengajuandeposito) ?>"
                                                class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                                <a href="<?php echo site_url('deposito/delete/'.$deposito->idpengajuandeposito) ?>"
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

