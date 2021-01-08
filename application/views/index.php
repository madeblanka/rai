<?php $this->load->view("_partialsindex/head.php") ?>
<?php $this->load->view("_partialsindex/navbar.php") ?>

		<section id="home" class="video-hero" style="height: 700px; background-image: url(<?php echo base_url('assetsindex/images/cover_img_1.jpg')?>);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
		<div class="overlay"></div>
			<a class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=vqqt5p0q-eU',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a> 
			<div class="display-t text-center">
				<div class="display-tc">
					<div class="container">
						<div class="col-md-12 col-md-offset-0">
							<div class="animate-box">
							<h2>Koperasi Mitra Sari Bumi</h2>
								<h3><p>Bersama kami wujudkan masa depan cemerlang</p></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="colorlib-services colorlib-bg-white">
			<div class="container">
				<div class="row">
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
							<img src="<?php echo base_url('assetsindex/images/deposito.jpeg')?>" alt="" width="64">
							</span>
							<div class="desc">
								<h3>DEPOSITO</h3>
								<p>Produk simpanan berjangka yang penarikannya berdasarkan jangka waktu yang telah disepakati</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="services"><a href=""></a>
							<span class="icon">
							<img src="<?php echo base_url('assetsindex/images/kredit.jpeg')?>" alt="" width="64">
							</span>
							<div class="desc">
								<h3>KREDIT</h3>
								<p>Produk pinjaman yang diberikan kepada nasabah sesuai dengan ketentuan yang telah disepakati</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
							<img src="<?php echo base_url('assetsindex/images/tabungan.jpeg')?>" alt="" width="64">
							</span>
							<div class="desc">
								<h3>TABUNGAN</h3>
								<p>Produk simpanan yang disetorkan setiap bulan kepada koperasi sesuai dengan ketentuan yang telah disepakati</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



	

		<footer id="colorlib-footer">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center">
						<h4>Contact Info</h4>
						<ul class="colorlib-footer-links">
							<li><i class="icon-location4"></i><a href="#"> Jl. Rama no 7 Mengwi, Badung, Bali</a></li>
							<li><a href="tel://0361813997"><i class="icon-phone"></i> + 0361 813997</a></li>
							<li><a href="mailto:koperasimitrasaribumi@gmail.com"><i class="icon-envelope"></i>koperasimitrasaribumi@gmail.com</a></li>
							<li><a href="#"><i class="fab fa-facebook-square"></i>Facebook Koperasi Mitra Sari Bum</a></li>
						</ul>
					</div>
				</div>
			</div>
<?php $this->load->view("_partialsindex/footer.php") ?>
