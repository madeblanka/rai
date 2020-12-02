<?php $this->load->view("_partialsadmin/head.php") ?>
<?php $this->load->view("_partialsadmin/sidebar.php") ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <h1 class="mt-4">Dashboard</h1>
            <div class="card mb-4">
                <div class="card-header">
                    Edit Bunga Deposito
                </div>
                <div class="card-body">
                    <div class="col-md-6">
                        <form action="<?php echo site_url('pegawai/depositobungaupdate/') ?>" method="post">
                            <input type="hidden" class="form-control" name="iddeposito" value="<?= $tabeldeposito['iddeposito'] ?>">
                            <div class="form-group">
                                <label for="bunga">Bunga (%)</label>
                                <input type="text" class="form-control" name="bunga" value="<?= $tabeldeposito['bunga'] ?>">
                                <?= form_error('bunga', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="bulan">Jangka Waktu (Bulan)</label>
                                <input type="text" class="form-control" name="bulan" value="<?= $tabeldeposito['bulan'] ?>">
                                <?= form_error('bulan', '<small class="text-danger pl-3">', '</small>'); ?>
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