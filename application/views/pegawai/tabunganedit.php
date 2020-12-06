<?php $this->load->view("_partialsadmin/head.php") ?>
<?php $this->load->view("_partialsadmin/sidebar.php") ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">


            <div class="card mb-4">
                <div class="card-header">
                    Edit Data Nasabah Tabungan
                </div>
                <div class="card-body">
                    <div class="col-md-6">
                        <form action="<?php echo site_url('pegawai/tabunganupdate/') ?>" method="post">
                            <input type="hidden" class="form-control" name="idpengajuantabungan" value="<?= $tabungan['idpengajuantabungan'] ?>">
                            <div class="form-group">
                                <label for="jumlah">Jumlah tabungan</label>
                                <input type="text" class="form-control" name="jumlah" value="<?= $tabungan['jumlah'] ?>">
                                <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="waktu">Waktu</label>
                                <input type="text" class="form-control" name="waktu" value="<?= $tabungan['waktu'] ?>">
                                <?= form_error('waktu', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="bunga">Bunga</label>
                                <input type="text" class="form-control" name="bunga" value="<?= $tabungan['bunga'] ?>">
                                <?= form_error('bunga', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" value="<?= $tabungan['tanggal'] ?>">
                                <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" id="" name="status">
                                    <?php if ($tabungan['status'] == "Menunggu") { ?>
                                        <option value="Menunggu">Menunggu</option>
                                        <option value="Disetujui">Disetujui</option>
                                    <?php } else { ?>
                                        <option value="Disetujui">Disetujui</option>
                                        <option value="Menunggu">Menunggu</option>
                                    <?php } ?>
                                </select>
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