<!DOCTYPE html>
<?php
session_start();
include "login/ceksession.php";
?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit Dokumen | Pungutan </title>

    <!-- Bootstrap -->
    <link href="../assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
      <link rel="shortcut icon" href="../img/icon.ico">
    <!-- Custom Theme Style -->
    <link href="../assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!-- Profile and Sidebarmenu -->
        <?php
        include("sidebarmenu.php");
        ?>
        <!-- /Profile and Sidebarmenu -->
        
        <!-- top navigation -->
        <?php
        include("header.php");
        ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            

            <div class="clearfix"></div>

            <div class="row">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Dokumen ><small>Edit Pungutan</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <div class="x_content">
                    <?php
                      include '../koneksi/koneksi.php';
                      $id			  = mysqli_real_escape_string($db,$_GET['id_suratmasuk']);
                      $sql  		= "SELECT * FROM tb_suratmasuk where id_suratmasuk='".$id."'";                        
                      $query  	= mysqli_query($db, $sql);
                      $data 		= mysqli_fetch_array($query);
                            
                    ?>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th width="25%">Jenis Pungutan</th>
                          <th width="25%">Dibayar</th>
                          <th width="25%">Ditanggung pemerintah</th>
                          <th width="25%">Ditunda</th>
                          <th width="25%">Tidak dipungut</th>
                          <th width="25%">Dibebaskan</th>
                          <th width="25%">Telah Dilunasi</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                            <tr>
                              <td><label class="control-label col-md-3 col-sm-3 col-xs-12" >BM </td>
                              <td><input value="<?php echo $data["bm_dibayar"]?>"         id="bm_dibayar"    type="text" class="ifEmpty form-control col-md-7 col-xs-12">  </td>
                              <td><input value="<?php echo $data["bm_ditanggung"]?>"      id="bm_ditanggung" type="text" class="ifEmpty form-control col-md-7 col-xs-12"> </td>
                              <td><input value="<?php echo $data["bm_ditunda"]?>"         id="bm_ditunda"    type="text" class="ifEmpty form-control col-md-7 col-xs-12">  </td>
                              <td><input value="<?php echo $data["bm_tidak"]?>"           id="bm_tidak"      type="text" class="ifEmpty form-control col-md-7 col-xs-12"> </td>
                              <td><input value="<?php echo $data["bm_bebas"]?>"           id="bm_bebas"      type="text" class="ifEmpty form-control col-md-7 col-xs-12"> </td>
                              <td><input value="<?php echo $data["bm_lunas"]?>"           id="bm_lunas"      type="text" class="ifEmpty form-control col-md-7 col-xs-12">  </td> 
                            </tr>
                            <tr>
                              <td><label class="control-label col-md-3 col-sm-3 col-xs-12" >BM KITE</td>
                              <td><input value="<?php echo $data["bmkite_dibayar"]?>"     id="bmkite_dibayar"    type="text" class="ifEmpty form-control col-md-7 col-xs-12">  </td>
                              <td><input value="<?php echo $data["bmkite_ditanggung"]?>"  id="bmkite_ditanggung" type="text" class="ifEmpty form-control col-md-7 col-xs-12"> </td>
                              <td><input value="<?php echo $data["bmkite_ditunda"]?>"     id="bmkite_ditunda"    type="text" class="ifEmpty form-control col-md-7 col-xs-12">  </td>
                              <td><input value="<?php echo $data["bmkite_tidak"]?>"       id="bmkite_tidak"      type="text" class="ifEmpty form-control col-md-7 col-xs-12"> </td>
                              <td><input value="<?php echo $data["bmkite_bebas"]?>"       id="bmkite_bebas"      type="text" class="ifEmpty form-control col-md-7 col-xs-12"> </td>
                              <td><input value="<?php echo $data["bmkite_lunas"]?>"       id="bmkite_lunas"      type="text" class="ifEmpty form-control col-md-7 col-xs-12">  </td> 
                            </tr>
                            <tr>
                              <td><label class="control-label col-md-3 col-sm-3 col-xs-12" >BMT </td>
                              <td><input value="<?php echo $data["bmt_dibayar"]?>"        id="bmt_dibayar"    type="text" class="ifEmpty form-control col-md-7 col-xs-12">  </td>
                              <td><input value="<?php echo $data["bmt_ditanggung"]?>"     id="bmt_ditanggung" type="text" class="ifEmpty form-control col-md-7 col-xs-12"> </td>
                              <td><input value="<?php echo $data["bmt_ditunda"]?>"        id="bmt_ditunda"    type="text" class="ifEmpty form-control col-md-7 col-xs-12">  </td>
                              <td><input value="<?php echo $data["bmt_tidak"]?>"          id="bmt_tidak"      type="text" class="ifEmpty form-control col-md-7 col-xs-12"> </td>
                              <td><input value="<?php echo $data["bmt_bebas"]?>"          id="bmt_bebas"      type="text" class="ifEmpty form-control col-md-7 col-xs-12"> </td>
                              <td><input value="<?php echo $data["bmt_lunas"]?>"          id="bmt_lunas"      type="text" class="ifEmpty form-control col-md-7 col-xs-12">  </td> 
                            </tr>
                            <tr>
                              <td><label class="control-label col-md-3 col-sm-3 col-xs-12" >Cukai </td>
                              <td><input value="<?php echo $data["cukai_dibayar"]?>"      id="cukai_dibayar"    type="text" class="ifEmpty form-control col-md-7 col-xs-12">  </td>
                              <td><input value="<?php echo $data["cukai_ditanggung"]?>"   id="cukai_ditanggung" type="text" class="ifEmpty form-control col-md-7 col-xs-12"> </td>
                              <td><input value="<?php echo $data["cukai_ditunda"]?>"      id="cukai_ditunda"    type="text" class="ifEmpty form-control col-md-7 col-xs-12">  </td>
                              <td><input value="<?php echo $data["cukai_tidak"]?>"        id="cukai_tidak"      type="text" class="ifEmpty form-control col-md-7 col-xs-12"> </td>
                              <td><input value="<?php echo $data["cukai_bebas"]?>"        id="cukai_bebas"      type="text" class="ifEmpty form-control col-md-7 col-xs-12"> </td>
                              <td><input value="<?php echo $data["cukai_lunas"]?>"        id="cukai_lunas"      type="text" class="ifEmpty form-control col-md-7 col-xs-12">  </td>
                            </tr>
                            <tr>
                              <td><label class="control-label col-md-3 col-sm-3 col-xs-12" >PPN </td>
                              <td><input value="<?php echo $data["ppn_dibayar"]?>"        id="ppn_dibayar"    type="text" class="ifEmpty form-control col-md-7 col-xs-12">  </td>
                              <td><input value="<?php echo $data["ppn_ditanggung"]?>"     id="ppn_ditanggung" type="text" class="ifEmpty form-control col-md-7 col-xs-12"> </td>
                              <td><input value="<?php echo $data["ppn_ditunda"]?>"        id="ppn_ditunda"    type="text" class="ifEmpty form-control col-md-7 col-xs-12">  </td>
                              <td><input value="<?php echo $data["ppn_tidak"]?>"          id="ppn_tidak"      type="text" class="ifEmpty form-control col-md-7 col-xs-12"> </td>
                              <td><input value="<?php echo $data["ppn_bebas"]?>"          id="ppn_bebas"      type="text" class="ifEmpty form-control col-md-7 col-xs-12"> </td>
                              <td><input value="<?php echo $data["ppn_lunas"]?>"          id="ppn_lunas"      type="text" class="ifEmpty form-control col-md-7 col-xs-12">  </td>
                            </tr>
                            <tr>
                              <td><label class="control-label col-md-3 col-sm-3 col-xs-12" >PPnBM </td>
                              <td><input value="<?php echo $data["ppnbm_dibayar"]?>"      id="ppnbm_dibayar"    type="text" class="ifEmpty form-control col-md-7 col-xs-12">  </td>
                              <td><input value="<?php echo $data["ppnbm_ditanggung"]?>"   id="ppnbm_ditanggung" type="text" class="ifEmpty form-control col-md-7 col-xs-12"> </td>
                              <td><input value="<?php echo $data["ppnbm_ditunda"]?>"      id="ppnbm_ditunda"    type="text" class="ifEmpty form-control col-md-7 col-xs-12">  </td>
                              <td><input value="<?php echo $data["ppnbm_tidak"]?>"        id="ppnbm_tidak"      type="text" class="ifEmpty form-control col-md-7 col-xs-12"> </td>
                              <td><input value="<?php echo $data["ppnbm_bebas"]?>"        id="ppnbm_bebas"      type="text" class="ifEmpty form-control col-md-7 col-xs-12"> </td>
                              <td><input value="<?php echo $data["ppnbm_lunas"]?>"        id="ppnbm_lunas"      type="text" class="ifEmpty form-control col-md-7 col-xs-12">  </td>
                            </tr>
                            <tr>
                              <td><label class="control-label col-md-3 col-sm-3 col-xs-12" >PPh </td>
                              <td><input value="<?php echo $data["pph_dibayar"]?>"        id="pph_dibayar"    type="text" class="ifEmpty form-control col-md-7 col-xs-12">  </td>
                              <td><input value="<?php echo $data["pph_ditanggung"]?>"     id="pph_ditanggung" type="text" class="ifEmpty form-control col-md-7 col-xs-12"> </td>
                              <td><input value="<?php echo $data["pph_ditunda"]?>"        id="pph_ditunda"    type="text" class="ifEmpty form-control col-md-7 col-xs-12">  </td>
                              <td><input value="<?php echo $data["pph_tidak"]?>"          id="pph_tidak"      type="text" class="ifEmpty form-control col-md-7 col-xs-12"> </td>
                              <td><input value="<?php echo $data["pph_bebas"]?>"          id="pph_bebas"      type="text" class="ifEmpty form-control col-md-7 col-xs-12"> </td>
                              <td><input value="<?php echo $data["pph_lunas"]?>"          id="pph_lunas"      type="text" class="ifEmpty form-control col-md-7 col-xs-12">  </td>
                            </tr>
                            <tr>
                              <td><label class="control-label col-md-3 col-sm-3 col-xs-12" >Total </td>
                              <td><input value="<?php echo $data["total_dibayar"]?>"      id="total_dibayar"    type="text" class="ifEmpty form-control col-md-7 col-xs-12">  </td>
                              <td><input value="<?php echo $data["total_ditanggung"]?>"   id="total_ditanggung" type="text" class="ifEmpty form-control col-md-7 col-xs-12"> </td>
                              <td><input value="<?php echo $data["total_ditunda"]?>"      id="total_ditunda"    type="text" class="ifEmpty form-control col-md-7 col-xs-12">  </td>
                              <td><input value="<?php echo $data["total_tidak"]?>"        id="total_tidak"      type="text" class="ifEmpty form-control col-md-7 col-xs-12"> </td>
                              <td><input value="<?php echo $data["total_bebas"]?>"        id="total_bebas"      type="text" class="ifEmpty form-control col-md-7 col-xs-12"> </td>
                              <td><input value="<?php echo $data["total_lunas"]?>"        id="total_lunas"      type="text" class="ifEmpty form-control col-md-7 col-xs-12">  </td>                            </tr>
                            
                      </tbody>
                    </table>
                   <form action="proses/proses_editdatatable.php" method="post" enctype="multipart/form-data"  data-parsley-validate class="form-horizontal form-label-left">
                      <input type="hidden"            name="id_suratmasuk"      value="<?php echo $id;?>">

                      <input id="bm_dibayar_s"        name="bm_dibayar"         type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="bm_ditanggung_s"     name="bm_ditanggung"      type="hidden" class="form-control col-md-7 col-xs-12">
                      <input id="bm_ditunda_s"        name="bm_ditunda"         type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="bm_tidak_s"          name="bm_tidak"           type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="bm_bebas_s"          name="bm_bebas"           type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="bm_lunas_s"          name="bm_lunas"           type="hidden" class="form-control col-md-7 col-xs-12">

                      <input id="bmkite_dibayar_s"    name="bmkite_dibayar"     type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="bmkite_ditanggung_s" name="bmkite_ditanggung"  type="hidden" class="form-control col-md-7 col-xs-12">
                      <input id="bmkite_ditunda_s"    name="bmkite_ditunda"     type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="bmkite_tidak_s"      name="bmkite_tidak"       type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="bmkite_bebas_s"      name="bmkite_bebas"       type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="bmkite_lunas_s"      name="bmkite_lunas"       type="hidden" class="form-control col-md-7 col-xs-12">

                      <input id="bmt_dibayar_s"       name="bmt_dibayar"        type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="bmt_ditanggung_s"    name="bmt_ditanggung"     type="hidden" class="form-control col-md-7 col-xs-12">
                      <input id="bmt_ditunda_s"       name="bmt_ditunda"        type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="bmt_tidak_s"         name="bmt_tidak"          type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="bmt_bebas_s"         name="bmt_bebas"          type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="bmt_lunas_s"         name="bmt_lunas"          type="hidden" class="form-control col-md-7 col-xs-12">

                      <input id="cukai_dibayar_s"     name="cukai_dibayar"      type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="cukai_ditanggung_s"  name="cukai_ditanggung"   type="hidden" class="form-control col-md-7 col-xs-12">
                      <input id="cukai_ditunda_s"     name="cukai_ditunda"      type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="cukai_tidak_s"       name="cukai_tidak"        type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="cukai_bebas_s"       name="cukai_bebas"        type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="cukai_lunas_s"       name="cukai_lunas"        type="hidden" class="form-control col-md-7 col-xs-12">

                      <input id="ppn_dibayar_s"       name="ppn_dibayar"        type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="ppn_ditanggung_s"    name="ppn_ditanggung"     type="hidden" class="form-control col-md-7 col-xs-12">
                      <input id="ppn_ditunda_s"       name="ppn_ditunda"        type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="ppn_tidak_s"         name="ppn_tidak"          type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="ppn_bebas_s"         name="ppn_bebas"          type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="ppn_lunas_s"         name="ppn_lunas"          type="hidden" class="form-control col-md-7 col-xs-12">

                      <input id="ppnbm_dibayar_s"     name="ppnbm_dibayar"        type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="ppnbm_ditanggung_s"  name="ppnbm_ditanggung"     type="hidden" class="form-control col-md-7 col-xs-12">
                      <input id="ppnbm_ditunda_s"     name="ppnbm_ditunda"        type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="ppnbm_tidak_s"       name="ppnbm_tidak"          type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="ppnbm_bebas_s"       name="ppnbm_bebas"          type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="ppnbm_lunas_s"       name="ppnbm_lunas"          type="hidden" class="form-control col-md-7 col-xs-12">

                      <input id="pph_dibayar_s"       name="pph_dibayar"        type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="pph_ditanggung_s"    name="pph_ditanggung"     type="hidden" class="form-control col-md-7 col-xs-12">
                      <input id="pph_ditunda_s"       name="pph_ditunda"        type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="pph_tidak_s"         name="pph_tidak"          type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="pph_bebas_s"         name="pph_bebas"          type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="pph_lunas_s"         name="pph_lunas"          type="hidden" class="form-control col-md-7 col-xs-12">

                      <input id="total_dibayar_s"     name="total_dibayar"        type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="total_ditanggung_s"  name="total_ditanggung"     type="hidden" class="form-control col-md-7 col-xs-12">
                      <input id="total_ditunda_s"     name="total_ditunda"        type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="total_tidak_s"       name="total_tidak"          type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="total_bebas_s"       name="total_bebas"          type="hidden" class="form-control col-md-7 col-xs-12"> 
                      <input id="total_lunas_s"       name="total_lunas"          type="hidden" class="form-control col-md-7 col-xs-12">

                      <input type="hidden"            name="operator"           value="<?php echo $_SESSION['nama'];?>">
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="editsuratmasuk.php?id_suratmasuk=<?php echo $data['id_suratmasuk']?>" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
                          <button id="submit" onclick="inputData()" type="submit" name="update" value="Update" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Simpan</button>
                          
                        </div>
                      </div>
                   </form>
                  </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Dev by Jito
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../assets/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="../assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../assets/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../assets/build/js/custom.min.js"></script>
    <script type="text/javascript" language="JavaScript">
      $('input.ifEmpty').focusout(function(event){
        if(event.which >= 37 && event.which <= 40){return;}
  
        $(this).val(function(index, value){
      
          if(value==''){return value='0';}  //jika inputan kosong diganti 0
          else{return value=value;}   //intinya jangan dihapus nanti eror
      
        });
  
      });
      $('input.ifEmpty').keyup(function(event){
      if(event.which >= 37 && event.which <= 40){return;}
      
        $(this).val(function(index, value){
          
          
            return value
          .replace(/([^0-9])/g,"")  // mencari yang bukan (^) angka 0-9 kecuali . mengganti dengan nilai kosong
          .replace(/\B(?=(\d{3})+(?!\d))/g,",") // membuat otomatis angka menjadi ribuan, ratusan dll
          
          
          
        });
      
      });

      function inputData()
        {
        document.getElementById("bm_dibayar_s").value         = document.getElementById("bm_dibayar").value;
        document.getElementById("bm_ditanggung_s").value      = document.getElementById("bm_ditanggung").value;
        document.getElementById("bm_ditunda_s").value         = document.getElementById("bm_ditunda").value;
        document.getElementById("bm_tidak_s").value           = document.getElementById("bm_tidak").value;
        document.getElementById("bm_bebas_s").value           = document.getElementById("bm_bebas").value;
        document.getElementById("bm_lunas_s").value           = document.getElementById("bm_lunas").value;

        document.getElementById("bmkite_dibayar_s").value     = document.getElementById("bmkite_dibayar").value;
        document.getElementById("bmkite_ditanggung_s").value  = document.getElementById("bmkite_ditanggung").value;
        document.getElementById("bmkite_ditunda_s").value     = document.getElementById("bmkite_ditunda").value;
        document.getElementById("bmkite_tidak_s").value       = document.getElementById("bmkite_tidak").value;
        document.getElementById("bmkite_bebas_s").value       = document.getElementById("bmkite_bebas").value;
        document.getElementById("bmkite_lunas_s").value       = document.getElementById("bmkite_lunas").value;

        document.getElementById("bmt_dibayar_s").value        = document.getElementById("bmt_dibayar").value;
        document.getElementById("bmt_ditanggung_s").value     = document.getElementById("bmt_ditanggung").value;
        document.getElementById("bmt_ditunda_s").value        = document.getElementById("bmt_ditunda").value;
        document.getElementById("bmt_tidak_s").value          = document.getElementById("bmt_tidak").value;
        document.getElementById("bmt_bebas_s").value          = document.getElementById("bmt_bebas").value;
        document.getElementById("bmt_lunas_s").value          = document.getElementById("bmt_lunas").value;

        document.getElementById("cukai_dibayar_s").value      = document.getElementById("cukai_dibayar").value;
        document.getElementById("cukai_ditanggung_s").value   = document.getElementById("cukai_ditanggung").value;
        document.getElementById("cukai_ditunda_s").value      = document.getElementById("cukai_ditunda").value;
        document.getElementById("cukai_tidak_s").value        = document.getElementById("cukai_tidak").value;
        document.getElementById("cukai_bebas_s").value        = document.getElementById("cukai_bebas").value;
        document.getElementById("cukai_lunas_s").value        = document.getElementById("cukai_lunas").value;

        document.getElementById("ppn_dibayar_s").value        = document.getElementById("ppn_dibayar").value;
        document.getElementById("ppn_ditanggung_s").value     = document.getElementById("ppn_ditanggung").value;
        document.getElementById("ppn_ditunda_s").value        = document.getElementById("ppn_ditunda").value;
        document.getElementById("ppn_tidak_s").value          = document.getElementById("ppn_tidak").value;
        document.getElementById("ppn_bebas_s").value          = document.getElementById("ppn_bebas").value;
        document.getElementById("ppn_lunas_s").value          = document.getElementById("ppn_lunas").value;

        document.getElementById("ppnbm_dibayar_s").value      = document.getElementById("ppnbm_dibayar").value;
        document.getElementById("ppnbm_ditanggung_s").value   = document.getElementById("ppnbm_ditanggung").value;
        document.getElementById("ppnbm_ditunda_s").value      = document.getElementById("ppnbm_ditunda").value;
        document.getElementById("ppnbm_tidak_s").value        = document.getElementById("ppnbm_tidak").value;
        document.getElementById("ppnbm_bebas_s").value        = document.getElementById("ppnbm_bebas").value;
        document.getElementById("ppnbm_lunas_s").value        = document.getElementById("ppnbm_lunas").value;

        document.getElementById("pph_dibayar_s").value        = document.getElementById("pph_dibayar").value;
        document.getElementById("pph_ditanggung_s").value     = document.getElementById("pph_ditanggung").value;
        document.getElementById("pph_ditunda_s").value        = document.getElementById("pph_ditunda").value;
        document.getElementById("pph_tidak_s").value          = document.getElementById("pph_tidak").value;
        document.getElementById("pph_bebas_s").value          = document.getElementById("pph_bebas").value;
        document.getElementById("pph_lunas_s").value          = document.getElementById("pph_lunas").value;

        document.getElementById("total_dibayar_s").value      = document.getElementById("total_dibayar").value;
        document.getElementById("total_ditanggung_s").value   = document.getElementById("total_ditanggung").value;
        document.getElementById("total_ditunda_s").value      = document.getElementById("total_ditunda").value;
        document.getElementById("total_tidak_s").value        = document.getElementById("total_tidak").value;
        document.getElementById("total_bebas_s").value        = document.getElementById("total_bebas").value;
        document.getElementById("total_lunas_s").value        = document.getElementById("total_lunas").value;
        }
    </script>

  </body>
</html>