<div class="col-md-8">
				<h3 class="c-title">Agenda</h3>
				<div id="list">
                    <ul class="list-v">
                        <?php foreach($berita as $key):?> 
                            <li>
                                <a class="link" href="<?= base_url('berita/detailberita/').$key['judul_berita'];?>">
                                    <?= $key['judul_berita'] ?>
                                    <br>
                                    <small class="fc-grey"><i><?= longdate_indo($key['tgl_upload']) ?></i></small>
                                </a>
                            </li>
                        <?php endforeach ?>    
                    </ul>
                    <?php 
                    if($berita == null){
                        echo "<i>Belum ada Informasi Agenda</i>";
                    }
                    ?>
				</div>
			</div>
		</div>
	</div>
</div>