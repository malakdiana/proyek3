
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
                                   
                                <strong class="card-title">Table Kriteria</strong>
                                    <?php echo form_open('Kriteria/editBobot'); ?>
                                  <div class="row">
                                  
                                      <select id="kriteria1"  name="kriteria1" class="form-control" style="width: 180px" >
                                      <?php foreach ($kriteria as $key): ?>
                                        <option value="<?php echo $key->id_kriteria ?>"><?php echo $key->keterangan; ?></option>
                                      <?php endforeach ?>
                                      </select>&nbsp;&nbsp;&nbsp;
                                      <select id="perbandingan"name="perbandingan" class="form-control"style="width: 320px" >
                                        <option value="1">1- Sama penting dengan</option>
                                        <option value="2">2- Mendekati sedikit lebih penting dari</option>
                                        <option value="3">3- Sedikit lebih penting dari</option>
                                        <option value="4">4- Mendekati lebih penting dari</option>
                                        <option value="5">5- Lebih penting dari</option>
                                        <option value="6">6- Mendekati sangat penting dari</option>
                                        <option value="7">7- Sangat penting dari</option>
                                        <option value="8">8- Mendekati mutlak dari</option>
                                        <option value="9">9- Mutlak sangat penting dari</option>
                                      </select>&nbsp;&nbsp;&nbsp;
                                       <select id="kriteria2"  name="kriteria2" class="form-control" style="width: 180px">
                                      <?php foreach ($kriteria as $key): ?>
                                        <option value="<?php echo $key->id_kriteria ?>"><?php echo $key->keterangan; ?></option>
                                      <?php endforeach ?>
                                      </select>&nbsp;&nbsp;&nbsp;
                                      <button class="btn btn-success float-right" ><span class="fa fa-plus" ></span>Update</button></div>
                                 
                            </div>       <?php echo form_close(); ?>
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
                                                        <?php echo $nilai_bobot[$i][4] ?>
                                                            
                                                        </td>
                                               
                                               
                                             
                                         <?php 
                                        }}} ?>
                                        </tr>
                                      <?php } ?>
                                      <tr>
                                          <th>jumlah</th>
                                          <?php 
                                    
                                       foreach ($kriteria as $key ) { 
                                
                                        
                                        ?>
                                          <td><?php echo $jumlah[$key->id_kriteria]; ?></td>
                                         <?php } ?>
                                      </tr>
                                    </tbody>
                                </table>
                                <button class="btn btn-success" hidden="" id="save" type="submit">Save</button>
                               
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
                                         <td><?php echo $pw[$key->id_kriteria]; ?></td>
                                        </tr>
                                      <?php ; } ?>
                                      
                                    </tbody>
                                </table>
                                   </div>

                                 <div class="card-header">
                                     
                                <strong class="card-title">Table Konsisten</strong>
                            </div>
                             <div class="card-body">
                                <table class="table table-bordered">
                                  <tr>
                                    <th>Kriteria</th>
                                    <th>Perkalian</th>
                                    <th>Pembagian</th>

                                  </tr>
                                  
                                  <?php foreach ($kriteria as $key ) {?>
                                    <tr>
                                       <td><?php echo $key->keterangan; ?></td>
                                       <td><?php echo $vektor[$key->id_kriteria]; ?></td>
                                       <td><?php echo $bagi[$key->id_kriteria]; ?></td>
                                  
                                    </tr>
                                  <?php } ?>

                                </table>
                                <table class="table table-striped" style="width: 300px">
                                  <tr>
                                    <td>lamda</td>
                                    <td> <?php echo $lamda; ?></td>
                                  </tr>
                                  <tr>
                                    <td>CI</td>
                                    <td><?php echo $ci ?></td>
                                  </tr>
                                  <tr>  
                                    <td>  RC</td>
 <td><?php echo $rc; ?></td>
                                  </tr>
                                  <tr>  
                                    <td>  
                                    konsisten</td>

                                       <td><?php echo $konsisten?></td>
                                  </tr>
                                  <tr>  
                                    <td>  
                                    Keterangan Konsisten</td>

                                       <td><?php if($konsisten<0.1){echo "konsisten";}else{echo "tidak konsisten";}?></td>
                                  </tr>
                                     
                                </table>
                               
                               
                         
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
 
    </script>

</body>

</html>
