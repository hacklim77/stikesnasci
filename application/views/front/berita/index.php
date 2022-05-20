<div class="content">
	<div class="container">
		<div class="row">
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
									<a class="link" href="<?= base_url('infokampus') ?>">lainnya <i class="fa fa-angle-right"></i></a>
								</li>
						</ul>
					</div>
				<<!-- div id="infokampus">
					<script type="text/javascript">
						$('#infokampus').load('apps/front/ajax/info_kampus.php');
					</script>
				</div> -->
			</div>
			<div class="col-md-8">
				<h3 class="c-title">Berita</h3>
				<div>
					<ul class="list-v">
                        <?php foreach ($berita as $key) :?>
							<li>
								<a class="link" href="<?= base_url('berita/detailberita/');?><?= $key['judul_berita'];?>">
									<?= $key['judul_berita'] ?><br>
									<small class="fc-grey"><i><?= longdate_indo($key['tgl_upload']) ?></i></small>
								</a>
							</li>
                        <?php endforeach;?>
					</ul>
                    <?= $this->pagination->create_links(); ?>
					<?php 
                        if($berita == null){
                            echo "<i>Berita tidak tersedia</i>";
                        }
					?>
				</div>
			</div>
		</div>
	</div>
</div>