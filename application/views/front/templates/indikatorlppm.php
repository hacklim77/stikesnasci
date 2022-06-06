<div class="locbreadcrumb">
	<div class="container">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a class="link" href="<?= base_url(''); ?>">Beranda</a></li>
		    <li class="breadcrumb-item"><a class="link" href="<?= base_url('lppm'); ?>">LPPM</a></li>
		    <?php if ($_SERVER['HTTP_REFERER'] == base_url('lppm/penelitian')) {?>
                <li class="breadcrumb-item"><a class="link" href="<?= base_url('lppm/penelitian'); ?>">Penelitian</a></li>
            <?php } ?>
		    <?php if ($_SERVER['HTTP_REFERER'] == base_url('lppm/pkm')) {?>
                <li class="breadcrumb-item"><a class="link" href="<?= base_url('lppm/pkm'); ?>">Pengabdian Kepada Masyarakat</a></li>
            <?php } ?>
		    <?php if ($_SERVER['HTTP_REFERER'] == base_url('lppm/informasi')) {?>
                <li class="breadcrumb-item"><a class="link" href="<?= base_url('lppm/informasi'); ?>">Informasi</a></li>
            <?php } ?>
		    <?php if ($_SERVER['HTTP_REFERER'] == base_url('lppm/agenda')) {?>
                <li class="breadcrumb-item"><a class="link" href="<?= base_url('lppm/agenda'); ?>">Agenda</a></li>
            <?php } ?>
		    <?php foreach ($berita as $key):?>
                <li class="breadcrumb-item active" aria-current="page"><?= substr($key->judul_berita,0,25).'.....'?></li>
            <?php endforeach ?>    
        </ol>
		</nav>
	</div>
</div>