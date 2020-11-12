<?php $this->load->view("_partialsadmin/head.php") ?>
<?php $this->load->view("_partialsadmin/sidebar.php") ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Dashboard</h1>
            <div class="row" style="margin-top: 30px;">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <h5 class="card-body">Nasabah Deposito</h5>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <p>Disetujui <?= $deposito_disetujui; ?></p>
                            <p>Menunggu <?= $deposito_menunggu; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-info text-white mb-4">
                        <h5 class="card-body">Nasabah Kredit</h5>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <p>Disetujui <?= $kredit_disetujui; ?></p>
                            <p>Menunggu <?= $kredit_menunggu; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <h5 class="card-body">Nasabah Tabungan</h5>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <p>Disetujui <?= $tabungan_disetujui; ?></p>
                            <p>Menunggu <?= $tabungan_menunggu; ?></p>
                        </div>
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