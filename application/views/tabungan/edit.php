<?php $this->load->view("_partialsadmin/head.php") ?>
<?php $this->load->view("_partialsadmin/sidebar.php") ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                 Data Tabungan
                            </div>
                            <div class="card-body">
                                <form action="<?php echo site_url('tabungan/edit') ?>" method="post">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">ID Pengajuan *</label>
                                    <input type="number" class="form-control" placeholder="ID Pengajuan">
                                    <input type="hidden" name="idpengajuantabungan" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">ID Nasabah *</label>
                                    <input type="number" class="form-control" placeholder="ID Nasabah">
                                    <input type="hidden" name="idnasabah">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Ahli Waris</label>
                                    <input type="text" class="form-control" name="ahliwaris"  placeholder="Nama Ahli Waris">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Status Ahli Waris</label>
                                    <input type="text" class="form-control" name="statusahliwaris"  placeholder="Status Ahli Waris">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Jenis Tabungan</label>
                                    <input type="email" class="form-control" name="jenistabungan"  placeholder="name@example.com">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Bunga</label>
                                    <input type="email" class="form-control" name="bunga"  placeholder="name@example.com">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Jumlah</label>
                                    <input type="email" class="form-control" name="jumlah"  placeholder="name@example.com">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Total</label>
                                    <input type="email" class="form-control" name="total"  placeholder="name@example.com">
                                </div>      
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
<?php $this->load->view("_partialsadmin/footer.php") ?>

