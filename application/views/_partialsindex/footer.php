<footer id="colorlib-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<p>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>
						document.write(new Date().getFullYear());
					</script> All rights reserved
				</p>
			</div>
		</div>
	</div>
</footer>
</div>

<div class="gototop js-top">
	<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

<!-- jQuery -->
<script src="<?php echo base_url('assetsindex/js/jquery.min.js') ?>"></script>
<!-- jQuery Easing -->
<script src="<?php echo base_url('assetsindex/js/jquery.easing.1.3.js') ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('assetsindex/js/bootstrap.min.js') ?>"></script>
<!-- Waypoints -->
<script src="<?php echo base_url('assetsindex/js/jquery.waypoints.min.js') ?>"></script>
<!-- Stellar Parallax -->
<script src="<?php echo base_url('assetsindex/js/jquery.stellar.min.js') ?>"></script>
<!-- YTPlayer -->
<script src="<?php echo base_url('assetsindex/js/jquery.mb.YTPlayer.min.js') ?>"></script>
<!-- Owl carousel -->
<script src="<?php echo base_url('assetsindex/js/owl.carousel.min.js') ?>"></script>
<!-- Magnific Popup -->
<script src="<?php echo base_url('assetsindex/js/jquery.magnific-popup.min.js') ?>"></script>
<script src="<?php echo base_url('assetsindex/js/magnific-popup-options.js') ?>"></script>
<!-- Counters -->
<script src="<?php echo base_url('assetsindex/js/jquery.countTo.js') ?>"></script>
<!-- Main -->
<script src="<?php echo base_url('assetsindex/js/main.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
	<?php if ($this->session->userdata('message')) { ?>
		toastr.options = {
			"closeButton": false,
			"debug": false,
			"newestOnTop": false,
			"progressBar": false,
			"positionClass": "toast-top-center",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		}
		toastr.success("<?= $this->session->flashdata('message'); ?>")
	<?php } ?>
	<?php if ($this->session->userdata('warning')) { ?>
		toastr.options = {
			"closeButton": false,
			"debug": false,
			"newestOnTop": false,
			"progressBar": false,
			"positionClass": "toast-top-center",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		}
		toastr.warning("<?= $this->session->flashdata('warning'); ?>")
	<?php } ?>
</script>
</body>

</html>