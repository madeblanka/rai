<?php $this->load->view("_partialsadmin/head.php") ?>
<?php $this->load->view("_partialsadmin/sidebar.php") ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                Data Kredit
                            </div>
                            <div class="card-body">
                                <form action="<?php echo site_url('kredit/edit') ?>" method="post">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">ID Nasabah</label>
                                    <input type="number" class="form-control" name="idnasabah"  placeholder="ID Nasabah">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Jumlah</label>
                                    <input type="number" class="form-control" name="jumlah"  placeholder="000000">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Bunga </label>
                                    <input type="text" class="form-control" name="bunga"  placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Bulan</label>
                                    <input type="email" class="form-control" name="bulan"  placeholder="Jenis Tabungan">
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
<?php $this->load->view("_partialsadmin/footer.php") ?>

