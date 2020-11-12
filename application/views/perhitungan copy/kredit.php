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
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Jumlah</th>
						<th scope="col">Bunga</th>
						<th scope="col">Bulan</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php foreach ($kredit as $td) : ?>
							<td><?php $i++ ?></td>
							<td>
								<?php echo $td->jumlah ?>
							</td>
							<td>
								<?php echo $td->bunga ?>
							</td>
							<td>
								<?php echo $td->bulan ?>
							</td>
						<?php endforeach; ?>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php $this->load->view("_partialsindex/footer.php") ?>