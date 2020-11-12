<?php $this->load->view("_partialsadmin/head.php") ?>
<?php $this->load->view("_partialsadmin/sidebar.php") ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <h1 class="mt-4">Dashboard</h1>


            <div class="card mb-4">
                <div class="card-header">
                    Tabel Data Nasabah

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
                                    <th>J. Kelamin</th>
                                    <th>Tempat Kerja</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($nasabah as $n) : ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $n['nama'] ?></td>
                                        <td><?php echo $n['jeniskelamin'] ?></td>
                                        <td><?php echo $n['tempatkerja'] ?></td>
                                        <td><?php echo $n['alamat'] ?></td>
                                        <td>
                                            <a href="<?php echo site_url('pegawai/nasabahlaporan/' . $n['idnasabah']) ?>" onclick="return confirm('Apakah Anda Yakin Ingin Melihat Laporan Nasabah Ini ?');" href="#!" class="btn btn-small text-info"><i class="fas fa-user-alt"></i> Laporan</a>
                                            <a href="<?php echo site_url('pegawai/nasabahdetail/' . $n['idnasabah']) ?>" class="btn btn-small text-success"><i class="fas fa-book-open"></i> Detail</a>
                                            <a href="<?php echo site_url('pegawai/nasabahedit/' . $n['idnasabah']) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                            <a href="<?php echo site_url('pegawai/nasabahdelete/' . $n['idnasabah']) ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?');" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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
                <form action="<?php echo site_url('pegawai/nasabahlaporanall/') ?>" method="post">
                    <div class="form-group">
                        <label for="tanggal_mulai">Start Date</label>
                        <input type="date" class="form-control" name="tanggal_mulai" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_selesai">End Date</label>
                        <input type="date" class="form-control" name="tanggal_selesai" required>
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