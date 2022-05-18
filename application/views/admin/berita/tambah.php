<div class="content mhl-ft">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url("admin") ?>">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">informasi</li>
                    <li class="breadcrumb-item active" aria-current="page">berita</li>
                  </ol>
                </nav>
            </div>
        </div>
    <div class="card carea">    
    <div class="card-content table-responsive">
        <form method="post" enctype="multipart/form-data" action="" id="createBerita">
            <div class="row">  
                <div class="col-md-12">
                
                    <div class="form-group">
                        <label>Judul</label>
                        <input name="judul_berita" type="text" class="form-control" accept-charset="character_set" value="">
                    </div>
                    <div class="form-group">
                        <label>gambar cover</label>
                        <input name="gambar" type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>isi</label>
                        <textarea name="isi_berita" rows="14" class="form-control textexp"></textarea>
                    </div>
                    <!-- <div class="form-group">
                        <label>tags</label>
                        <input name="judul" type="text" class="form-control" data-role="tagsinput">
                    </div> -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="hidden" name="ti" value="">
                    <input type="hidden" name="ur" value="">
                    <button name="simpan" type="submit" class="btn btn-primary pull-right">simpan</button>
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

<script src="type/javascript">
    $('#createBerita').submit(function(event){
        event.preventDefault();

        $.ajax({
            url :   '<?= base_url('Berita/tambahBerita'); ?>',
            data:   $('createBerita').serialize(),
            type:   'post',
            dataType    : 'json',
            success : function(response)
            {
                $('#createBerita')[0].reset();
                alert('Berita berhasil ditambahkan');

            },
            error:  function()
            {
                alert('Error');
            }
        });
    })
</script>