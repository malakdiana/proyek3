
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Perhitungan</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Perhitungan</a></li>
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
                                <strong class="card-title">Table Hasil Perhitungan</strong>
                            </div>
                            <div class="card-body">
                                <table id="alternatif" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Alternatif</th>
                                           <?php 
                                           foreach ($kriteria as $key) {
                                            ?>
                                            <th><?php echo $key->keterangan; ?></th>
                                           <?php } ?>

                                        </tr>
                                    </thead>
                                    <tbody id="edit">
                                       
                                       <?php 
                                    
                                       foreach ($alternatif as $key ) { 
                                        ?>
                                        <tr>
                                            <th><?php echo $key->nama_alternatif_industri?></th>
                                            <?php foreach ($kriteria as $row) {?>
                                            <td><?php echo $pw[$row->kolom][$key->id_alternatif] ?></td>
                                          <?php } ?>
                                           
                                      
                                         <?php } ?>
                                      </tr>
                                    </tbody>
                                </table>
                               
    
                            </div>
                        </div>
                         <div class="card-header">
                                <strong class="card-title">Data Konsistensi</strong>
                            </div>
                            <table id="data bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                      <th>Kriteria</th>
                                      <th>Nilai</th>
                                      <th>Keterangan</th>
                                    </thead>
                                    <tbody>
                                      <?php foreach ($kriteria as $key ) { ?>
                                        <tr>
                                          <td><?php echo $key->keterangan; ?></td>
                                          <td><?php echo $konsisten[$key->kolom]; ?></td>
                                          <td><?php if($konsisten[$key->kolom]<0.1){echo "konsisten";}else{echo "tidak";} ?></td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>

                        
                               
                         
                

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
      $(document).ready(function() {
    $('#alternatif').DataTable();
} );

 
       </script>
      

</body>

</html>
