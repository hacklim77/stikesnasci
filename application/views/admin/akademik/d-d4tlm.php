<div class="content mhl-ft">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url("admin") ?>">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Akademik</li>
                    <li class="breadcrumb-item active" aria-current="page">DIV Teknologi Laboratorium Medis</li>
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
                                <h4 class="title">DIV Teknologi Laboratorium Medis</h4>
                            </div>
                            <div class="col-md-4 text-right">
                                <a href="<?= base_url('akademik/createProdi') ?>" id="tambahBerita" class="btn btn-info m-t-0 m-b-0"><i class="material-icons">add</i> tambah</a> 
                            </div>
                        </div>
                        <!-- <p class="category">Here is a subtitle for this table</p> -->
                    </div>
                    <div class="card-content table-responsive">
                        <div class="tablearea">
                            <table cellspacing="0" class="table table-striped table-bordered" id="dataBerita" width="100%">
                                <thead>
                                    <tr>
                                        <th>Visi</th>
                                        <th>Misi</th>
                                        <!-- <th>Tentang</th> -->
                                        <!-- <th data-orderable="false">tag</th> -->
                                        <th class="text-center" style="width: 180px" data-orderable="false"><i class="material-icons">settings</i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($prodi as $key) :?>
                                        <tr>
                                            <td><?= substr($key['visi'],0,200).'...' ?></td>
                                            <td><?= substr($key['misi'],0,200).'...' ?></td>
                                            <!-- <td><?= substr($key['tentang'],0,200).'...' ?></td> -->
                                            <td colspan="2" align="center">
                                                <a href="<?= base_url('akademik/editProdi/'.$key['id_program_studi']) ?>" class="btn btn-sm btn-info btn-lihat-info"><i class="material-icons">visibility</i></a>
                                                <a onclick="deleteConfirm('<?= base_url('akademik/deleteProdi/'.$key['id_program_studi']) ?>')" href="#!" class="btn btn-sm btn-danger btn-hapus-info"><i class="material-icons">delete</i></a>
                                          
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
                    

                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
         $('#dataBerita').DataTable();
</script>

<script>
    function deleteConfirm(url){
        $(document).ready(function(){
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        })
    }
</script>