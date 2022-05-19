<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h3 class="c-title">LPPM</h3>
				<div>
                    <ul class="list-v">
                        <li>
                            <a class="link" href="<?= base_url('lppm/penelitian') ?>">Penelitian</a>
                        </li>
                        <li>
                            <a class="link" href="<?= base_url('lppm/pkm') ?>">Pengabdian Kepada Masyarakat</a>
                        </li>
                        <li>
                            <a class="link" href="<?= base_url('lppm/informasi') ?>">Informasi</a>
                        </li>
                        <li>
                            <a class="link" href="<?= base_url('lppm/agenda') ?>">Agenda LPPM</a>
                        </li>
                        <li>
                            <a class="link" target="_blank" href="http://ojs.stikesnas.ac.id">Jurnal</a>
                        </li>
                    </ul>
				</div>
			</div>
			<div class="col-md-8">
                <?php foreach ($berita as $key) :?>
				<h3 class="c-title"><?= $key['judul_berita'] ?></h3>
				<div class="mb-3">
					<img src="<?= $key['img_berita'] ?>" style="width: 100%;">
				</div>
				<div>
					<p class="text-justify p-indent">
                    <?= $key['isi_berita'] ?>
					</p>
				</div>
                <? endforeach ?>
			</div>
		</div>
	</div>
</div>