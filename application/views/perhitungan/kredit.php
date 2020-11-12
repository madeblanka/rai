<?php $this->load->view("_partialsindex/head.php") ?>
<?php $this->load->view("_partialsindex/navbar.php") ?>

<section id="home" class="video-hero" style="height: 500px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
	<div class="overlay"></div>
	<div class="display-t display-t2 text-center">
		<div class="display-tc display-tc2">
			<div class="container">
				<div class="col-md-12 col-md-offset-0">
					<div class="animate-box">
						<h2>Kredit</h2>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<div class="colorlib-blog">
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form action="<?php echo site_url('tabelkredit/kredit') ?>" method="post">
					<div class="form-group">
						<label for="jumlah">Jumlah Pinjaman</label>
						<input type="text" class="form-control" name="jumlah" placeholder="Rp." required value="<?= set_value('jumlah') ?>">
						<?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="form-group">
						<label for="lama">Lama Pinjaman</label>
						<input type="text" class="form-control" name="lama" placeholder="Bulan" value="<?= set_value('lama') ?>" required>
						<?= form_error('lama', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>


		</div>
		<hr>
		<?php if (isset($hitung)) { ?>
			<div class="row">
				<div class="col-lg-12">
					<h4 style="margin-bottom:0px;">Jumlah: Rp. <?= number_format($jumlah, 0, ',', '.'); ?> </h4>
					<h4 style="margin-bottom:0px">Jangka Waktu: <?= $lama ?> Bulan</h4>
					<h4 style="margin-bottom:0px">Bunga: <?= $bunga ?> % per Bulan</h4>
				</div>

				<div class="col-lg-12">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">Periode</th>
								<th scope="col">Angsuran Bunga (Rp)</th>
								<th scope="col">Angsuran Pokok (Rp)</th>
								<th scope="col">Total Angsuran (Rp)</th>
								<th scope="col">Sisa pinjaman (Rp)</th>
							</tr>
						</thead>
						<tbody>

							<?php foreach ($hitung as $row => $innerArray) : ?>
								<tr>
									<?php foreach ($innerArray as $innerRow => $value) : ?>
										<td><?= number_format($value, 0, ',', '.'); ?></td>

									<?php endforeach; ?>
								</tr>
							<?php endforeach; ?>
							<tr>
								<td>Total</td>
								<td><?= number_format($total_bunga, 0, ',', '.');; ?></td>
								<td><?= number_format($total_pokok, 0, ',', '.');; ?></td>
								<td><?= number_format($total_angsuran, 0, ',', '.');; ?></td>
								<td>-</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
<?php $this->load->view("_partialsindex/footer.php") ?>