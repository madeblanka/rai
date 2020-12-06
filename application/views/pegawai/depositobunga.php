<?php $this->load->view("_partialsadmin/head.php") ?>
<?php $this->load->view("_partialsadmin/sidebar.php") ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <h1 class="mt-4">Dashboard</h1>
            <div class="card mb-4">
                <div class="card-header">
                    Tabel Data Bunga Deposito
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#laporanModal" style="float: right;">
                        Tambah Bunga
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Bunga (%)</th>
                                    <th>Jangka Waktu (Bulan)</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($tabeldeposito as $d) : ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $d['bunga'] ?></td>
                                        <td><?php echo $d['bulan'] ?></td>
                                        <td>
                                            <a href="<?php echo site_url('pegawai/depositobungaedit/' . $d['iddeposito']) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                            <a href="<?php echo site_url('pegawai/depositobungadelete/' . $d['iddeposito']) ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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




<!-- Modal -->
<div class="modal fade" id="laporanModal" tabindex="-1" aria-labelledby="laporanModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="laporanModalLabel">Tambah Bunga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('pegawai/depositobungatambah/') ?>" method="post">
                    <div class="form-group">
                        <label for="bunga">Persentase Bunga (%)</label>
                        <input type="number" class="form-control" name="bunga" step=".01">
                        <?= form_error('bunga', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="bulan">Jangka Waktu</label>
                        <input type="text" class="form-control" name="bulan">
                        <?= form_error('bulan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-info">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view("_partialsadmin/footer.php") ?>