<div class="content mhl-ft">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url("admin") ?>">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">CDC</li>
                    <li class="breadcrumb-item active" aria-current="page">Benchmarking</li>
                  </ol>
                </nav>
            </div>
        </div>
    <div class="card carea">   
    <div class="alert alert-success" role="alert" id="success" style="display:none ;"></div> 
    <div class="card-header" data-background-color="purple">
        <div class="row">
            <div class="col-md-12">
                <h4 class="title">Tambah Benchmarking</h4>
            </div>
        </div>
        <!-- <p class="category">Here is a subtitle for this table</p> -->
    </div>
    <div class="card-content table-responsive">   
        <form method="post" enctype="multipart/form-data" action="<?= base_url('berita/tambahBerita/') ?>">
            <div class="row">  
                <div class="col-md-12">
                
                    <div class="form-group">
                        <label>Judul</label>
                        <input name="judul_berita" id="judul_berita" type="text" class="form-control" accept-charset="character_set">
                    </div>
                    <div class="form-group">
                        <label>Gambar Cover</label>
                        <input name="gambar" type="file" class="form-control" style="opacity: 1; margin-top:20px">
                    </div>
                    <div class="form-group">
                        <label>isi</label>
                        <textarea name="isi_berita" id="isi_berita" rows="14" class="form-control textexp"></textarea>
                    </div>
                    <input type="hidden" name="tipe_berita" value="<?php print_r($tipe[21]); ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button name="saveBerita" type="submit" class="btn btn-primary pull-right">simpan</button>
                    <a href="" class="btn btn-danger pull-right">Kembali</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </form>
    </div>
    </div>
</div>

</div>

<script>
    tinymce.init({
        selector: "textarea",theme: "modern",
        plugins: [
             "advlist autolink link image lists charmap print preview hr anchor pagebreak",
             "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
             "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
       ],
       toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
       toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
       image_advtab: true ,
       
       external_filemanager_path:"/filemanager/",
       filemanager_title:"Filemanager" ,
       external_plugins: { "filemanager" : "../../../filemanager/plugin.min.js"}
    });
</script>
