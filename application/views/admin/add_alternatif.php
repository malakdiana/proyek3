    <div class="col-lg-6">
                        <div class="card">

                            <div class="card-header"><strong>Company</strong><small> Form</small></div>
                            <div class="card-body card-block">
                            <?php echo form_open('Alternatif/saveAlternatif'); ?>   
                                    <div class="form-group"><label for="vat" class=" form-control-label">Nama Industri</label><input type="text" id="vat" name="industri" placeholder="" class="form-control"></div>
                                        <div class="form-group"><label for="street" class=" form-control-label">Desa dan Kecamatan</label><input type="text" id="street" name="desa" placeholder="" class="form-control"></div>
                                      
                                   
                                                    <div class="form-group"><label for="city" class=" form-control-label">Tenaga Kerja</label><input type="text" id="city" name="tenagaKerja" placeholder="" class="form-control"></div>
                                                    
                                              
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Nilai Investasi</label><input type="text" id="postal-code" name="investasi" placeholder="" class="form-control"></div>
                                        
                                                    <div class="form-group"><label for="country" class=" form-control-label">Kapasitas Produksi</label><input type="text" id="country" placeholder="" name="produksi" class="form-control"></div>
                                                    
                                                    <div class="form-group"><label for="nilai" class=" form-control-label">Nilai Produksi</label><input type="text" id="nilai" placeholder="" class="form-control" name="nilaiProduksi"></div>
                                                         <div class="form-group"><label for="nilaibahan" class=" form-control-label">Nilai Bahan Baku</label><input type="text" id="nilaibahan" placeholder="" nama="nilaibahan" class="form-control"></div>
                                                          <p align="right"><button type="submit" class="btn btn-primary">Save</button></p>
                                                          <?php  echo form_close();?>
                                                    </div></div>

                                                </div>
                                            </div>
                                               <script src="<?php echo base_url() ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>


    <script src="<?php echo base_url() ?>assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
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

</body>
