<?php $this->load->view("_partialsadmin/head.php") ?>
<?php $this->load->view("_partialsadmin/sidebar.php") ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <h1 class="mt-4">Dashboard</h1>
            <div class="card mb-4">
                <div class="card-header">
                    Edit Bunga Nasabah Kredit
                </div>
                <div class="card-body">
                    <div class="col-md-6">
                        <form action="<?php echo site_url('pegawai/kreditbungaupdate/') ?>" method="post">
                            <input type="hidden" class="form-control" name="idkredit" value="<?= $tabelkredit['idkredit'] ?>">
                            <div class="form-group">
                                <label for="jumlah1">Plapon Minimal</label>
                                <input type="text" class="form-control" name="jumlah1" value="<?= $tabelkredit['jumlah1'] ?>">
                                <?= form_error('jumlah1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="jumlah2">Plapon Maksimal</label>
                                <input type="text" class="form-control" name="jumlah2" value="<?= $tabelkredit['jumlah2'] ?>">
                                <?= form_error('jumlah2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <!-- <div class="form-group">
                                <label for="bulan">Jangka Waktu</label>
                                <input type="text" class="form-control" name="bulan" value="<?php // $tabelkredit['bulan'] 
                                                                                            ?>">
                                <?php // form_error('bulan', '<small class="text-danger pl-3">', '</small>'); 
                                ?>
                            </div> -->
                            <div class="form-group">
                                <label for="bunga">Bunga (%)</label>
                                <input type="text" class="form-control" name="bunga" value="<?= $tabelkredit['bunga'] ?>" required>
                                <?= form_error('bunga', '<small class="text-danger pl-3">', '</small>'); ?>
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