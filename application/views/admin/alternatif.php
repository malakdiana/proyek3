
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Alternatif</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Alternatif</a></li>
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
                                <strong class="card-title">Table Alternatif</strong>
                            </div>
                            <div class="card-body">
                                <table id="alternatif" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nama Industri</th>
                                            <th>Desa dan Kecamatan</th>
                                            <th>A</th>
                                            <th>Tenaga Kerja</th>
                                            <th>Nilai Investasi</th>
                                            <th>Kapasitas Produksi</th>
                                            <th>Nilai Produksi</th>
                                            <th>Nilai Bahan Baku</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbAlternatif">
                                     
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
                            <h4 class="modal-title">Tambah Alternatif</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                        </div>
                        <div class="modal-body">               
                            <div class="container-fluid">   
                                <div class="row">        
                                    <!-- form inputan nama kegiatan -->
                                    <div class="form-group col-lg-12 row">
                                        <div class="col-12">
                                            <label>Alternatif Industri</label>
                                            <input type="text" id="alternatif" class="form-control" placeholder="Masukkan Alternatif" style="width: 100%" required>
                                            <label>Desa dan Kecamatan</label>
                                            <input type="text" id="desa" class="form-control" placeholder="Masukkan Desa dan Kecamatan" style="width: 100%" required>
                                            <label>Alias</label>
                                            <input type="text" id="alias" class="form-control" placeholder="Masukkan Alias" style="width: 100%" required>
                                             <label>Tenaga Kerja</label>
                                            <input type="text" id="tenaga" class="form-control" placeholder="Masukkan Tenaga Kerja" style="width: 100%" required>
                                             <label>Nilai Investasi</label>
                                            <input type="text" id="investasi" class="form-control" placeholder="Masukkan Nilai Investasi" style="width: 100%" required>
                                             <label>Kapasitas Produksi</label>
                                            <input type="text" id="kapasitas" class="form-control" placeholder="Masukkan Kapasitas Produksi" style="width: 100%" required>
                                             <label>Nilai Produksi</label>
                                            <input type="text" id="nilai" class="form-control" placeholder="Masukkan Nilai Produksi" style="width: 100%" required>
                                             <label>Nilai Bahan Baku</label>
                                            <input type="text" id="bahan" class="form-control" placeholder="Masukkan Bahan Baku" style="width: 100%" required>

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
                            <h4 class="modal-title">Update Alternatif</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                        </div>
                        <div class="modal-body">               
                            <div class="container-fluid">   
                                <div class="row">        
                                    <!-- form inputan nama kegiatan -->
                                    <div class="form-group col-lg-12 row">
                                       
                                            <label>Alternatif Industri</label>
                                            <input type="text" id="upalternatif" name="upalternatif" class="form-control" placeholder="Masukkan Alternatif" style="width: 100%" required>
                                            <label>Desa dan Kecamatan</label>
                                            <input type="text" id="updesa" name="updesa" class="form-control" placeholder="Masukkan Desa dan Kecamatan" style="width: 100%" required>
                                            <label>Alias</label>
                                            <input type="text" id="upalias" name="upalias" class="form-control" placeholder="Masukkan Alias" style="width: 100%" required>
                                             <label>Tenaga Kerja</label>
                                            <input type="text" id="uptenaga" name="uptenaga" class="form-control" placeholder="Masukkan Tenaga Kerja" style="width: 100%" required>
                                             <label>Nilai Investasi</label>
                                            <input type="text" id="upinvestasi" name="upinvestasi" class="form-control" placeholder="Masukkan Nilai Investasi" style="width: 100%" required>
                                             <label>Kapasitas Produksi</label>
                                            <input type="text" id="upkapasitas" name="upkapasitas" class="form-control" placeholder="Masukkan Kapasitas Produksi" style="width: 100%" required>
                                             <label>Nilai Produksi</label>
                                            <input type="text" id="upnilai" name="upnilai" class="form-control" placeholder="Masukkan Nilai Produksi" style="width: 100%" required>
                                             <label>Nilai Bahan Baku</label>
                                            <input type="text" id="upbahan" name="upbahan" class="form-control" placeholder="Masukkan Bahan Baku" style="width: 100%" required>
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
                            <h4 class="modal-title">Delete Alternatif</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                       
                        </div>
                        <div class="modal-body">                          

                            <div class="form-group col-lg-12">
                                <font>Anda ingin menghapus <b><font id="alternatifdel"></font></b> ?</font>
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
        showAlternatif();

        function showAlternatif() {
                    $.ajax({
                        type  : 'POST',
                        url   : '<?php echo base_url()?>index.php/Alternatif/getData',
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
                                '<td>'+data[i].nama_alternatif_industri+'</td>'+
                                '<td>'+data[i].desa+'</td>'+
                                '<td>'+data[i].alias+'</td>'+
                                '<td>'+data[i].tenaga_kerja+'</td>'+
                                '<td>'+data[i].investasi+'</td>'+
                                   '<td>'+data[i].kapasitas_produksi+'</td>'+
                                    '<td>'+data[i].nilai_produksi+'</td>'+
                                     '<td>'+data[i].bahan_baku+'</td>'+
                                '<td>'+ '<a href="javascript:void(0);" class="btn btn-warning btn-sm item_edit" data-id="'+data[i].id_alternatif+'" data-alternatif="'+data[i].nama_alternatif_industri+'" data-desa="'+data[i].desa+'" data-alias="'+data[i].alias+'" data-tenaga="'+data[i].tenaga_kerja+'" data-investasi="'+data[i].investasi+'" data-kapasitas="'+data[i].kapasitas_produksi+'" data-nilai="'+data[i].nilai_produksi+'" data-bahan="'+data[i].bahan_baku+'"> <span class="fa fa-edit"></span> </a>'+ 
                                '     '+
                                '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id_alternatif+'" data-alternatif="'+data[i].nama_alternatif_industri+'"> <span class="fa fa-trash"></span> </a>'+
                                '</td>'+
                                '</tr>';
                            }
                            $('#alternatif').DataTable().destroy();
                            $('#alternatif').find('tbody').empty();
                            $('#tbAlternatif').html(html);
                            $('#alternatif').DataTable({
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
                var alternatif     = $('#alternatif').val();
                var desa       = $('#desa').val();
                var alias       = $('#alias').val();
                var tenaga       = $('#tenaga').val();
                var investasi       = $('#investasi').val();
                var kapasitas       = $('#kapasitas').val();
                var nilai       = $('#nilai').val();
                var bahan       = $('#bahan').val();
                // alert(kriteria);

                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/Alternatif/new",
                    dataType : "JSON",
                    data : {
                        alternatif:alternatif,
                        desa:desa,
                        alias:alias,
                        tenaga:tenaga,
                        investasi:investasi,
                        kapasitas:kapasitas,
                        nilai:nilai,
                        bahan:bahan,
                    },

                    success: function(){ 
                        Swal.fire({
                            type: 'success',
                            title: 'Berhasil menambahkan data ',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        $("#alternatif").DataTable().destroy();
                        $("#alternatif").find('tbody').empty();
                        document.getElementById('formbaru').reset();
                        showAlternatif();
                        $('#Modal_Add').modal('hide'); 
                        $('.modal-backdrop').removeClass('show'); 
                    }
                });

                return false;
            });

                //update subsektor
                $('#alternatif').on('click','.item_edit',function(){
                    // memasukkan data yang dipilih dari tbl list agenda updatean ke variabel 
                    var id            = $(this).data('id');
                var alternatif     = $(this).data('alternatif');
                var desa       = $(this).data('desa');
                var alias       = $(this).data('alias');
                var tenaga       = $(this).data('tenaga');
                var investasi       = $(this).data('investasi');
                var kapasitas       = $(this).data('kapasitas');
                var nilai       = $(this).data('nilai');
                var bahan       = $(this).data('bahan');

                    // alert(kriteria);
                    // memasukkan data ke form updatean
                    $('[name="u_id"]').val(id);
                    $('[name="upalternatif"]').val(alternatif);
                    $('[name="updesa"]').val(desa);
                    $('[name="upalias"]').val(alias);
                    $('[name="uptenaga"]').val(tenaga);
                    $('[name="upinvestasi"]').val(investasi);
                    $('[name="upkapasitas"]').val(kapasitas);
                    $('[name="upnilai"]').val(nilai);
                    $('[name="upbahan"]').val(bahan);

                    // alert(upnama);
                    $('#Modal_Update').modal('show');
                });

                //UPDATE MASTER to database (submit button)
                $('#formupdate').submit(function(e){
                    e.preventDefault(); 
                    // memasukkan data dari form update ke variabel untuk update db
                    var up_id       = $('#u_id').val();
                    var up_alternatif     = $('#upalternatif').val();
                    var up_desa     = $('#updesa').val();
                    var up_alias     = $('#upalias').val();
                     var up_tenaga    = $('#uptenaga').val();
                      var up_investasi     = $('#upinvestasi').val();
                       var up_kapasitas     = $('#upkapasitas').val();
                        var up_nilai     = $('#upnilai').val();
                         var up_bahan     = $('#upbahan').val();
                    alert(up_alternatif);

                    $.ajax({
                        type : "POST",
                        url  : "<?php echo site_url(); ?>/Alternatif/update",
                        dataType : "JSON",
                        data : { 
                            id:up_id,
                            alternatif:up_alternatif,
                         desa:up_desa,
                alias:up_alias,
                tenaga:up_tenaga,
                investasi:up_investasi,
                kapasitas:up_kapasitas,
                nilai:up_nilai,
                bahan:up_bahan,
                        },

                        success: function(data){
                            Swal.fire({
                                type: 'success',
                                title: 'Berhasil memperbarui data ',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            $('#Modal_Update').modal('hide'); 
                            $("#alternatif").DataTable().destroy();
                            $("#alternatif").find('tbody').empty();
                            document.getElementById('formupdate').reset();
                            showAlternatif();
                        }
                    });
                    return false;
                });

                //delete subsektor
                $('#alternatif').on('click','.item_delete',function(){
                    var id = $(this).data('id');
                    var alternatif = $(this).data('alternatif'); 
                    
                $('#Modal_Delete').modal('show');
                // alert(act);
                document.getElementById("alternatifdel").innerHTML=alternatif;
                $('[name="id_del"]').val(id);
            });

            //delete record to database
            $('#formdelete').submit(function(e){
                e.preventDefault(); 
                var id = $('#id_del').val();
                
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url(); ?>/Alternatif/delete",
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
                        $("#alternatif").DataTable().destroy();
                        $("#alternatif").find('tbody').empty();
                        document.getElementById('formdelete').reset();
                        showAlternatif();
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
