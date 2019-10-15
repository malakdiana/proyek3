
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Kriteria</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Kriteria</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="pull-right"><a href="javascript:void(0);" class="btn btn-success float-right" onclick="showModal()"><span class="fa fa-plus" ></span> Add</a></div>
                                <strong class="card-title">Table Kriteria</strong>
                            </div>
                            <div class="card-body">
                                <table id="kriteria" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kriteria</th>
                                            <th>Keterangan</th>
                                            <th>Batasan Maksimal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbkriteria">
<!--                                        <?php foreach ($kriteria as $key ) { ?>
                                        <tr>
                                            <td><?php echo $key->kriteria ?></td>
                                            <td><?php echo $key->keterangan ?></td>
                                            <td><?php echo $key->batas_max ?></td>
                                            <td><button>edit</button><button>delete</button></td>
                                        </tr>
                                      <?php } ?> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        <form id="formbaru">
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Kriteria</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                        </div>
                        <div class="modal-body">               
                            <div class="container-fluid">   
                                <div class="row">        
                                    <!-- form inputan nama kegiatan -->
                                    <div class="form-group col-lg-12 row">
                                        <div class="col-12">
                                            <label>Kriteria</label>
                                            <input type="text" id="kriteriaa" class="form-control" placeholder="Masukkan Kriteria" style="width: 100%" required>
                                            <label>Keterangan</label>
                                            <input type="text" id="keterangan" class="form-control" placeholder="Masukkan Keterangan" style="width: 100%" required>
                                            <label>Batasan Maximal</label>
                                            <input type="text" id="batas" class="form-control" placeholder="Masukkan Batasan" style="width: 100%" required>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class="modal-footer">
                                        <!-- inputan button simpan dan Cancel -->
                                        <button type="submit" id="btn_push" class="btn btn-primary ">Add</button>
                                        <button type="button" class="btn btn-secondary " data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <form id="formupdate">
            <div class="modal fade" id="Modal_Update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Update Kriteria</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                        </div>
                        <div class="modal-body">               
                            <div class="container-fluid">   
                                <div class="row">        
                                    <!-- form inputan nama kegiatan -->
                                    <div class="form-group col-lg-12 row">
                                        <label>Kriteria</label>
                                            <input type="text" id="upkriteria" name="upkriteria" class="form-control" placeholder="Masukkan Kriteria" style="width: 100%" required>
                                            <label>Keterangan</label>
                                            <input type="text" id="upketerangan" name="upketerangan" class="form-control" placeholder="Masukkan Keterangan" style="width: 100%" required>
                                            <label>Batasan Maximal</label>
                                            <input type="text" id="upbatas" name="upbatas" class="form-control" placeholder="Masukkan Batasan" style="width: 100%" required>
                                    </div>
                                    <!--  -->
                                    <div class="modal-footer">
                                        <!-- inputan button simpan dan Cancel -->
                                        <input type="text" id="u_id" name="u_id" hidden="">
                                        <button type="submit" id="btn_push" class="btn btn-primary ">Save</button>
                                        <button type="button" class="btn btn-secondary " data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <form id="formdelete">
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Delete Kriteria</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                        </div>
                        <div class="modal-body">                          

                            <div class="form-group col-lg-12">
                                <font>Anda ingin menghapus <b><font id="kriteriadel"></font></b> ?</font>
                                <input type="hidden" name="id_del" id="id_del" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                                <button type="submit" id="btn_delete" class="btn btn-danger col-md-3">Hapus</button>    
                                <button type="button" class="btn btn-secondary col-md-3" data-dismiss="modal" style="margin-right: 20px">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="<?php echo base_url() ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/jquery/dist/jquery.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.js"></script>
    
    <script src="<?php echo base_url() ?>assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/bootstrap/dist/js/bootstrap.js"></script>
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>


    <script src="<?php echo base_url() ?>assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/datatables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/init-scripts/data-table/datatables-init.js"></script>
    <script src="<?php echo base_url() ?>assets/js/sweetalert2@8.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
        showKriteria();

        function showKriteria() {
                    $.ajax({
                        type  : 'POST',
                        url   : '<?php echo base_url()?>index.php/Kriteria/getData',
                        async : false,
                        dataType : 'json',
                        success : function(data){
                            var html = '';
                            var i;

                            var script = document.createElement("SCRIPT");
                            script.src = '<?php echo base_url() ?>assets/js/bootstrap.min.js';
                            script.type = 'text/javascript';
                            script.onload = function() {
                                var $ = window.jQuery;
                            };
                            document.getElementsByTagName("head")[0].appendChild(script);

                            for(i=0; i<data.length; i++){
                                var ii = i+1;
                                html += '<tr>'+
                                '<td>'+data[i].kriteria+'</td>'+
                                '<td>'+data[i].keterangan+'</td>'+
                                '<td>'+data[i].batas_max+'</td>'+
                                '<td>'+ '<a href="javascript:void(0);" class="btn btn-warning btn-sm item_edit" data-id="'+data[i].id_kriteria+'" data-kriteria="'+data[i].kriteria+'" data-keterangan="'+data[i].keterangan+'" data-batas_max="'+data[i].batas_max+'"> <span class="fa fa-edit"></span> </a>'+ 
                                '     '+
                                '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id_kriteria+'" data-kriteria="'+data[i].kriteria+'"> <span class="fa fa-trash"></span> </a>'+
                                '</td>'+
                                '</tr>';
                            }
                            $('#kriteria').DataTable().destroy();
                            $('#kriteria').find('tbody').empty();
                            $('#tbkriteria').html(html);
                            $('#kriteria').DataTable({
                                destroy         : true,
                                'autoWidth'     : true,
                                'paging'        : true,
                                'lengthChange'  : true,
                                'searching'     : true,
                                'ordering'      : true,
                                'info'          : true
                            });
                        }
                    });
                }

                $('#formbaru').submit(function(e){
                e.preventDefault();
                // memasukkan data inputan ke variabel
                var kriteria       = $('#kriteriaa').val();
                var keterangan       = $('#keterangan').val();
                var batas       = $('#batas').val();
                // alert(kriteria);

                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/Kriteria/new",
                    dataType : "JSON",
                    data : {
                        kriteria:kriteria,
                        keterangan:keterangan,
                        batas:batas,
                    },

                    success: function(){ 
                        Swal.fire({
                            type: 'success',
                            title: 'Berhasil menambahkan data ',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        $("#kriteria").DataTable().destroy();
                        $("#kriteria").find('tbody').empty();
                        document.getElementById('formbaru').reset();
                        showKriteria();
                        $('#Modal_Add').modal('hide'); 
                        $('.modal-backdrop').removeClass('show'); 
                    }
                });

                return false;
            });

                //update subsektor
                $('#kriteria').on('click','.item_edit',function(){
                    // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel 
                    var id            = $(this).data('id');
                    var kriteria          = $(this).data('kriteria'); 
                    var keterangan          = $(this).data('keterangan'); 
                    var batas          = $(this).data('batas_max'); 

                    // alert(kriteria);
                    // memasukkan data ke form updatean
                    $('[name="u_id"]').val(id);
                    $('[name="upkriteria"]').val(kriteria);
                    $('[name="upketerangan"]').val(keterangan);
                    $('[name="upbatas"]').val(batas);

                    // alert(upnama);
                    $('#Modal_Update').modal('show');
                });

                //UPDATE MASTER to database (submit button)
                $('#formupdate').submit(function(e){
                    e.preventDefault(); 
                    // memasukkan data dari form update ke variabel untuk update db
                    var up_id       = $('#u_id').val();
                    var up_kriteria     = $('#upkriteria').val();
                    var up_keterangan     = $('#upketerangan').val();
                    var up_batas     = $('#upbatas').val();
                    alert(up_keterangan);

                    $.ajax({
                        type : "POST",
                        url  : "<?php echo site_url(); ?>/Kriteria/update",
                        dataType : "JSON",
                        data : { 
                            id:up_id,
                            kriteria:up_kriteria,
                            keterangan:up_keterangan,
                            batas:up_batas,
                        },

                        success: function(data){
                            Swal.fire({
                                type: 'success',
                                title: 'Berhasil memperbarui data ',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $('#Modal_Update').modal('hide'); 
                            $("#kriteria").DataTable().destroy();
                            $("#kriteria").find('tbody').empty();
                            document.getElementById('formupdate').reset();
                            showKriteria();
                        }
                    });
                    return false;
                });

                //delete subsektor
                $('#kriteria').on('click','.item_delete',function(){
                    var id = $(this).data('id');
                    var kriteria = $(this).data('kriteria'); 
                    
                $('#Modal_Delete').modal('show');
                // alert(act);
                document.getElementById("kriteriadel").innerHTML=kriteria;
                $('[name="id_del"]').val(id);
            });

            //delete record to database
            $('#formdelete').submit(function(e){
                e.preventDefault(); 
                var id = $('#id_del').val();
                
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/Kriteria/delete",
                    dataType : "JSON",
                    data : {
                        id:id,
                    },
                    success: function(){
                        $('[name="id_del"]').val("");
                        Swal.fire({
                            type: 'success',
                            title: 'Berhasil menghapus data ',
                            showConfirmButton: true,
                        })
                        $('#Modal_Delete').modal('hide'); 
                        $("#kriteria").DataTable().destroy();
                        $("#kriteria").find('tbody').empty();
                        document.getElementById('formdelete').reset();
                        showKriteria();
                    }
                });
                return false;
            });
        });

function showModal() {
    $('.modal-backdrop').addClass('show'); 
    $('#Modal_Add').modal('show'); 
}
</script>
</body>

</html>
