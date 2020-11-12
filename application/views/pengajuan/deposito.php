<?php $this->load->view("_partialsindex/head.php") ?>
<?php $this->load->view("_partialsindex/navbar.php") ?>
<section id="home" class="video-hero" style="height: 500px; background-image: url(<?php echo base_url('assetsindex/images/cover_img_1.jpg') ?>);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
    <div class="overlay"></div>
    <div class="display-t display-t2 text-center">
        <div class="display-tc display-tc2">
            <div class="container">
                <div class="col-md-12 col-md-offset-0">
                    <div class="animate-box">
                        <h2>Pengajuan Deposito</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="colorlib-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">


                <form action="<?php echo site_url('deposito/daftar') ?>" method="post">
                    <div class="form-group">
                        <label for="idnasabah">Id Nasabah</label>
                        <input type="text" class="form-control" name="idnasabah" placeholder="idnasabah" value="<?= $nasabah['idnasabah']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="nama" value="<?= $nasabah['nama']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="alamat" value="<?= $nasabah['alamat']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="ahliwaris">Ahli Waris</label>
                        <input type="text" class="form-control" name="ahliwaris" placeholder="Nama Ahli Waris" value="<?= set_value('ahliwaris') ?>">
                        <?= form_error('ahliwaris', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="statusahliwaris">Status Ahli Waris</label>
                        <input type="text" class="form-control" name="statusahliwaris" placeholder="Status Ahli Waris" value="<?= set_value('statusahliwaris') ?>">
                        <?= form_error('statusahliwaris', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah Deposito</label>
                        <input type="text" class="form-control" name="jumlah" placeholder="Rp. " value="<?= set_value('jumlah') ?>">
                        <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Deposito</label>
                        <select class="form-control" id="" name="bunga">
                            <option value="">Pilih Jenis Deposito</option>
                            <?php foreach ($deposito as $d) : ?>
                                <?php if ($d['iddeposito'] > 1) : ?>
                                    <option value="<?= $d['iddeposito'] ?>"><?= $d['bulan'] ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('bunga', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal Pengajuan</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= set_value('tanggal') ?>">
                        <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("_partialsindex/footer.php") ?>