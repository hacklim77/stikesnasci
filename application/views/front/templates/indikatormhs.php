<div class="locbreadcrumb">
	<div class="container">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a class="link" href="<?= base_url(''); ?>">Beranda</a></li>
		    <li class="breadcrumb-item"><a class="link" href="<?= base_url('kemahasiswaan'); ?>">Kemahasiswaan</a></li>
		    <?php if ($_SERVER['HTTP_REFERER'] == base_url('lppm/penelitian')) {?>
                <li class="breadcrumb-item"><a class="link" href="<?= base_url('kemahasiswaan/beasiswa'); ?>">Beasiswa</a></li>
            <?php } ?>
		    <?php if ($_SERVER['HTTP_REFERER'] == base_url('lppm/pkm')) {?>
                <li class="breadcrumb-item"><a class="link" href="<?= base_url('kemahasiswaan/hibahmhs'); ?>">Pengabdian Kepada Masyarakat</a></li>
            <?php } ?>
		    <?php if ($_SERVER['HTTP_REFERER'] == base_url('lppm/informasi')) {?>
                <li class="breadcrumb-item"><a class="link" href="<?= base_url('kemahasiswaan/skp'); ?>">SKP</a></li>
            <?php } ?>
		    <?php if ($_SERVER['HTTP_REFERER'] == base_url('lppm/agenda')) {?>
                <li class="breadcrumb-item"><a class="link" href="<?= base_url('kemahasiswaan/alumni'); ?>">Alumni</a></li>
            <?php } ?>
		    <?php if ($_SERVER['HTTP_REFERER'] == base_url('lppm/agenda')) {?>
                <li class="breadcrumb-item"><a class="link" href="<?= base_url('kemahasiswaan/seminar'); ?>">Seminar dan Workshop</a></li>
            <?php } ?>
		    <?php if ($_SERVER['HTTP_REFERER'] == base_url('lppm/agenda')) {?>
                <li class="breadcrumb-item"><a class="link" href="<?= base_url('kemahasiswaan/ukm'); ?>">Unit Kegiatan Mahasiswa</a></li>
            <?php } ?>
		    <?php if ($_SERVER['HTTP_REFERER'] == base_url('lppm/agenda')) {?>
                <li class="breadcrumb-item"><a class="link" href="<?= base_url('kemahasiswaan/organisasi'); ?>">Organisasi</a></li>
            <?php } ?>
		    <?php if ($_SERVER['HTTP_REFERER'] == base_url('lppm/agenda')) {?>
                <li class="breadcrumb-item"><a class="link" href="<?= base_url('kemahasiswaan/survey'); ?>">Survey Layanan Kemahasiswaan</a></li>
            <?php } ?>
		    <?php if ($_SERVER['HTTP_REFERER'] == base_url('lppm/agenda')) {?>
                <li class="breadcrumb-item"><a class="link" href="<?= base_url('kemahasiswaan/download'); ?>">Download</a></li>
            <?php } ?>
		    <?php foreach ($berita as $key):?>
                <li class="breadcrumb-item active" aria-current="page"><?= substr($key->judul_berita,0,25).'.....'?></li>
            <?php endforeach ?>    
        </ol>
		</nav>
	</div>
</div>