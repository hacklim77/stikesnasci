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
			
                        <h3 class="c-title mt-3">Seminar dan Workshop</h3>
						<div id="list">
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
            
			<div class="col-md-8">
				<div class="mb-3">
					<img src="<?= base_url('assets/img/kemahasiswaan-stikesnasional.jpg')?>" style="width: 100%;">
				</div>
				<div>
                    <p class="text-justify p-indent">
                    Mahasiswa sebagai bagian sejarah Indonesia telah terukir kiprahnya dalam banyak kancah kehidupan bangsa. Berbagai peristiwa penting membuktikan bahwa mahasiswa memegang peran yang berpengaruh kuat terhadap perubahan tatanan kehidupan bangsa dan negara. Mahasiswa adalah luaran dari sistem pendidikan nasional yang akan menjadi penggerak bangsa dimasa depan. Oleh karena itu, salah satu indikator kemajuan suatu bangsa dapat diukur dari kualitas mahasiswanya saat ini. Mahasiswa yang berkualitas adalah mahasiswa yang memiliki multi kecerdasan, kecerdasan intelektual, emosional, spiritual dan sosial. Oleh karena itu, proses pembelajaran perguruan tinggi harus mampu mengembangkan soft skills dan hard skills mahasiswa serta mampu membangkitkan, menumbuhkan, dan mengembangkan berbagai dimensi kecerdasan tersebut.</p>
                    <p class="text-justify p-indent"> Mahasiswa STIKES Nasional yang tergabung dalam Keluarga Mahasiswa (KM STIKES Nasional) yang merupakan bentuk organisasi kemahasiswaan. Organisasi kemahasiswaan dituntut mempersiapkan diri menghadapi era baru yang mengedepankan pentingnya manajemen organisasi dan komunikasi dalam dunia global. Organisasi kemahasiswaan memiliki peran penting dalam membentuk kepribadian, karakter, watak yang berwawasan luas sebagai penyiapan tenaga profesional dalam bidangnya. Sejalan dengan motto yang diiliki oleh STIKES Nasional yaitu membentuk mahasiswa dan lulusan yang Competent, Competitive dan Trustworthy, maka peran organisasi mahasiswa menjadi penting untuk semakin mempertegas motto tersebut.</p>
                    <p class="text-justify p-indent">Untuk mendukung peranan Keluarga Mahasiswa (KM) STIKES Nasional maka disusun panduan kegiatan kemahasiswaan. Buku panduan kegiatan kemahasiswaan ini diharapkan mampu memberikan arah (guidance) agar terlaksananya seluruh kegiatan kemahasiswaan.
                    </p>
                </div>
			</div>
		</div>
	</div>
</div>