<?php $this->load->view("_partialsindex/head.php") ?>
<?php $this->load->view("_partialsindex/navbar.php") ?>
<section id="home" class="video-hero" style="height: 500px; background-image: url(<?php echo base_url('assetsindex/images/cover_img_1.jpg') ?>);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
    <div class="overlay"></div>
    <div class="display-t display-t2 text-center">
        <div class="display-tc display-tc2">
            <div class="container">
                <div class="col-md-12 col-md-offset-0">
                    <div class="animate-box">
                        <h2>Login</h2>
                        <!-- <a class="btn btn-warning btn-sm" href="<?php// echo site_url('pegawai/login') ?>">Halaman Admin</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="colorlib-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">

            </div>
            <div class="col-lg-6">

                <form action="<?php echo site_url('nasabah/login') ?>" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="nama">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
                <div class="text-center">
                    <a class="small text-primary" href="<?php echo site_url('nasabah/daftar') ?>">Buat Akun!!</a>
                </div>


            </div>
        </div>
    </div>
</div>
<?php $this->load->view("_partialsindex/footer.php") ?>