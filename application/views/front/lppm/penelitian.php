<div class="col-md-8">
				<h3 class="c-title">Penelitian</h3>
				<div id="list">
                    <ul class="list-v">
                        <?php foreach($berita as $key):?> 
                            <li>
                                <a class="link" href="<?= base_url('berita/detlppm/').$key['judul_berita'];?>">
                                    <?= $key['judul_berita'] ?>
                                    <br>
                                    <small class="fc-grey"><i><?= longdate_indo($key['tgl_upload']) ?></i></small>
                                </a>
                            </li>
                        <?php endforeach ?>    
                    </ul>
                    <?php 
                    if($berita == null){
                        echo "<i>Belum ada Informasi Penelitian</i>";
                    }
                    ?>
				</div>
			</div>
		</div>
	</div>
</div>