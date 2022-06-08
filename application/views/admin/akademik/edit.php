<div class="content mhl-ft">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url("admin") ?>">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Akademik</li>
                    <li class="breadcrumb-item active" aria-current="page">Program Studi</li>
                  </ol>
                </nav>
            </div>
        </div>
    <div class="card carea">   
    <div class="alert alert-success" role="alert" id="success" style="display:none ;"></div> 
    <div class="card-header" data-background-color="purple">
        <div class="row">
            <div class="col-md-12">
                <h4 class="title">Edit</h4>
            </div>
        </div>
        <!-- <p class="category">Here is a subtitle for this table</p> -->
    </div>
    <div class="card-content table-responsive">   
        <form method="post" enctype="multipart/form-data" action="<?= base_url('akademik/editProdi') ?>">
            <input type="hidden" value="<?= $prodi['id_program_studi']; ?>" name="'id_program_studi'">
            <div class="row">  
                <div class="col-md-12">
                    
                    <div class="form-group">
                        <label>Program Studi</label>
                        <input name="nama_program_studi" id="nama_program_studi"  type="text" class="form-control" accept-charset="character_set" value="<?= $prodi['nama_program_studi']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Gambar Cover</label>
                        <input name="img_program_studi" type="file" class="form-control" style="opacity: 1; margin-top:20px">
                    </div>
                    <div class="form-group">
                        <label></label>
                        <textarea name="visi" id="visi" rows="14" class="form-control textexp"><?= $prodi['visi']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label></label>
                        <textarea name="misi" id="misi" rows="14" class="form-control textexp"><?= $prodi['misi']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label></label>
                        <input type="hidden" name="tentang" id="tentang" value="<?= $prodi['tentang']; ?>">
                    </div>
                  
                    <!-- <div class="form-group">
                        <label>tags</label>
                        <input name="judul" type="text" class="form-control" data-role="tagsinput">
                    </div> -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary pull-right">simpan</button>
                    <a href="javascript:history.back()" class="btn btn-danger pull-right">Kembali</a>
                </div>
            </div>
            <!-- <div class="clearfix"></div> -->
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