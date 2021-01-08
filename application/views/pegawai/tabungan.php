<?php $this->load->view("_partialsadmin/head.php") ?>
<?php $this->load->view("_partialsadmin/sidebar.php") ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <h1 class="mt-4">Dashboard</h1>


            <div class="card mb-4">
                <div class="card-header">
                    Tabel Data Nasabah Tabungan Program

                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#laporanModal" style="float: right;">
                        Laporan
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Jumlah (Rp)</th>
                                    <th>Waktu (Bulan)</th>
                                    <th>Bunga</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($tabungan as $d) : ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $d['nama'] ?></td>
                                        <td><?php echo number_format($d['jumlah'], 0, ',', '.') ?></td>
                                        <td><?php echo $d['waktu'] ?></td>
                                        <td><?php echo $d['bunga'] ?></td>
                                        <td><?php echo date('d-m-Y', strtotime($d['tanggal'])) ?></td>
                                        <td><?php echo $d['status'] ?></td>
                                        <td>
                                            <a href="<?php echo site_url('pegawai/tabungandetail/' . $d['idpengajuantabungan']) ?>" class="btn btn-small text-success"><i class="fas fa-book-open"></i> Detail</a>
                                            <a href="<?php echo site_url('pegawai/tabunganedit/' . $d['idpengajuantabungan']) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                            <a href="<?php echo site_url('pegawai/tabungandelete/' . $d['idpengajuantabungan']) ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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
                <h5 class="modal-title" id="laporanModalLabel">Periode Laporan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url('pegawai/tabunganlaporan/') ?>" method="post">
                    <div class="form-group">
                        <label for="tanggal_mulai">Start Date</label>
                        <input type="date" class="form-control" name="tanggal_mulai">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_selesai">End Date</label>
                        <input type="date" class="form-control" name="tanggal_selesai">
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