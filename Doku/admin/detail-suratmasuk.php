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

    <title>Detail Dokumen</title>

     <!-- Bootstrap -->
    <link href="../assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../assets/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../assets/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="../assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../assets/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
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
              <div class="col-md-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Dokumen ><small>Detail Dokumen</small></h2>
                    <div class="clearfix"></div>
                  </div>
                     <?php include '../koneksi/koneksi.php';
                     $id			= mysqli_real_escape_string($db,$_GET['id_suratmasuk']);
                     $sql  		= "SELECT * FROM tb_suratmasuk where id_suratmasuk='".$id."'";                        
                     $query  	= mysqli_query($db, $sql);
                     $data 		= mysqli_fetch_array($query);?>
                  <div class="x_content">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="profile_title">
                        <div class="col-md-6">
                          <h2>Detail Dokumen</h2>
                        </div>
                      </div>
                      <div class="x_content">
                    </div>   
                    <table class="table table-striped">
                      <tbody>
                        <tr>
                          <td width="40%">Tanggal Masuk</td>
                          <td><?php echo $data['tanggal_masuk']?></td>
                        </tr>
                        <tr>
                          <td>Kode Kantor</td>
                          <td><?php echo $data['kode_kantor']?></td>
                        </tr>
                        <tr>
                          <td>Kantor Pabean</td>
                          <td><?php echo $data['kantor_pabean']?></td>
                        </tr>
                        <tr>
                          <td>Nomor Pengajuan</td>
                          <td><?php echo $data['nomor_pengajuan']?></td>
                        </tr>
                        <tr>
                          <td>Halaman</td>
                          <td><?php echo $data['halaman']?></td>
                        </tr>
                        <tr>
                          <td>Keterangan</td>
                          <td><?php echo $data['keterangan']?></td>
                        </tr>
                        <tr>
                          <td>Jenis PIB</td>
                          <td><?php echo $data['jenis_pib']?></td>
                        </tr>
                        <tr>
                          <td>Jenis Impor</td>
                          <td><?php echo $data['jenis_impor']?></td>
                        </tr>
                        <tr>
                          <td>Cara Pembayaran</td>
                          <td><?php echo $data['cara_pembayaran']?></td>
                        </tr>
                        <tr>
                          <td><h2>Data Pengirim</h2> </td>
                          <td> </td>
                        </tr>
                        <tr>
                          <td>Kode Negara</td>
                          <td><?php echo $data['pengirim_kode_negara']?></td>
                        </tr>
                        <tr>
                          <td>Nama Negara</td>
                          <td><?php echo $data['pengirim_nama_negara']?></td>
                        <tr>
                          <td>Nama</td>
                          <td><?php echo $data['pengirim_nama']?></td>
                        </tr>
                        <tr>
                          <td>Alamat</td>
                          <td><?php echo $data['pengirim_alamat']?></td>
                        </tr>
                        <tr></tr><!-- agar warna data pengirim menjadi putih, bisa dihapus jika perlu -->
                        <tr>
                          <td><h2>Data Penjual</h2> </td>
                          <td> </td>
                        </tr>
                        <tr>
                          <td>Kode Negara</td>
                          <td><?php echo $data['penjual_kode_negara']?></td>
                        </tr>
                        <tr>
                          <td>Nama Negara</td>
                          <td><?php echo $data['penjual_nama_negara']?></td>
                        <tr>
                          <td>Nama</td>
                          <td><?php echo $data['penjual_nama']?></td>
                        </tr>
                        
                        <tr>
                          <td>Alamat</td>
                          <td><?php echo $data['penjual_alamat']?></td>
                        </tr>
                        <tr></tr><!-- agar warna data pengirim menjadi putih, bisa dihapus jika perlu -->
                        <tr>
                          <td><h2>Data Importir</h2> </td>
                          <td> </td>
                        </tr>
                        <tr>
                          <td>Jenis Identitas</td>
                          <td><?php echo $data['importir_jenis_identitas']?></td>
                        </tr>
                        <tr>
                          <td>No. identitas</td>
                          <td><?php echo $data['importir_nomor_identitas']?></td>
                        </tr>
                        <tr>
                          <td>Nama</td>
                          <td><?php echo $data['importir_nama']?></td>
                        </tr>
                        <tr>
                          <td>Alamat</td>
                          <td><?php echo $data['importir_alamat']?></td>
                        </tr>
                        <tr>
                          <td>Status Ijin</td>
                          <td><?php echo $data['importir_ijin']?></td>
                        </tr>
                        <tr>
                          <td><h2>Data Pemilik Barang</h2> </td>
                          <td> </td>
                        </tr>
                        <tr>
                          <td>Jenis Identitas</td>
                          <td><?php echo $data['pemilik_jenis_identitas']?></td>
                        </tr>
                        <tr>
                          <td>No. identitas</td>
                          <td><?php echo $data['pemilik_nomor_identitas']?></td>
                        </tr>
                        <tr>
                          <td>Nama</td>
                          <td><?php echo $data['pemilik_nama']?></td>
                        </tr>
                        <tr>
                          <td>Alamat</td>
                          <td><?php echo $data['pemilik_alamat']?></td>
                        </tr>
                        <tr></tr><!-- agar warna data pengirim menjadi putih, bisa dihapus jika perlu -->
                        <tr>
                          <td><h2>Pengiriman</h2> </td>
                          <td> </td>
                        </tr>
                        <tr>
                          <td>Nomor Pendaftaran</td>
                          <td><?php echo $data['pendaftaran_nomor']?></td>
                        </tr>
                        <tr>
                          <td>Tanggal Pendaftaran</td>
                          <td><?php echo $data['pendaftaran_tanggal']?></td>
                        </tr>
                        <tr>
                          <td>Respon</td>
                          <td><?php echo $data['respon']?></td>
                        </tr>
                        <tr>
                          <td>Cara Pengangkutan</td>
                          <td><?php echo $data['cara_angkut']?></td>
                        </tr>
                        <tr>
                          <td>Nama Sarana Pengangkutan</td>
                          <td><?php echo $data['nama_pengangkut']?></td>
                        </tr>
                        <tr>
                          <td>Perkiraan Tiba</td>
                          <td><?php echo $data['perkiraan_tiba']?></td>
                        </tr>
                        <tr>
                          <td>Pelabuhan Muat</td>
                          <td><?php echo $data['pelabuhan_muat']?></td>
                        </tr>
                        
                        <tr>
                          <td>Pelabuhan Tujuan</td>
                          <td><?php echo $data['pelabuhan_tujuan']?></td>
                        </tr>
                        <tr></tr><!-- agar warna data pengirim menjadi putih, bisa dihapus jika perlu -->
                        <tr>
                          <td><h2>Invoice, BL, dan Manifest</h2> </td>
                          <td> </td>
                        </tr>
                        <tr>
                          <td>No. Invoice</td>
                          <td><?php echo $data['invoice_nomor']?></td>
                        </tr>
                        <tr>
                          <td>Tanggal Invoice</td>
                          <td><?php echo $data['invoice_tanggal']?></td>
                        </tr>
                        <tr>
                          <td>Cara Transaksi</td>
                          <td><?php echo $data['transaksi']?></td>
                        </tr>
                        <tr>
                          <td>No. BL</td>
                          <td><?php echo $data['bl_nomor']?></td>
                        </tr>
                        <tr>
                          <td>Tanggal BL</td>
                          <td><?php echo $data['bl_tanggal']?></td>
                        </tr>
                        <tr>
                          <td>No. Manifest</td>
                          <td><?php echo $data['manifest_nomor']?></td>
                        </tr>
                        <tr>
                          <td>Pos Manifest</td>
                          <td><?php echo $data['manifest_pos']?></td>
                        </tr>
                        <tr>
                          <td>SubPos Manifest</td>
                          <td><?php echo $data['manifest_subpos']?></td>
                        </tr>
                        <tr>
                          <td>Tanggal Manifest</td>
                          <td><?php echo $data['manifest_tanggal']?></td>
                        </tr>
                        <tr>
                          <td>Tempat Penimbunan</td>
                          <td><?php echo $data['tempat_penimbunan']?></td>
                        </tr>
                        <tr></tr><!-- agar warna data pengirim menjadi putih, bisa dihapus jika perlu -->
                        <tr>
                          <td><h2>Lain-lain</h2> </td>
                          <td> </td>
                        </tr>
                        
                        <tr>
                          <td>Nilai CIF</td>
                          <td><?php echo $data['nilai_cif']?></td>
                        </tr>
                        <tr>
                          <td>Asuransi</td>
                          <td><?php echo $data['asuransi']?></td>
                        </tr>
                        <tr>
                          <td>FREIGHT</td>
                          <td><?php echo $data['freight']?></td>
                        </tr>
                        <tr>
                          <td>Kurs</td>
                          <td><?php echo $data['kurs']?></td>
                        </tr>
                        <tr>
                          <td>NDPBM</td>
                          <td><?php echo $data['ndpbm']?></td>
                        </tr>
                        <tr>
                          <td>Nilai Pabean</td>
                          <td><?php echo $data['nilai_pabean']?></td>
                        </tr>
                        <tr>
                        <tr>
                          <td>Nomor, Ukuran, dan tipe Peti kemas </td>
                          <td><?php echo $data['peti_kemas']?></td>
                        </tr>
                        <tr>
                          <td>Jumlah, Jenis, dan Merek </td>
                          <td><?php echo $data['jjm']?></td>
                        </tr>
                        <tr>
                          <td>Berat Kotor </td>
                          <td><?php echo $data['berat_kotor']?></td>
                        </tr>
                        <tr>
                          <td>Berat Bersih</td>
                          <td><?php echo $data['berat_bersih']?></td>
                        </tr>
                        <tr>
                          <td><h2>Detail Dokumen</h2> </td>
                          <td> </td>
                        </tr>
                        <tr>
                          <td>Jenis File</td>
                          <td><?php echo $data['jenis_file']?></td>
                        </tr>
                        <tr>
                          <td>File</td>
                          <?php
                            if($data['file_suratmasuk'] == null){
                              echo '<td><b>Tidak ada file</b></td>';
                            }
                            else {
                              echo '<td><a href= "surat_masuk/'.$data['file_suratmasuk'].'"><b>Unduh File</b></a></td>';
                            }
                          ?>
                        </tr>
                        <tr>
                          <td>Operator</td>
                          <td><?php echo $data['operator']?></td>
                        </tr>
                        
                      </tbody>
                    </table>
                    <div class="text-right">
                      <a href = "index.php" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
                      <a href = "editsuratmasuk.php?id_suratmasuk=<?php echo $data['id_suratmasuk']?>"class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                      <a href = "detail-datatable.php?id_suratmasuk=<?php echo $data['id_suratmasuk']?>"class="btn btn-primary"></span> Lihat Pungutan</a>
                    </div>
                    </div>
                     
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
    <!-- morris.js -->
    <script src="../assets/vendors/raphael/raphael.min.js"></script>
    <script src="../assets/vendors/morris.js/morris.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../assets/vendors/moment/min/moment.min.js"></script>
    <script src="../assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../assets/build/js/custom.min.js"></script>

  </body>
</html>