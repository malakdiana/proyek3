    <div class="col-lg-6">
                        <div class="card">

                            <div class="card-header"><strong>Company</strong><small> Form</small></div>
                            <div class="card-body card-block">
                            <?php echo form_open('Alternatif/save'); ?>
                                <div class="form-group"><label for="alias" class=" form-control-label">Alias</label><input type="text" id="alias" name="alias" placeholder="" class="form-control"></div>
                                    <div class="form-group"><label for="vat" class=" form-control-label">Nama Industri</label><input type="text" id="vat" name="industri" placeholder="" class="form-control"></div>
                                        <div class="form-group"><label for="street" class=" form-control-label">Desa dan Kecamatan</label><input type="text" id="street" name="desa" placeholder="" class="form-control"></div>
                                      
                                   
                                                    <div class="form-group"><label for="city" class=" form-control-label">Tenaga Kerja</label><input type="text" id="tenagaKerja" name="tenagaKerja" placeholder="" class="form-control"></div>
                                                    
                                              
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Nilai Investasi</label><input type="text" id="investasi" name="investasi" placeholder="" class="form-control"></div>
                                        
                                                    <div class="form-group"><label for="country" class=" form-control-label">Kapasitas Produksi</label><input type="text" id="produksi" placeholder="" name="produksi" class="form-control"></div>
                                                    
                                                    <div class="form-group"><label for="nilai" class=" form-control-label">Nilai Produksi</label><input type="text" id="nilaiProduksi" placeholder="" class="form-control" name="nilaiProduksi"></div>

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
    <script type="text/javascript">
  var tenagaKerja = document.getElementById("tenagaKerja");
tenagaKerja.addEventListener("keyup", function(e) {
  tenagaKerja.value = formatAngka(this.value);
});

  var investasi = document.getElementById("investasi");
investasi.addEventListener("keyup", function(e) {
  investasi.value = formatRupiah(this.value, "Rp. ");
});

 var produksi = document.getElementById("produksi");
produksi.addEventListener("keyup", function(e) {
  produksi.value = formatAngka(this.value);
});

var nilaiProduksi = document.getElementById("nilaiProduksi");
nilaiProduksi.addEventListener("keyup", function(e) {
nilaiProduksi.value = formatRupiah(this.value, "Rp. ");
});

var nilaibahan = document.getElementById("nilaibahan");
nilaibahan.addEventListener("keyup", function(e) {
nilaibahan.value = formatRupiah(this.value, "Rp. ");
});

function formatAngka(angka) {
  var number_string = angka.replace(/[^,\d]/g, "").toString();
  return number_string;
}


/* Fungsi formatRupiah */
function formatRupiah(angka, prefix) {
  var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split = number_string.split(","),
    sisa = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if (ribuan) {
    separator = sisa ? "." : "";
    rupiah += separator + ribuan.join(".");
  }

  rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
  return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
}

  $("body").on("click", ".btn-delete", function(){
        $(this).parents("tr").remove();
    });

</script>

</body>
