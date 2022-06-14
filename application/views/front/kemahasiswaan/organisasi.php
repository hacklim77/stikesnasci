                <div>
					<h3 class="c-title">Beasiswa</h3>
					<div id="seminar">
                        <ul class="list-v">
                            <?php foreach($beasiswa as $key):?> 
                                <li>
                                    <a class="link" href="<?= base_url('berita/detmhs/').$key['judul_berita'];?>">
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
				</div>
                <div class="mt-3">
					<h3 class="c-title">Seminar dan Workshop</h3>
					<div id="seminar">
                        <ul class="list-v">
                            <?php foreach($seminar as $key):?> 
                                <li>
                                    <a class="link" href="<?= base_url('berita/detmhs/').$key['judul_berita'];?>">
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
			</div>
			<div class="col-md-8">
				<h3 class="c-title">Organisasi</h3>
				<div id="list">
                    <ul class="list-v">
                        <?php foreach($berita as $key):?> 
                            <li>
                                <a class="link" href="<?= base_url('berita/detmhs/').$key['judul_berita'];?>">
                                    <?= $key['judul_berita'] ?>
                                    <br>
                                    <small class="fc-grey"><i><?= longdate_indo($key['tgl_upload']) ?></i></small>
                                </a>
                            </li>
                        <?php endforeach ?>    
                    </ul>
                    <?= $this->pagination->create_links(); ?>
				</div>
			</div>
		</div>
	</div>
</div>