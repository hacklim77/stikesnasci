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
                                                
                                                <a onclick="deleteConfirm('<?= base_url('berita/deleteBerita/'.$key['id_berita']) ?>')" href="#!" class="btn btn-sm btn-danger btn-hapus-info"><i class="material-icons">delete</i></a>
                                          
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Yakin ingin menghapus berita ini?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Berita yang dihapus tidak akan bisa dikembalikan.</div>
                                <div class="modal-footer">
                                    <a class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</a>
                                    <a id="btn-delete" class="btn btn-danger" href="#" style="margin-top:-1px;">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <!-- <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Hapus Data Berita</h4>
                                </div>
                                <form class="form-horizontal">
                                    <div class="modal-body">
                                    <input type="hidden" name="id_berita" id="id_berita" value="">
                                    <div class="alert alert-danger"><p>Apakah Anda yakin mau memhapus berita ini?</p></div>   
                                    </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div> -->

                    <!-- <form method="post" id="delform">
                        <?php foreach ($berita as $key) :?>
                        <p>Yakin ingin menghapus berita "<?= $key->judul_berita;?>"</p>
                        <input type="hidden" name="id_berita" value="<?= $key->id_berita;?>">
                        <?php endforeach ?>
                        <button id="tombol_hapus" type="button" class="btn btn-danger" data-dismiss="modal" >Hapus</button>                            
                    </form> -->

                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
         $('#dataBerita').DataTable();
</script>

<!-- <script>
    $('#dataBerita').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="id_berita"]').val(id);
        });
    
    $('#btn_hapus').on('click',function(e){
        e.preventDefault();
        var id=$('#id_berita').val();
        $.ajax({
        type : "POST",
        url  : "<?php echo base_url()?>berita/deleteBerita",
          data : {id: id},
            success: function(data){
                    $('#ModalHapus').modal('hide');
                    berita();
            }
          });
        });
</script> -->

<script>
    function deleteConfirm(url){
        $(document).ready(function(){
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        })
    }
</script>

<!-- <script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_hapus").click(function(){
                var data = $('#delform').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>/berita/deleteBerita",
                    data: data,

                    cache	: false,
                    success	: function(data){
                        $('#dataBerita').load("<?php echo base_url(); ?>/berita/tblBerita");
                      
                    }
                });
            });
        });
</script> -->