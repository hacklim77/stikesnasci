<h3 class="c-title">Beasiswa</h3>
					<div id="seminar">
                        <ul class="list-v">
                            <?php foreach($beasiswa as $key):?> 
                                <li>
                                    <a class="link" href="<?= base_url('berita/detailberita/').$key['judul_berita'];?>">
                                        <?= $key['judul_berita'] ?>
                                        <br>
                                        <small class="fc-grey"><i><?= longdate_indo($key['tgl_upload']) ?></i></small>
                                    </a>
                                </li>
                            <?php endforeach ?>    
                        </ul>
                        <div class="more">
                            <a class="link" href="<?= base_url('kemahasiswaan/beasiswa') ?>">Lihat Lainnya <i class="fa fa-angle-right"></i></a>
                        </div>
					</div>
			
                        <h3 class="c-title mt-3">Seminar dan Workshop</h3>
						<div id="list">
							<ul class="list-v">
								<?php foreach($seminar as $key):?> 
									<li>
										<a class="link" href="<?= base_url('berita/detailberita/').$key['judul_berita'];?>">
											<?= $key['judul_berita'] ?>
											<br>
											<small class="fc-grey"><i><?= longdate_indo($key['tgl_upload']) ?></i></small>
										</a>
									</li>
								<?php endforeach ?>    
							</ul>
							<div class="more">
                            	<a class="link" href="<?= base_url('kemahasiswaan/seminar') ?>">Lihat Lainnya <i class="fa fa-angle-right"></i></a>
                        	</div>
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