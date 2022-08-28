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
                                <h2>Dokumen > Detail Dokumen > <small>Pungutan</small></h2>
                                    <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="x_content">
                                    <?php
                                    include '../koneksi/koneksi.php';
                                    $id              = mysqli_real_escape_string($db, $_GET['id_suratmasuk']);
                                    $sql          = "SELECT * FROM tb_suratmasuk where id_suratmasuk='" . $id . "'";
                                    $query      = mysqli_query($db, $sql);
                                    $data         = mysqli_fetch_array($query);

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
                                                <td><label class="control-label col-md-3 col-sm-3 col-xs-12">BM </td>
                                                <td><label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["bm_dibayar"] ?></td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["bm_ditanggung"] ?> </td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["bm_ditunda"] ?>  </td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["bm_tidak"] ?></td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["bm_bebas"] ?> </td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["bm_lunas"] ?></td>
                                            </tr>
                                            <tr>
                                                <td><label class="control-label col-md-3 col-sm-3 col-xs-12">BM KITE</td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["bmkite_dibayar"] ?></td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["bmkite_ditanggung"] ?></td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["bmkite_ditunda"] ?></td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["bmkite_tidak"] ?></td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["bmkite_bebas"] ?> </td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["bmkite_lunas"] ?></td>
                                            </tr>
                                            <tr>
                                                <td><label class="control-label col-md-3 col-sm-3 col-xs-12">BMT </td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["bmt_dibayar"] ?>  </td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["bmt_ditanggung"] ?> </td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["bmt_ditunda"] ?> </td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["bmt_tidak"] ?></td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["bmt_bebas"] ?> </td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["bmt_lunas"] ?> </td>
                                            </tr>
                                            <tr>
                                                <td><label class="control-label col-md-3 col-sm-3 col-xs-12">Cukai </td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["cukai_dibayar"] ?> </td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["cukai_ditanggung"] ?></td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["cukai_ditunda"] ?></td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["cukai_tidak"] ?></td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["cukai_bebas"] ?></td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["cukai_lunas"] ?></td>
                                            </tr>
                                            <tr>
                                                <td><label class="control-label col-md-3 col-sm-3 col-xs-12">PPN </td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["ppn_dibayar"] ?></td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["ppn_ditanggung"] ?></td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["ppn_ditunda"] ?> </td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["ppn_tidak"] ?></td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["ppn_bebas"] ?> </td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["ppn_lunas"] ?> </td>
                                            </tr>
                                            <tr>
                                                <td><label class="control-label col-md-3 col-sm-3 col-xs-12">PPnBM </td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["ppnbm_dibayar"] ?></td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["ppnbm_ditanggung"] ?></td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["ppnbm_ditunda"] ?> </td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["ppnbm_tidak"] ?></td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["ppnbm_bebas"] ?></td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["ppnbm_lunas"] ?></td>
                                            </tr>
                                            <tr>
                                                <td><label class="control-label col-md-3 col-sm-3 col-xs-12">PPh </td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["pph_dibayar"] ?></td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["pph_ditanggung"] ?></td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["pph_ditunda"] ?> </td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["pph_tidak"] ?></td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["pph_bebas"] ?></td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["pph_lunas"] ?> </td>
                                            </tr>
                                            <tr>
                                                <td><label class="control-label col-md-3 col-sm-3 col-xs-12">Total </td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["total_dibayar"] ?></td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["total_ditanggung"] ?></td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["total_ditunda"] ?></td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["total_tidak"] ?></td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["total_bebas"] ?> </td>
                                                <td> <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $data["total_lunas"] ?></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <div class="text-right">
                                        <a href="detail-suratmasuk.php?id_suratmasuk=<?php echo $data['id_suratmasuk'] ?>" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
                                        <a href="editdatatable.php?id_suratmasuk=<?php echo $data['id_suratmasuk'] ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Edit </a>
                                    </div>
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
        $('input.ifEmpty').focusout(function(event) {
            if (event.which >= 37 && event.which <= 40) {
                return;
            }

            $(this).val(function(index, value) {

                if (value == '') {
                    return value = '0';
                } //jika inputan kosong diganti 0
                else {
                    return value = value;
                } //intinya jangan dihapus nanti eror

            });

        });

        function inputData() {
            document.getElementById("bm_dibayar_s").value = document.getElementById("bm_dibayar").value;
            document.getElementById("bm_ditanggung_s").value = document.getElementById("bm_ditanggung").value;
            document.getElementById("bm_ditunda_s").value = document.getElementById("bm_ditunda").value;
            document.getElementById("bm_tidak_s").value = document.getElementById("bm_tidak").value;
            document.getElementById("bm_bebas_s").value = document.getElementById("bm_bebas").value;
            document.getElementById("bm_lunas_s").value = document.getElementById("bm_lunas").value;

            document.getElementById("bmkite_dibayar_s").value = document.getElementById("bmkite_dibayar").value;
            document.getElementById("bmkite_ditanggung_s").value = document.getElementById("bmkite_ditanggung").value;
            document.getElementById("bmkite_ditunda_s").value = document.getElementById("bmkite_ditunda").value;
            document.getElementById("bmkite_tidak_s").value = document.getElementById("bmkite_tidak").value;
            document.getElementById("bmkite_bebas_s").value = document.getElementById("bmkite_bebas").value;
            document.getElementById("bmkite_lunas_s").value = document.getElementById("bmkite_lunas").value;

            document.getElementById("bmt_dibayar_s").value = document.getElementById("bmt_dibayar").value;
            document.getElementById("bmt_ditanggung_s").value = document.getElementById("bmt_ditanggung").value;
            document.getElementById("bmt_ditunda_s").value = document.getElementById("bmt_ditunda").value;
            document.getElementById("bmt_tidak_s").value = document.getElementById("bmt_tidak").value;
            document.getElementById("bmt_bebas_s").value = document.getElementById("bmt_bebas").value;
            document.getElementById("bmt_lunas_s").value = document.getElementById("bmt_lunas").value;

            document.getElementById("cukai_dibayar_s").value = document.getElementById("cukai_dibayar").value;
            document.getElementById("cukai_ditanggung_s").value = document.getElementById("cukai_ditanggung").value;
            document.getElementById("cukai_ditunda_s").value = document.getElementById("cukai_ditunda").value;
            document.getElementById("cukai_tidak_s").value = document.getElementById("cukai_tidak").value;
            document.getElementById("cukai_bebas_s").value = document.getElementById("cukai_bebas").value;
            document.getElementById("cukai_lunas_s").value = document.getElementById("cukai_lunas").value;

            document.getElementById("ppn_dibayar_s").value = document.getElementById("ppn_dibayar").value;
            document.getElementById("ppn_ditanggung_s").value = document.getElementById("ppn_ditanggung").value;
            document.getElementById("ppn_ditunda_s").value = document.getElementById("ppn_ditunda").value;
            document.getElementById("ppn_tidak_s").value = document.getElementById("ppn_tidak").value;
            document.getElementById("ppn_bebas_s").value = document.getElementById("ppn_bebas").value;
            document.getElementById("ppn_lunas_s").value = document.getElementById("ppn_lunas").value;

            document.getElementById("ppnbm_dibayar_s").value = document.getElementById("ppnbm_dibayar").value;
            document.getElementById("ppnbm_ditanggung_s").value = document.getElementById("ppnbm_ditanggung").value;
            document.getElementById("ppnbm_ditunda_s").value = document.getElementById("ppnbm_ditunda").value;
            document.getElementById("ppnbm_tidak_s").value = document.getElementById("ppnbm_tidak").value;
            document.getElementById("ppnbm_bebas_s").value = document.getElementById("ppnbm_bebas").value;
            document.getElementById("ppnbm_lunas_s").value = document.getElementById("ppnbm_lunas").value;

            document.getElementById("pph_dibayar_s").value = document.getElementById("pph_dibayar").value;
            document.getElementById("pph_ditanggung_s").value = document.getElementById("pph_ditanggung").value;
            document.getElementById("pph_ditunda_s").value = document.getElementById("pph_ditunda").value;
            document.getElementById("pph_tidak_s").value = document.getElementById("pph_tidak").value;
            document.getElementById("pph_bebas_s").value = document.getElementById("pph_bebas").value;
            document.getElementById("pph_lunas_s").value = document.getElementById("pph_lunas").value;

            document.getElementById("total_dibayar_s").value = document.getElementById("total_dibayar").value;
            document.getElementById("total_ditanggung_s").value = document.getElementById("total_ditanggung").value;
            document.getElementById("total_ditunda_s").value = document.getElementById("total_ditunda").value;
            document.getElementById("total_tidak_s").value = document.getElementById("total_tidak").value;
            document.getElementById("total_bebas_s").value = document.getElementById("total_bebas").value;
            document.getElementById("total_lunas_s").value = document.getElementById("total_lunas").value;
        }
    </script>

</body>

</html>