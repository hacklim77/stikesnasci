<?php
    echo $tipe;
?>
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
    <div class="alert alert-success" role="alert" id="success" style="display:none ;"></div> 
    <div class="card-header" data-background-color="purple">
        <div class="row">
            <div class="col-md-12">
                <h4 class="title">Tambah Berita</h4>
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
                    <!-- <div class="form-group">
                        <label>gambar cover</label>
                        <input name="gambar" type="file" class="form-control">
                    </div> -->
                    <div class="form-group">
                        <label>Gambar Cover</label>
                        <input name="gambar" type="file" class="form-control" style="opacity: 1; margin-top:20px">
                    </div>
                    <div class="form-group">
                        <label>isi</label>
                        <textarea name="isi_berita" id="isi_berita" rows="14" class="form-control textexp"></textarea>
                    </div>
                    <!-- <div class="form-group">
                        <label>tags</label>
                        <input name="judul" type="text" class="form-control" data-role="tagsinput">
                    </div> -->
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

<!-- <script src="type/javascript">

    $(document).ready(function() {
        $('#tambah').on('click',function(){
            $("#tambah").attr("disabled","disabled");
            var judul_berita = $('#judul_berita').val();
            var isi_berita = $('#isi_berita').val();
            var tgl_upload = $('#tgl_upload').val();
            var tgl_edit = $('#tgl_edit').val();
            var tipe_berita = $('#tipe_berita').val();
            var status = $('#status').val();

            if (judul_berita != "" && isi_berita !="") {
                $.ajax({
                    url : "<?= base_url('Berita/tambahBerita'); ?>",
                    type : "POST",
                    data : {
                        judul_berita : judul_berita,
                        isi_berita : isi_berita,
                        tgl_upload : tgl_upload,
                        tgl_edit : tgl_edit,
                        tipe_berita : tipe_berita,
                        status : status
                    },

                    cache : false,
                    success : function(dataResult){
                        var dataResult = JSON.parse(dataResult);
                        if(dataResult.statusCode == 200){
                            $("#saveBerita").removeAttr("disabled");
                            $("#createBerita").find('input:text').val('');
                            $("#success").show();
                            $("#success").html("Data berita berhasil ditambahkan!");
                        }
                        else if(dataResult.statusCode==201){
                            alert('Error');
                        }
                    }
                })
            }
            else{
                alert('Data tidak boleh kosong');
            }
        });
    });


    /* $('#createBerita').submit(function(event){
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
    }) */
</script> -->