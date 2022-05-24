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
        <div class="row">
            <div class="col-md-12">
                <div class="card carea">
                    <div class="card-header" data-background-color="purple">
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="title">Tabel berita</h4>
                            </div>
                            <div class="col-md-4 text-right">
                                <a href="<?= base_url('berita/tambahberita') ?>" id="tambahBerita" class="btn btn-info m-t-0 m-b-0"><i class="material-icons">add</i> tambah berita</a> 
                            </div>
                        </div>
                        <!-- <p class="category">Here is a subtitle for this table</p> -->
                    </div>
                    <div class="card-content table-responsive">
                        <div class="tablearea">
                            <table cellspacing="0" class="table table-striped table-bordered" id="dataBerita" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>tgl unggah</th>
                                        <th>tgl edit</th>
                                        <!-- <th data-orderable="false">tag</th> -->
                                        <th class="text-center" style="width: 180px" data-orderable="false"><i class="material-icons">settings</i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($berita as $key) :?>
                                        <tr>
                                            <td align="center"><?= $no++ ?></td>
                                            <td><?= $key['judul_berita'] ?></td>
                                            <td><?= $key['tgl_upload'] ?></td>
                                            <td><?= $key['tgl_edit'] ?></td>
                                            <td colspan="2" align="center">
                                                <a href="<?= base_url('berita/editberita/'.$key['id_berita']) ?>" class="btn btn-sm btn-info btn-lihat-info"><i class="material-icons">visibility</i></a>
                                                <a id="<?= $key['id_berita'] ?>" class="btn btn-sm btn-danger btn-hapus-info"><i class="material-icons">delete</i></a>
                                          
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
         $('#dataBerita').DataTable();
</script>

<script>
    $(document).on('click', 'delete', function(){
    var id = $(this).attr('id_berita');
    $.ajax({
        type: 'POST',
        url: "<?= base_url('berita/deleteBerita') ?>",
        data: {id:id_berita},
        success: function() {
            $('#dataBerita').load("<?= base_url('berita/tblBerita') ?>");
        }, error: function(response){
            console.log(response.responseText);
        }
    });
});
</script>