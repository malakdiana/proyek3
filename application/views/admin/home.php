    <style type="text/css">
      #chartdiv {
  width: 100%;
  max-height: 600px;
  height: 100vh;
}
    </style>
     <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Hasil</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Grafik</a></li>
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
                                <strong class="card-title">Grafik Hasil Akhir</strong>
                            </div>
                            <div class="card-body">
                                <div id="chartdiv"></div>
                               
    
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


        <script src="<?php echo base_url()?>assets/js/core.js"></script>
    <script src="<?php echo base_url()?>assets/js/charts.js"></script>
    <script src="<?php echo base_url()?>assets/js/animated.js"></script>

   

<script type="text/javascript">

var chart = am4core.create("chartdiv", am4charts.PieChart3D);
chart.legend = new am4charts.Legend();
var a,b,c,d,e = 0;
var datax = [];
datacategory = <?php echo json_encode($alternatif);?>;
datavalue = <?php echo json_encode($nilai);?>;
var j, i =0;

for(  i = 0; i < datacategory.length; i++){
  a,b,c,d,e =0;
  for(j=0; j< datavalue.length; j++){
    if(datacategory[i].id_alternatif == datavalue[j].id_alternatif){
      if(datavalue[j].id_kriteria == 1){
        a = datavalue[j].hasil;
      }if(datavalue[j].id_kriteria == 2){
        b = datavalue[j].hasil;
      }if(datavalue[j].id_kriteria == 3){
        c = datavalue[j].hasil;
      }if(datavalue[j].id_kriteria == 4){
        d = datavalue[j].hasil;
      }if(datavalue[j].id_kriteria == 5){
        e = datavalue[j].hasil;
      }
    }
    datax.push({"category": datacategory[i].nama_alternatif_industri, "value1" : a, "value2" : b, "value3" : c, "value4" : d, "value5" : e});
  }
}

chart.data= datax;
hart.colors.step = 2;
chart.padding(30, 30, 10, 30);

chart.legend = new am4charts.Legend();
chart.legend.itemContainers.template.cursorOverStyle = am4core.MouseCursorStyle.pointer;

var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "category";
categoryAxis.renderer.minGridDistance = 60;
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.interactionsEnabled = false;

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.min = 0;
valueAxis.max = 100;
valueAxis.strictMinMax = true;
valueAxis.calculateTotals = true;

valueAxis.renderer.minGridDistance = 20;
valueAxis.renderer.minWidth = 35;

var series1 = chart.series.push(new am4charts.ColumnSeries());
series1.columns.template.tooltipText = "{name}: {valueY.totalPercent.formatNumber('#.00')}%";
series1.columns.template.column.strokeOpacity = 1;
series1.name = "Series 1";
series1.dataFields.categoryX = "category";
series1.dataFields.valueY = "value1";
series1.dataFields.valueYShow = "totalPercent";
series1.dataItems.template.locations.categoryX = 0.5;
series1.stacked = true;
series1.tooltip.pointerOrientation = "vertical";
series1.tooltip.dy = - 20;
series1.cursorHoverEnabled = false;

var bullet1 = series1.bullets.push(new am4charts.LabelBullet());
bullet1.label.text = "{valueY.totalPercent.formatNumber('#.00')}%";
bullet1.locationY = 0.5;
bullet1.label.fill = am4core.color("#ffffff");
bullet1.interactionsEnabled = false;

var series2 = chart.series.push(series1.clone());
series2.name = "Series 2";
series2.dataFields.valueY = "value2";
series2.fill = chart.colors.next();
series2.stroke = series2.fill;
series2.cursorHoverEnabled = false;

var series3 = chart.series.push(series1.clone());
series3.name = "Series 3";
series3.dataFields.valueY = "value3";
series3.fill = chart.colors.next();
series3.stroke = series3.fill;
series3.cursorHoverEnabled = false;

var series3 = chart.series.push(series1.clone());
series3.name = "Series 4";
series3.dataFields.valueY = "value4";
series3.fill = chart.colors.next();
series3.stroke = series3.fill;
series3.cursorHoverEnabled = false;

var series3 = chart.series.push(series1.clone());
series3.name = "Series 5";
series3.dataFields.valueY = "value5";
series3.fill = chart.colors.next();
series3.stroke = series3.fill;
series3.cursorHoverEnabled = false;

chart.scrollbarX = new am4core.Scrollbar();

chart.cursor = new am4charts.XYCursor();
chart.cursor.behavior = "panX";

 
</script>

      

</body>

</html>
