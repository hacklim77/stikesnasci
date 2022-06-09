			<div class="col-md-8">
				<?php foreach ($prodi as $key):?>
				
				<h3 class="c-title"><?= $key['nama_program_studi'] ?></h3>
				<p class="text-justify p-indent">
					<?= $key['tentang'] ?>
				</p>
				<h4 class="mt-3">Visi</h4>
				<p class="text-justify p-indent">
				<?= $key['visi'] ?>
				</p>
				<h4 class="mt-3">Misi</h4>
				<p class="text-justify p-indent">
				<?= $key['misi'] ?>
				</p>
				<?php endforeach ?>		
			</div>
		</div>
	</div>
</div>