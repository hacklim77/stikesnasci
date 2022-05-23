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
                                        <th>Judul</th>
                                        <th>tgl unggah</th>
                                        <th>tgl edit</th>
                                        <!-- <th data-orderable="false">tag</th> -->
                                        <th class="text-center" style="width: 180px" data-orderable="false"><i class="material-icons">settings</i></th>
                                    </tr>
                                </thead>
                                <tbody id="show_data">
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
    $(document).ready(function(){
        $("#dataBerita").DataTable({
            "ajax" : {
                "url"   : '<?= base_url();?>berita/dataBerita',
                "dataSrc" : ""
            },
            "columns" : [
                /* { data: null, render: function ( data, type, row ) {
                    return data.id_berita;
                } }, */
                {"data" : "judul_berita"},
                {"data" : "tgl_upload"},
                {"data" : "tgl_edit"},
                /* {
                     "data" : null,
                    className: "btn btn-sm btn-info btn-lihat-info",
                    defaultContent: '<i class="material-icons">visibility</i>',
                    url: ""
                },
                {
                    "data" : null,
                    className: "btn btn-sm btn-danger btn-hapus-info",
                    defaultContent: '<i class="material-icons">delete</i></a></center>',
                    url: ""
                } */
            ],
            columnDefs: [{
                "targets": 3,
                "render": function(data, type, row, meta) {
                    return `<center><a href="" class="btn btn-sm btn-info btn-lihat-info"><i class="material-icons">visibility</i></a>  
                            <a href="#hapusinfo" class="btn btn-sm btn-danger btn-hapus-info"><i class="material-icons">delete</i></a></center>`;
                }
            }]
        });

        $('#dataBerita').on('draw.dt', function(){
            $('#dataBerita').Tabledit({
            url:'<?= base_url('berita/editberita') ?>',
            dataType:'json',
            columns:{
                identifier : ['id_berita'],
                editable:[['id_berita']]
            },
            restoreButton:false,
            onSuccess:function(data, textStatus, jqXHR)
            {
                if(data.action == 'delete')
                {
                $('<?= base_url('berita/hapusberita') ?>' + data.id).remove();
                $('#dataBerita').DataTable().ajax.reload();
                }
            }
            });
            });
    });
</script>

<!-- <script type="text/javascript">
    $("#tambahBerita").click(function(){
        $.ajax({url:'<?= base_url(); ?>berita/tambahBerita',
            type : "post",
            success : function(){
                console.log(url);
            }
        });
    })
</script> -->