<?php  

if (session_status() != PHP_SESSION_NONE) {
if (isset($pu['ver_entrada_almacen'])) {
  
$get_all = $misc->get_all('tbl_entradaalmacen');
$_ent = ($get_all['bool']?$get_all['data']:array());



?>
	<div class="right_col" role="main">


    <div class="row">
      <div class="col-md-12 col-sm-4 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Entradas de Almacén <small>Vista previa</small></h2>
            <a href="?mod=almacen&sub=nuevaentrada" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Nueva entrada</a> 
            <button onclick="" type="button" class="btn btn-success pull-right"><i class="fa fa-check-circle"></i> Boton</button>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="table-responsive">
                  <table id="tablaconceptosalmacen" class="table table-striped table-bordered bulk_action">
                    <thead>
                      <tr>
                        <th>Fecha</th>
                        <th>Consecutivo </th>
                        <th>Proveedor </th>
                        <th>Documento </th>
                        <th>N°_Docum </th>
                        <th>Fecha_Docum </th>
                        <th>Subtotal </th>
                        <th>Costo_IVA </th>
                        <th>Total </th>
                        <th style="width: 1%;"></th>
                      </tr>
                    </thead>

                    <tbody id="tbody">
                      <?php  

                        foreach ($_ent as $value) {
                          echo  '
                                  <tr class="even pointer">
                                    <td class="a-center ">'.$value['enal_datecreate'].'</td>
                                    <td>'.$value['oid'].'</td>
                                    <td>'.mb_strtoupper($misc->get_one('tbl_proveedores',null,'prov_identificacion',$value['enal_id_tercero'])['data']['prov_nombre'],'utf-8').'</td>
                                    <td>'.$value['enal_tipo_documento'].'</td>
                                    <td>'.$value['enal_num_documento'].'</td>
                                    <td>'.date_format(date_create($value['enal_date_documento']),'d-m-Y').'</td>
                                    <td class="text-right">'.number_format((float)$value['enal_subtotal'], 2, '.', ',').'</td>
                                    <td class="text-right">'.number_format((float)$value['enal_iva'], 2, '.', ',').'</td>
                                    <td class="text-right">'.number_format((float)$value['enal_total'], 2, '.', ',').'</td>
                                    <td><a href="?mod=almacen&sub=nuevaentrada&view='.base64_encode(json_encode($value)).'" class="btn btn-default btn-xs"><i class="fa fa-eye"></i> ver</a></td>
                                  </tr>
                          ';
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>



  			<!-- footer content -->
          <?php include_once '../pages/footer.php' ?>
        <!-- /footer content -->
      </div>
    </div>
  <div id="reloadscript"></div>

  <!-- FastClick -->
  <script src="../plugins/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="../plugins/nprogress/nprogress.js"></script>
  <!-- Chart.js -->
  <script src="../plugins/Chart.js/dist/Chart.min.js"></script>
  <!-- gauge.js -->
  <script src="../plugins/gauge.js/dist/gauge.min.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="../plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- iCheck -->
  <script src="../plugins/iCheck/icheck.min.js"></script>
  <!-- Skycons -->
  <script src="../plugins/skycons/skycons.js"></script>
  <!-- Flot -->
  <script src="../plugins/Flot/jquery.flot.js"></script>
  <script src="../plugins/Flot/jquery.flot.pie.js"></script>
  <script src="../plugins/Flot/jquery.flot.time.js"></script>
  <script src="../plugins/Flot/jquery.flot.stack.js"></script>
  <script src="../plugins/Flot/jquery.flot.resize.js"></script>
  <!-- Flot plugins -->
  <script src="../plugins/flot.orderbars/js/jquery.flot.orderBars.js"></script>
  <script src="../plugins/flot-spline/js/jquery.flot.spline.min.js"></script>
  <script src="../plugins/flot.curvedlines/curvedLines.js"></script>
  <!-- DateJS -->
  <script src="../plugins/DateJS/build/date.js"></script>


  <!-- bootstrap-daterangepicker -->
  <script src="../plugins/moment/moment.min.js"></script>
  <script src="../plugins/bootstrap-daterangepicker/daterangepicker.js"></script>


  <!-- bootstrap-wysiwyg -->
  <script src="../plugins/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
  <script src="../plugins/jquery.hotkeys/jquery.hotkeys.js"></script>
  <script src="../plugins/google-code-prettify/src/prettify.js"></script>
  <!-- jQuery Tags Input -->
  <script src="../plugins/jquery.tagsinput/src/jquery.tagsinput.js"></script>
  <!-- Switchery -->
  <script src="../plugins/switchery/dist/switchery.min.js"></script>
  <!-- Select2 -->
  <script src="../plugins/select2/dist/js/select2.full.min.js"></script>
  <!-- Parsley -->
  <script src="../plugins/parsleyjs/dist/parsley.min.js"></script>
  <!-- Autosize -->
  <script src="../plugins/autosize/dist/autosize.min.js"></script>
  <!-- jQuery autocomplete -->
  <script src="../plugins/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
  <!-- starrr -->
  <script src="../plugins/starrr/dist/starrr.js"></script>
  <!-- Datatables -->
  <script src="../plugins/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="../plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../plugins/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
  <script src="../plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="../plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="../plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="../plugins/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
  <script src="../plugins/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
  <script src="../plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../plugins/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
  <script src="../plugins/datatables.net-scroller/js/datatables.scroller.min.js"></script>
  <script src="../plugins/jszip/dist/jszip.min.js"></script>
  <script src="../plugins/pdfmake/build/pdfmake.min.js"></script>
  <script src="../plugins/pdfmake/build/vfs_fonts.js"></script>

  <script>

    document.title = document.title+" Conceptos de almacen"; //set Titulo de la pagina


    $(document).ready(function() {

      //var t = $('#tablaitems').dataTable();

      $tablaitems = $('#tablaconceptosalmacen');

      $tablaitems.dataTable({
        responsive: true,
        ordering: false,
        dom: '<"toolbar">frtip'
      });
      

      $("div.toolbar").html('');

    });
  </script>


<?php 
}else{
  $html_negate =  '<div style="padding: 100px 0px 50px 0px;" class="right_col" role="main">';
  $html_negate .= '<center><h1><i class="fa fa-warning"></i>Usted no tiene permisos para ver esta sessión!</h1></center></div>';
  echo $html_negate;
}
}

?>


