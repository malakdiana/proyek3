
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
                                     <div class="pull-right"><a href="javascript:void(0);" class="btn btn-success float-right" id="btn-edit"><span class="fa fa-plus" ></span>Update</a></div>
                                <strong class="card-title">Table Kriteria</strong>
                            </div>
                            <div class="card-body">
                                <table id="data bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kriteria</th>
                                           <?php 
                                           foreach ($kriteria as $key) {
                                            ?>
                                            <th><?php echo $key->keterangan; ?></th>
                                           <?php } ?>

                                        </tr>
                                    </thead>
                                    <tbody id="edit">
                                          <?php echo form_open('Kriteria/editBobot'); ?>
                                       <?php 
                                    
                                       foreach ($kriteria as $key ) { 
                                
                                        
                                        ?>
                                        <tr>
                                            <th><?php echo $key->keterangan ?></th>
                                            <?php  foreach ($kriteria as $data ) {
                                                for($i=0; $i< count($nilai_bobot);$i++){

                                                if($nilai_bobot[$i][0] == $key->id_kriteria && $nilai_bobot[$i][1]== $data->id_kriteria){
                                                    
                                                ?>
                                               
                                                      <td>
                                                     
                                                        <input type="number" name="kriteria1[]" style="width: 50px" value="<?php echo $nilai_bobot[$i][0] ?>" hidden="">
                                                        <input type="number" name="kriteria2[]" style="width: 50px" value="<?php echo $nilai_bobot[$i][1] ?>" hidden="">
                                                          <input type="number" name="id_perbandingan[]" style="width: 50px" value="<?php echo $nilai_bobot[$i][5] ?>" hidden="" >
                                                         <div class="yaya" hidden="">
                                                        <input type="number" name="n_kriteria1[]" style="width: 50px" value="<?php echo $nilai_bobot[$i][2] ?>" ><input type="text" name="x" value=":" style="width: 30px" disabled="" ><input type="number" name="n_kriteria2[]" style="width: 50px" value="<?php echo $nilai_bobot[$i][3] ?>" >
                                                    </div>
                                                        <div class="yoyo" ><?php echo $nilai_bobot[$i][4] ?></div>
                                                            
                                                        </td>
                                               
                                               
                                             
                                         <?php 
                                        }}} ?>
                                        </tr>
                                      <?php } ?>
                                      <tr>
                                          <th>jumlah</th>
                                          <td><?php echo $jumlah[0]; ?></td>
                                          <td><?php echo $jumlah[1]; ?></td>
                                          <td><?php echo $jumlah[2]; ?></td>
                                          <td><?php echo $jumlah[3]; ?></td>
                                          <td><?php echo $jumlah[4]; ?></td>
                                      </tr>
                                    </tbody>
                                </table>
                                <button class="btn btn-success" hidden="" id="save" type="submit">Save</button>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                         <div class="card-header">
                                     
                                <strong class="card-title">Table Normalisasi Kriteria</strong>
                            </div>
                             <div class="card-body">
                                <table id="data bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kriteria</th>
                                           <?php 
                                        
                                           foreach ($kriteria as $key) {
                                            ?>
                                            <th><?php echo $key->keterangan; ?></th>
                                           <?php } ?>
                                           <th>Rata - Rata</th>

                                        </tr>
                                    </thead>
                                    <tbody >
                                         
                                       <?php 
                                    $b=0;
                                       foreach ($kriteria as $key ) { 
                              
                                        
                                        ?>
                                        <tr>
                                            <th><?php echo $key->keterangan ?></th>
                                            <?php  foreach ($kriteria as $data ) {
                                                for($i=0; $i< count($nilai_bobot);$i++){

                                                if($nilai_bobot[$i][0] == $key->id_kriteria && $nilai_bobot[$i][1]== $data->id_kriteria){
                                                    
                                                ?>
                                               
                                                      <td>
                                                     
                                                        <?php echo $normalisasi[$i][5] ?>
                                                            
                                                        </td>
                                               
                                               
                                             
                                         <?php 
                                        
                                         }}} ?>
                                         <td><?php echo $pw[$b]; ?></td>
                                        </tr>
                                      <?php $b++; } ?>
                                      
                                    </tbody>
                                </table>
                                <table>
                                    <tr>
                                        <td><?php echo $vektor[0] ?></td>
                                    </tr>
                                </table>
                               
                            </div>

                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

 
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
    /* Formating function for row details */
    

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
       var oTable = $('#data').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
  
      });

 
       </script>
       <script>
    $(document).ready(function(){ // Ketika halaman sudah diload dan siap
      
        $("#btn-edit").click(function(){ 
        var x = document.getElementsByClassName("yoyo");
            var i;
for (i = 0; i < x.length; i++) {
  x[i].setAttribute('hidden',true);
}
         var b = document.getElementsByClassName("yaya");
            var j;
        for (j = 0; j < b.length; j++) {
        b[j].removeAttribute('hidden');
        }

        document.getElementById("save").removeAttribute('hidden');  
        document.getElementById("btn-edit").setAttribute('hidden',true);  
        });
    });
    </script>

</body>

</html>
