<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="c-title">Biro Administrasi Umum dan Keuangan</h3>
                <ul class="list-v">
                    <?php foreach ($bauk as $key) : ?>
                        <li>
                            <a class="link" href="#">
                                <?= $key['judul_berita'] ?>
                                <br>
                                <small class="fc-grey"><i><?= longdate_indo($key['tgl_upload']) ?></i></small>
                            </a>
                        </li>
                    <?php endforeach ?>
                </ul>
                <?php 
                    if($bauk == null){
                        echo "<i>Belum ada info BAUK</i>";
                    }
                ?>

                
				<!-- <div id="list">
					<script type="text/javascript">
						$(document).ready(function(){
							$('#list').load('<?= base_url('apps/front/bauk/bauk_list.php')?>');
						});	
					</script>
				</div> -->
			</div>
		</div>
	</div>
</div>