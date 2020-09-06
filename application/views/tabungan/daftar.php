<?php $this->load->view("_partialsadmin/head.php") ?>
<?php $this->load->view("_partialsadmin/sidebar.php") ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                Daftar Tabungan
                            </div>
                            <div class="card-body">
                                <form action="<?php echo site_url('tabungan/add') ?>" method="post">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">ID Nasabah</label>
                                    <input type="number" class="form-control" name="idnasabah"  placeholder="ID Nasabah">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Ahli Waris</label>
                                    <input type="text" class="form-control" name="ahliwaris"  placeholder="Ahli Waris">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Status Ahli Waris</label>
                                    <input type="text" class="form-control" name="statusahliwaris"  placeholder="Contoh : Sodara Kandung / Paman / Keponakan">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Jenis Tabungan</label>
                                    <input type="email" class="form-control" name="jenistabungan"  placeholder="Jenis Tabungan">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Bunga</label>
                                    <input type="email" class="form-control" name="bunga"  placeholder="Bunga">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Jumlah Tabungan</label>
                                    <input type="email" class="form-control" name="jumlah"  placeholder="Jumlah Tabungan">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Total</label>
                                    <input type="email" class="form-control" name="total"  placeholder="Total Tabungan">
                                </div>      
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
<?php $this->load->view("_partialsadmin/footer.php") ?>

