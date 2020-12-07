<?php $this->load->view("_partialsadmin/head.php") ?>
<?php $this->load->view("_partialsadmin/sidebar.php") ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <h1 class="mt-4">Dashboard</h1>
            <div class="card mb-4">
                <div class="card-header">
                    Tabel Data Bunga Kredit

                    <a href="<?php echo site_url('pegawai/kreditbungatambah/') ?>" class="btn btn-info btn-sm" style="float: right;"> Tambah Bunga</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Plapon Minimal (Rp)</th>
                                    <th>Plapon Maksimal (Rp)</th>
                                    <th>Bunga</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($tabelkredit as $d) : ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo  number_format($d['jumlah1'], 0, ',', '.') ?> </td>
                                        <td><?php echo  number_format($d['jumlah2'], 0, ',', '.') ?> </td>
                                        <td><?php echo $d['bunga'] ?> %</td>
                                        <td>
                                            <a href="<?php echo site_url('pegawai/kreditbungaedit/' . $d['idkredit']) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                            <a href="<?php echo site_url('pegawai/kreditbungadelete/' . $d['idkredit']) ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td>
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
                <div class="text-muted">Copyright &copy; 2020</div>
            </div>
        </div>
    </footer>
</div>
</div>



<?php $this->load->view("_partialsadmin/footer.php") ?>