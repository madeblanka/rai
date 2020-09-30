<?php $this->load->view("_partialsadmin/head.php") ?>
<?php $this->load->view("_partialsadmin/sidebar.php") ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                Daftar Deposito
                            </div>
                            <div class="card-body">
                                <form action="<?php echo site_url('deposito/add') ?>" method="post">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">ID Nasabah</label>
                                    <input type="number" class="form-control" name="idnasabah"  placeholder="ID Nasabah" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Jumlah</label>
                                    <input required min="5000000" type="text" id="myText" onblur="formatValue()" class="form-control" name="jumlah"  placeholder="000000">
                                    <h6>*minimal 5.000.000</h6>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Bunga </label>
                                    <input type="text" class="form-control" name="bunga" 
                                    value="<?php foreach ($bunga as $td): 
                                            echo $td->bunga;
                                            endforeach;?>">
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
<script>
function formatValue(){
   var x = Number(document.getElementById('myText').value);
   document.getElementById('myText').value = x.toLocaleString();
}
</script>
