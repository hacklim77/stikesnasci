<div class="slider">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				  </ol>
				  <div class="carousel-inner">
				  	<div class="b-pict carousel-item" style="background-image: url('<?= base_url('userfiles/slider/diesnatalisstikesnasional2021_1.jpg') ?>');">
				    </div>
				    <div class="b-pict carousel-item active" style="background-image: url('<?= base_url('userfiles/slider/Untitled-01.jpg') ?>');">
				    </div>
				    <div class="b-pict carousel-item" style="background-image: url('<?= base_url('userfiles/slider/slide-02.jpg') ?>');">
				    </div>
				    <div class="b-pict carousel-item" style="background-image: url('<?= base_url('userfiles/slider/mhs STIKES.jpg') ?>');">
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- content -->
<div class="pt-3">
	<div class="container mb-5">
		<div class="row">

			<!-- info Kampus -->
			<div class="col-md-4"> 
				<h3 class="c-title">Info Kampus</h3>
					<div>
						<ul class="list-v">
							<?php foreach ($infomhs as $key) :?>
								<li>
									<a class="link" href="#"><?= $key['judul_berita'] ?></a>
									
										<br>
										<small class="fc-grey">
											<i><?= $key['tipe_berita'] ?></i>
										</small>
								</li>
							<?php endforeach ?>	
								<li class="more">
									<a class="link" href="">lainnya <i class="fa fa-angle-right"></i></a>
								</li>
						</ul>
					</div>
				<div id="infokampus">
					<!-- <script type="text/javascript">
						$('#infokampus').load('apps/front/ajax/info_kampus.php?v=1');
					</script> -->
				</div>
			</div> 
			<!-- penutup info kampus -->

			<!-- berita utama -->					
			<div class="col-md-8"> 
				<h3 class="c-title">Berita Utama</h3>
				<div class="row">
					<?php foreach ($berita as $key) :?>
						<div class="col-md-6 mb-3">
							<a href="<?= $key['judul_berita'] ?>" class="fc-main link-2" title="<?= $key['judul_berita']; ?>">
								<div class="news">
									<div class="news-pict mb-2 b-pict" style="background-image: url('<?= base_url('userfiles/img/'.$key['img_berita']) ?>'); ">
									</div>
									<p class="mb-0" style="color: #EE1616; font-size: 12px"><?= longdate_indo($key['tgl_upload']) ?></p>
									<h4 class="news-title"><?= $key['judul_berita'] ?></h3>
									<p style="font-size: 14px;">
									</p>
								</div>
							</a>
						</div>
					<?php endforeach;?>
					<div class="col-md-12 mb-2">
						<div class="more">
							<a class="link" href="<?= base_url('berita') ?>">Info berita selengkapnya <i class="fa fa-angle-right"></i></a>
						</div>
					</div>
					
				</div>
			</div>
			<!-- penutup berita utama -->			

		</div>
	</div>

	<!-- info pendaftaran pmb -->					
	<div style="position: relative;" class="pt-4 pb-4 pmbad">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div>
						<img src="<?= base_url('assets/img/allstikesnas.png') ?>" style="max-width: 100%; bottom: 0; left: 0; padding: 0 15px;">
					</div>
					<!-- <div class="video-container">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/qXxSz75iK10?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen ></iframe>
					</div> -->
				</div>
				<div class="col-md-8 d-flex align-items-center">
					<div>
						<h4 class="pt-2">Mari bergabung di kampus kami</h4>
						<h2>Penerimaan Mahasiswa Baru</h2>
						<a href="https://pmb.stikesnas.ac.id" class="btn btn-primary">Bergabung sekarang</a>
						<hr>
						<p style="color: red; font-weight: bold;">
							Sehubungan dengan adanya Surat Edaran Pemerintah Daerah, serta Surat Edaran Ketua STIKES Nasional dalam rangka meminimalisir penyebaran COVID-19.

							Kami informasikan bahwa proses penerimaan mahasiswa baru STIKES Nasional di optimalkan secara online melalui web (pmb.stikesnas.ac.id) dan hotline service.

							Tidak melayani pendaftaran langsung di kampus.

							Harap menjadikan maklum adanya.

							Hotline: 0852-1999-1918
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- penutup info pendaftaran pmb -->						
	
	<!-- media player -->
	<div class="pt-4 pb-2" style="background-color:#a8a8a8">
		<div class="container">
			<div class="row mb-1">
				<div class="col-md-4 mb-2 order-2 order-md-1">
					<audio class="w-100" controls src="<?= base_url('userfiles/mars_hymne/HYMNE_mix_preview.mp3') ?>" style="height: 50px; border-radius: 25px;"> 
					 	Your browser doesn't support the audio. 
					</audio>
				</div>
				<div class="col-md-8 mb-2 order-1 order-md-2">
					<h4 class="pt-2">Hymne STIKES NASIONAL</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 mb-2 order-2 order-md-1">
					<audio class="w-100" controls src="<?= base_url('userfiles/mars_hymne/MARS_mix_preview.mp3') ?>" style="height: 50px; border-radius: 25px;"> 
					 	Your browser doesn't support the audio. 
					</audio>
				</div>
				<div class="col-md-8 mb-2 order-1 order-md-2">
					<h4 class="pt-2">Mars STIKES NASIONAL</h4>
				</div>
			</div>
		</div>
	</div>
	<!-- penutup media player -->						

</div>
<!-- penutup content -->