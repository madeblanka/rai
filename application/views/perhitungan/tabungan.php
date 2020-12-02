<?php $this->load->view("_partialsindex/head.php") ?>
<?php $this->load->view("_partialsindex/navbar.php") ?>

<section id="home" class="video-hero" style="height: 500px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
	<div class="overlay"></div>
	<div class="display-t display-t2 text-center">
		<div class="display-tc display-tc2">
			<div class="container">
				<div class="col-md-12 col-md-offset-0">
					<div class="animate-box">
						<h2>Tabungan Program</h2>

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
				<form action="<?php echo site_url('tabeltabungan/tabungan') ?>" method="post">
					<div class="form-group">
						<label for="jumlah">Jumlah Tabungan</label>
						<input type="text" class="form-control" name="jumlah" placeholder="Rp."  value="<?= set_value('jumlah') ?>">
						<?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="form-group">
						<select class="form-control" id="" name="bunga" >
							<option value="">Pilih Jangka Waktu</option>
							<?php foreach ($tabungan as $t) : ?>
								<?php if (isset($idtabungan)) { ?>
									<option value="<?= $t['idtabungan'] ?>" <?php echo ($t['idtabungan'] == $idtabungan) ? 'selected="selected"' : '' ?>><?= $t['bulan'] ?></option>
								<?php } else { ?>
									<option value="<?= $t['idtabungan'] ?>"><?= $t['bulan'] ?></option>
								<?php } ?>
							<?php endforeach; ?>
						</select>
						<?= form_error('bunga', '<small class="text-danger pl-3">', '</small>'); ?>
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
					<h4 style="margin-bottom:0px">Bunga: <?= $bunga ?> % per Tahun</h4>
				</div>
				<div class="col-lg-12">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">Periode</th>
								<th scope="col">Setoran (Rp)</th>
								<th scope="col">Bunga (Rp)</th>
								<th scope="col">Total Tabungan (Rp)</th>
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
								<th>Total</th>
								<th><?= number_format($total_setoran, 0, ',', '.');; ?></th>
								<th><?= number_format($total_bunga, 0, ',', '.');; ?></th>
								<th><?= number_format($total_tabungan, 0, ',', '.');; ?></th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
<?php $this->load->view("_partialsindex/footer.php") ?>