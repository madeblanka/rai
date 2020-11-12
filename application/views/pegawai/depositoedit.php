<?php $this->load->view("_partialsadmin/head.php") ?>
<?php $this->load->view("_partialsadmin/sidebar.php") ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">


            <div class="card mb-4">
                <div class="card-header">
                    Edit Data Nasabah Deposito
                </div>
                <div class="card-body">
                    <div class="col-md-6">
                        <form action="<?php echo site_url('pegawai/depositoupdate/') ?>" method="post">
                            <input type="hidden" class="form-control" name="idpengajuandeposito" value="<?= $deposito['idpengajuandeposito'] ?>" required>
                            <div class="form-group">
                                <label for="jumlah">Jumlah Deposito</label>
                                <input type="text" class="form-control" name="jumlah" value="<?= $deposito['jumlah'] ?>" required>
                                <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="waktu">Waktu</label>
                                <input type="text" class="form-control" name="waktu" value="<?= $deposito['waktu'] ?>" required>
                                <?= form_error('waktu', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="bunga">Bunga</label>
                                <input type="text" class="form-control" name="bunga" value="<?= $deposito['bunga'] ?>" required>
                                <?= form_error('bunga', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="ahliwaris">Ahli Waris</label>
                                <input type="text" class="form-control" name="ahliwaris" value="<?= $deposito['ahliwaris'] ?>" required>
                                <?= form_error('ahliwaris', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="statusahliwaris">Status Ahli Waris</label>
                                <input type="text" class="form-control" name="statusahliwaris" value="<?= $deposito['statusahliwaris'] ?>" required>
                                <?= form_error('statusahliwaris', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" value="<?= $deposito['tanggal'] ?>" required>
                                <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" id="" name="status">
                                    <?php if ($deposito['status'] == "Menunggu") { ?>
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