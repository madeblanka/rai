<?php $this->load->view("_partialsindex/head.php") ?>
<?php $this->load->view("_partialsindex/navbar.php") ?>

<section id="home" class="video-hero" style="height: 500px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
	<div class="overlay"></div>
	<div class="display-t display-t2 text-center">
		<div class="display-tc display-tc2">
			<div class="container">
				<div class="col-md-12 col-md-offset-0">
					<div class="animate-box">
						<h2>Deposito</h2>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<div class="colorlib-blog">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-4">
				<form action="<?php echo site_url('tabeldeposito/deposito') ?>" method="post">
					<div class="form-group">
						<label for="jumlah">Jumlah Deposito</label>
						<input type="text" class="form-control" name="jumlah" placeholder="Rp."  value="<?= set_value('jumlah') ?>">
						<?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<!-- <div class="form-group">
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
                    </div> -->


					<div class="form-group">
						<select class="form-control" id="" name="bunga" >
							<option value="">Pilih Jenis Deposito</option>
							<?php foreach ($deposito as $d) : ?>
								<?php if (isset($iddeposito)) { ?>
									<option value="<?= $d['iddeposito'] ?>" <?php echo ($d['iddeposito'] == $iddeposito) ? 'selected="selected"' : '' ?>><?= $d['bulan'] ?></option>
								<?php } else { ?>
									<option value="<?= $d['iddeposito'] ?>"><?= $d['bulan'] ?></option>
								<?php } ?>
							<?php endforeach; ?>
						</select>
						<?= form_error('bunga', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="col-md-6">
				<?php if (isset($bunga)) { ?>
					<p>Deposito: Rp. <?= number_format($jumlah, 0, ',', '.'); ?> </p>
					<p>Bunga: <?= $bunga_dep; ?> % per Tahun | Jangka Waktu: <?= $bulan; ?> Bulan</p>
					<?php if (isset($pajak)) { ?>
						<h4>Bunga per Bulan sebelum pajak: Rp. <?= number_format($bungaperbulansblpajak, 0, ',', '.');; ?></h4>
						<h4>Total Bunga sebelum pajak: Rp. <?= number_format($totbunga, 0, ',', '.'); ?></h4>
						<p>Pajak per Bulan: Rp. <?= number_format($pajakperbulan, 0, ',', '.');; ?> | Total Pajak: Rp. <?= number_format($pajak, 0, ',', '.');; ?></p>
					<?php } else { ?>
						<h4>Bunga per Bulan: Rp. <?= number_format($bungaperbulan, 0, ',', '.');; ?></h4>
					<?php } ?>
					<h4>Total bunga yang diterima</h4>
					<h3>Rp. <?= number_format($bunga, 0, ',', '.');; ?></h3>
				<?php } else { ?>
					<h4>Total bunga yang diterima</h4>
					<h3>Rp. 0</h3>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view("_partialsindex/footer.php") ?>