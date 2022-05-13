<footer>
	<div class="main-footer main-color pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-md-6 mb-3">
					<img src="<?= base_url('assets/img/logo-stikes-pth-2.png') ?>" class="mb-3" width="90px">
					<p class="h5 fc-white ff-schbk">SEKOLAH TINGGI ILMU KESEHATAN NASIONAL</p>
					<p class="h5 fc-white ff-schbk">Competitive, Competent, and Trustworthy</p>
				</div>
				<div class="col-md-3 fc-white fs-12 mb-3">
					<h3 class="mb-2">Kontak</h3>
					<p class="mb-1">
						<b>Kampus I</b><br>
						Jl. Solo Baki, Kwarasan, Grogol, Jawa Tengah, Indonesia
					</p>
					<p class="mb-1">
						<b><i class="fa fa-phone-square"></i> : 0271 5723399</b>
					</p>
					<p class="mb-1">
						<b><i class="fa fa-envelope-square"></i> : stikesnas@stikesnas.ac.id</b>
					</p>
				</div>
				<div class="col-md-3 fc-white fs-12 mb-3">
					<h3 class="mb-2">Link</h3>
					<p class="mb-2">
						<a href="#" class="link fc-white">
							KERJA SAMA
						</a>
					</p>
					<p class="mb-2">
						<a href="<?= base_url('profile') ?>" class="link fc-white">
							TENTANG STIKESNAS
						</a>
					</p>
					<p class="mb-2">
						<a href="<?= base_url('maps') ?>" class="link fc-white">
							PETA KAMPUS
						</a>
					</p>
					<p class="mb-2">
						<a href="https://pmb.stikesnas.ac.id" class="link fc-white">
							PENDAFTARAN
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="end-footer pt-1 pb-1 main-color-2">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="my-0 fc-white">
						<small>
							<i class="fa fa-copyright"></i><?= date('Y') ?>. STIKES NASIONAL
						</small>
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>
</body>
</html>
<script type="text/javascript">
	$( document ).ready(function() {
		var tab = $('ul#main-tab').data('tab');
        $('ul.list-inline li a.'+tab).addClass('active');                       
		// alert(tab);                                                   
    });
</script><script type="text/javascript">
	$( document ).ready(function() {
		var tab = $('ul#main-tab').data('tab');
        $('ul.list-inline li a.'+tab).addClass('active');                       
		// alert(tab);                                                   
    });
</script>