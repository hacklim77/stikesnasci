<div class="content">
	<div class="container">
		<div class="row">
            <div class="col-md-4">
				
			<h3 class="c-title">Berita Lainnya</h3>
					<div>
						<ul class="list-v">
							<?php foreach ($listberita as $key) :?>
								<li>
									<a class="link" href="<?= base_url('berita/detailberita/').$key['judul_berita'];?>"><?= $key['judul_berita'] ?></a>										
								</li>
							<?php endforeach ?>	
								<li class="more">
									<a class="link" href="<?= base_url('berita') ?>">lainnya <i class="fa fa-angle-right"></i></a>
								</li>
						</ul>
					</div>
			</div>

			<div class="col-md-8">
                <?php foreach ($berita as $key) : ?>
				<h3 class="c-title"><?= $key->judul_berita ?></h3>
                <small style="color: #bbb;"> <i><?= longdate_indo($key->tgl_upload) ?></i></small>
				<div>
                    <?php if($key->img_berita == null) { ?>
                        <?php echo ""; ?>
                    <?php } else {  ?>
                        <img class="mt-3" src="<?= base_url('userfiles/img/'.$key->img_berita) ?>" style="width: 100%;">
					<?php } ?>
                    <p class="text-justify p-indent">
                    <?= $key->isi_berita ?>
					</p>
				</div>
                <?php endforeach; ?>
			</div>
		</div>
	</div>
</div>