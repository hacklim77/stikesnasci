<div class="locbreadcrumb">
	<div class="container">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a class="link" href="<?= base_url(''); ?>">Beranda</a></li>
		    <li class="breadcrumb-item"><a class="link" href="<?= base_url('cdc'); ?>">CDC</a></li>
		    <?php if ($_SERVER['HTTP_REFERER'] == base_url('cdc/roc')) {?>
                <li class="breadcrumb-item"><a class="link" href="<?= base_url('cdc/roc'); ?>">Recruitment on Campus</a></li>
            <?php } ?>
		    <?php if ($_SERVER['HTTP_REFERER'] == base_url('cdc/tracerStudy')) {?>
                <li class="breadcrumb-item"><a class="link" href="<?= base_url('cdc/tracerStudy'); ?>">Tracer Study</a></li>
            <?php } ?>
		    <?php if ($_SERVER['HTTP_REFERER'] == base_url('cdc/informasi')) {?>
                <li class="breadcrumb-item"><a class="link" href="<?= base_url('cdc/informasi'); ?>">Informasi</a></li>
            <?php } ?>
		    <?php if ($_SERVER['HTTP_REFERER'] == base_url('cdc/benchmarking')) {?>
                <li class="breadcrumb-item"><a class="link" href="<?= base_url('cdc/benchmarking'); ?>">Benchmarking</a></li>
            <?php } ?>
		    <?php if ($_SERVER['HTTP_REFERER'] == base_url('cdc/cdcloker')) {?>
                <li class="breadcrumb-item"><a class="link" href="<?= base_url('cdc/cdcloker'); ?>">Lowongan Pekerjaan</a></li>
            <?php } ?>
		    <?php if ($_SERVER['HTTP_REFERER'] == base_url('cdc/download')) {?>
                <li class="breadcrumb-item"><a class="link" href="<?= base_url('cdc/download'); ?>">Download</a></li>
            <?php } ?>
		    <?php foreach ($berita as $key):?>
                <li class="breadcrumb-item active" aria-current="page"><?= substr($key->judul_berita,0,25).'.....'?></li>
            <?php endforeach ?>    
        </ol>
		</nav>
	</div>
</div>