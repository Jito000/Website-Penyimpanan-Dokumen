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
	  
    <title>Input </title>

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
           
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><a href="datasuratmasuk.php" >Dokumen ></a><small>Tambah Dokumen Baru</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="proses/proses_inputsuratmasuk.php"  name="formsuratmasuk" method="post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    <!-- Tanggal -->  
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Masuk <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class='input-group date' id='myDatepicker1'>
                            <input type='text' id="tanggal_masuk" name="tanggal_masuk" required="required" class="form-control" required="required" readonly="readonly" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        </div>
                      </div>
                      <!-- kode kantor -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kode Kantor <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" onkeyup="validPengajuan(this)" id="kode_kantor" name="kode_kantor" required="required" maxlength="35" placeholder="Masukkan kode kantor" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!-- kantor pabean -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kantor Pabean <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="kantor_pabean" name="kantor_pabean" required="required" placeholder="Masukkan kantor pabean" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!-- nomor pengajuan -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. Pengajuan <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="nomor_pengajuan" name="nomor_pengajuan" required="required" maxlength="35" placeholder="Masukkan Nomor Pengajuan" class="pengajuan form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!-- halaman -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Halaman <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" onkeyup="validAngka(this)" id="halaman" name="halaman" required="required" maxlength="7" placeholder="Masukkan halaman surat" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!-- keterangan ekspor/impor -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ekspor/Impor <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select id="keterangan" name="keterangan" required="required"  class="form-control col-md-7 col-xs-12" >
                            <option value="none" selected disabled hidden>--- None ---</option>
                            <option value="Ekspor">Ekspor</option>
                            <option value="Impor">Impor</option>
                          </select>
                        </div>
                      </div>
                      
                      <!-- Jenis PIB -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis PIB <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select id="jenis_pib" name="jenis_pib" required="required"  class="form-control col-md-7 col-xs-12" >
                            <option value="none" selected disabled hidden>--- None ---</option>
                            <option value="1. Biasa">1. Biasa</option>
                            <option value="2. Berkala">2. Berkala</option>
                          </select>
                        </div>
                      </div>
                      <!-- Jenis impor -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Impor <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select id="jenis_impor" name="jenis_impor" required="required"  class="form-control col-md-7 col-xs-12" >
                            <option value="none" selected disabled hidden>--- None ---</option>
                            <option value="1. Untuk Dipakai">1. Untuk Dipakai</option>
                            <option value="2. Sementara">2. Sementara</option>
                            <option value="5. Pelayanan segera">5. Pelayanan segera</option>
                            <option value="9. Gabungan 1 & 2">9. Gabungan 1 & 2</option>
                          </select>
                        </div>
                      </div>
                      <!-- cara pembayaran -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Cara Pembayaran <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select id="cara_pembayaran" name="cara_pembayaran" required="required"  class="form-control col-md-7 col-xs-12" >
                            <option value="none" selected disabled hidden>--- None ---</option>
                            <option value="1. Biasa/Tunai">1. Biasa/Tunai</option>
                            <option value="2. Berkala">2. Berkala</option>
                            <option value="3. Dengan jaminan">3. Dengan Jaminan</option>
                            <option value="9. Lainnya">9. lainnya</option>
                          </select>
                        </div>
                      </div>
                      <!-- separator -->
                      <div class="ln_solid"></div>
                      <!-- separator -->

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"><h2><b>Pengirim</b></h2></label>
                      </div>
                      <!-- nama pengirim-->
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="pengirim_nama" name="pengirim_nama" required="required" placeholder="Masukkan nama pengirim" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!-- alamat pengirim-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea rows="3" type="text" id="pengirim_alamat" name="pengirim_alamat" required="required" placeholder="Masukkan alamat pengirim" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>
                      <!-- separator -->
                      <div class="ln_solid"></div>
                      <!-- separator -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"><h2><b>Penjual</b></h2>
                      </div>
                      <!-- auto fill-->
                      <div class="form-group">
                        <label style="vertical-align: top;" class="control-label col-md-3 col-sm-3 col-xs-12" for="salin_isi">sama dengan pengirim </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input onchange="autoFillPenjual()" type="checkbox" id="salin_isi_1" name="salin_isi_1" >
                        </div>
                      </div>
                      <!-- nama penjual-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="penjual_nama" name="penjual_nama" required="required" placeholder="Masukkan nama penjual" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!-- alamat penjual-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea rows="3" type="text" id="penjual_alamat" name="penjual_alamat" required="required" placeholder="Masukkan alamat penjual" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>

                      <!-- separator -->
                      <div class="ln_solid"></div>
                      <!-- separator -->

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"><h2><b>Importir</b></h2></label>
                      </div>
                      <!-- jenis identitas importir -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Identitas<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select id="importir_jenis_identitas" name="importir_jenis_identitas" required="required"  class="form-control col-md-7 col-xs-12" >
                            <option value="none" selected disabled hidden>--- None ---</option>
                            <option value="NPWP">NPWP</option>
                            <option value="Lainnya">Lainnya</option>
                          </select>
                        </div>
                      </div>
                      <!-- identitas importir-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nomor Identitas <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" onkeyup="validAngka(this)" id="importir_nomor_identitas" name="importir_nomor_identitas" required="required" placeholder="Masukkan nomor" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!-- nama importir-->
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="importir_nama" name="importir_nama" required="required" placeholder="Masukkan nama importir" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!-- alamat importir-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea rows="3" type="text" id="importir_alamat" name="importir_alamat" required="required" placeholder="Masukkan alamat importir" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>
                      <!-- separator -->
                      <div class="ln_solid"></div>
                      <!-- separator -->
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"><h2><b>Pemilik Barang</b></h2></label>
                      </div>
                      <!-- auto fill-->
                      <div class="form-group">
                        <label style="vertical-align: top;" class="control-label col-md-3 col-sm-3 col-xs-12" for="salin_isi">sama dengan importir </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input onchange="autoFillPemilik()" type="checkbox" id="salin_isi_2" name="salin_isi_2" >
                        </div>
                      </div>

                      <!-- jenis identitas pemilik -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jenis Identitas<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select id="pemilik_jenis_identitas" name="pemilik_jenis_identitas" required="required"  class="form-control col-md-7 col-xs-12" >
                            <option value="none" selected disabled hidden>--- None ---</option>
                            <option value="NPWP">NPWP</option>
                            <option value="Lainnya">Lainnya</option>
                          </select>
                        </div>
                      </div>
                      <!-- identitas pemilik-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nomor Identitas <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" onkeyup="validAngka(this)" id="pemilik_nomor_identitas" name="pemilik_nomor_identitas" required="required" placeholder="Masukkan nomor" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!-- nama pemilik-->
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="pemilik_nama" name="pemilik_nama" required="required" placeholder="Masukkan nama pemilik" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!-- alamat pemilik-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Alamat <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea rows="3" type="text" id="pemilik_alamat" name="pemilik_alamat" required="required" placeholder="Masukkan alamat pemilik" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>

                      <!-- separator -->
                       <div class="ln_solid"></div>
                      <!-- separator -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"><h2><b>Pengiriman</b></h2></label>
                      </div>
                      <!-- cara pengangkutan -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Cara Pengangkutan<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select id="cara_angkut" name="cara_angkut" required="required"  class="form-control col-md-7 col-xs-12" >
                            <option value="none" selected disabled hidden>--- None ---</option>
                            <option value="Darat">Darat</option>
                            <option value="Laut">Laut</option>
                            <option value="Udara">Udara</option>
                          </select>
                        </div>
                      </div>
                      <!-- nama sarana pengangkutan -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Sarana Pengangkutan <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="nama_pengangkut" name="nama_pengangkut" required="required" placeholder="Masukkan nama sarana pengangkutan" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!-- tanggal perkiraan tiba -->  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Perkiraan Tiba <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class='input-group date' id='myDatepicker2'>
                              <input type='text' id="perkiraan_tiba" name="perkiraan_tiba" required="required" class="form-control" required="required" readonly="readonly" />
                              <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                          </div>
                        </div>
                      </div>
                      <!-- pelabuhan muat -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Pelabuhan Muat <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="pelabuhan_muat" name="pelabuhan_muat" required="required" placeholder="Masukkan pelabuhan muat" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!-- pelabuhan transit -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pelabuhan Transit <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="pelabuhan_transit" name="pelabuhan_transit" required="required" class="form-control" placeholder='Masukkan pelabuhan transit'>
                        </div>
                      </div>
                      <!-- pelabuhan tujuan -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Pelabuhan Tujuan <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="pelabuhan_tujuan" name="pelabuhan_tujuan" required="required" placeholder="Masukkan pelabuhan tujuan" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!-- separator -->
                      <div class="ln_solid"></div>
                      <!-- separator -->

                      <!-- invoice BL manifest -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"><h2><b>Invoice, BL, dan Manifest</b></h2></label>
                      </div>
                      <!-- no invoice-->
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. Invoice <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="invoice_nomor" name="invoice_nomor" required="required" placeholder="Masukkan nomor invoice" class="form-control col-md-7 col-xs-12"style="text-transform: uppercase;">
                        </div>
                      </div>
                      <!-- tanggal invoice -->  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Invoice <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class='input-group date' id='myDatepicker3'>
                              <input type='text' id="invoice_tanggal" name="invoice_tanggal" required="required" class="form-control" required="required" readonly="readonly" />
                              <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                          </div>
                        </div>
                      </div>
                      <!-- no bl-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. BL <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="bl_nomor" name="bl_nomor" required="required" placeholder="Masukkan nomor BL" class="form-control col-md-7 col-xs-12"style="text-transform: uppercase;">
                        </div>
                      </div>
                      <!-- tanggal bl -->  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal BL <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class='input-group date' id='myDatepicker4'>
                              <input type='text' id="bl_tanggal" name="bl_tanggal" required="required" class="form-control" required="required" readonly="readonly" />
                              <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                          </div>
                        </div>
                      </div>
                      <!-- no manifest-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No. Manifest <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="manifest_nomor" name="manifest_nomor" required="required" placeholder="Masukkan nomor manifest" class="form-control col-md-7 col-xs-12" style="text-transform: uppercase;">
                        </div>
                      </div>
                      <!-- pos manifest-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Pos Manifest <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="manifest_pos" name="manifest_pos" required="required" placeholder="Masukkan Pos manifest" class="form-control col-md-7 col-xs-12" style="text-transform: uppercase;">
                        </div>
                      </div>
                      <!-- tanggal manifest -->  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Manifest <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class='input-group date' id='myDatepicker5'>
                              <input type='text' id="manifest_tanggal" name="manifest_tanggal" required="required" class="form-control" required="required" readonly="readonly" />
                              <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                          </div>
                        </div>
                      </div>
                      <!-- tempat penimbunan -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tempat Penimbunan <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="tempat_penimbunan" name="tempat_penimbunan" required="required" placeholder="Masukkan tempat penimbunan" class="form-control col-md-7 col-xs-12"style="text-transform: uppercase;">
                        </div>
                      </div>
                      <!-- separator -->
                      <div class="ln_solid"></div>
                      <!-- separator -->

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"><h2><b><!-- nama grup --></b></h2></label>
                      </div>
                      <!-- valuta -->
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Valuta <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="valuta" name="valuta" required="required" placeholder="Masukkan valuta" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!-- nilai cif-->
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nilai CIF <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="nilai_cif" name="nilai_cif" required="required" placeholder="Masukkan nilai cif" class="currency form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <!-- asuransi -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Asuransi <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="asuransi" name="asuransi" required="required" placeholder="Masukkan asuransi" class="currency form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!-- freight -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">FREIGHT <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="freight" name="freight" required="required" placeholder="Masukkan freight" class=" currency form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!-- ndpbm-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">NDPBM <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="ndpbm" name="ndpbm" required="required" placeholder="Masukkan NDPBM" class="currency form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!-- nilai pabean -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nilai Pabean <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="nilai_pabean" name="nilai_pabean" required="required" placeholder="Masukkan nilai pabean" class="currency form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!-- peti kemas -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nomor, Ukuran, dan tipe Peti kemas <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="peti_kemas" name="peti_kemas" required="required" placeholder="Format: NOMOR UKURAN (satuan) TIPE" class="form-control col-md-7 col-xs-12">
                          <small>Contoh: APHU-7328512 40 Feet FCL</small>
                        </div>
                      </div>
                      <!-- jumlah, jenis, merk -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jumlah, Jenis, dan Merek <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="jjm" name="jjm" required="required" placeholder="Format: JUMLAH JENIS Merk: MERK" class="form-control col-md-7 col-xs-12">
                          <small>Contoh: 711 CT/Cartoon Merk: SESUAI B/L</small>
                        </div>
                      </div>
                      <!-- berat kotor -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Berat Kotor (kg)<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="berat_kotor" name="berat_kotor" required="required" placeholder="Masukkan berat kotor" class="currency form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!-- berat bersih -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Berat Bersih (kg)<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="berat_bersih" name="berat_bersih" required="required" placeholder="Masukkan berat bersih" class="currency form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <!-- separator -->
                       <div class="ln_solid"></div>
                      <!-- separator -->
                      <!-- HS CODE -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">HS Code <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input  type="text" id="hs_code" name="hs_code" required="required" placeholder="Masukkan HS Code" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!-- file -->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">File <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                         <input name="file_suratmasuk" accept="application/pdf" type="file" id="file_suratmasuk" class="form-control" autocomplete="off"/> *max 10mb 
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Operator </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input value="<?php echo $_SESSION['nama'];?>" type="text" id="operator" name="operator"  readonly="readonly" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="datasuratmasuk.php" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span> Batal</a>
                          <button type="submit" name="input" value="Simpan" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Simpan & Lanjutkan</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>


              </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Dev by by jito
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
    <!-- bootstrap-progressbar -->
    <script src="../assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../assets/vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../assets/vendors/moment/moment.js"></script>
    
    <script src="../assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../assets/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../assets/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../assets/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../assets/vendors/select2/dist/js/select2.full.min.js"></script>
        <script src="../assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="../assets/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Parsley -->
    <script src="../assets/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../assets/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../assets/vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../assets/build/js/custom.min.js"></script>
	 <!-- Initialize datetimepicker -->
<script>

    $('#myDatepicker1').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true,
        format: 'DD-MM-YYYY'
    });

    $('#myDatepicker2').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true,
        format: 'DD-MM-YYYY'
    });
    
    $('#myDatepicker3').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true,
        format: 'DD-MM-YYYY'
    });
    
    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true,
        format: 'DD-MM-YYYY'
    });
    
    $('#myDatepicker5').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true,
        format: 'DD-MM-YYYY'
    });
    
    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });
    
    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>
<script language='javascript'>
function validAngka(a)
{
  
  
	if(!/^[0-9]+$/.test(a.value))
	{
	a.value = a.value.substring(0,a.value.length-1000);
	}
}
function validPengajuan(a)
{
	if(/[^-0-9a-zA-Z]+$/.test(a.value) || a.value=='-')
	{
	a.value = a.value.substring(0,a.value.length-1000);

	}
 
}
function autoFillPenjual(){
  if(document.getElementById('salin_isi_1').checked){
    document.getElementById('penjual_nama').value=document.getElementById('pengirim_nama').value;
    document.getElementById('penjual_alamat').value=document.getElementById('pengirim_alamat').value;
  }
  else{
    document.getElementById('penjual_nama').value='';
    document.getElementById('penjual_alamat').value='';
  }
}
function autoFillPemilik(){
  if(document.getElementById('salin_isi_2').checked){
    document.getElementById('pemilik_jenis_identitas').value=document.getElementById('importir_jenis_identitas').value;
    document.getElementById('pemilik_nomor_identitas').value=document.getElementById('importir_nomor_identitas').value;
    document.getElementById('pemilik_nama').value=document.getElementById('importir_nama').value;
    document.getElementById('pemilik_alamat').value=document.getElementById('importir_alamat').value;
  }
 else{
    document.getElementById('pemilik_jenis_identitas').value='none';
    document.getElementById('pemilik_nomor_identitas').value='';
    document.getElementById('pemilik_nama').value='';
    document.getElementById('pemilik_alamat').value='';
  
  }
}
$('input.currency').keyup(function(event){
  if(event.which >= 37 && event.which <= 40){return;}
  
    $(this).val(function(index, value){
      
      if(value=='.'){
        return value='0.';//.replace(/[\b0]/g,"0.");  //jika karakter pertama adalah 0 otomatis menambah . agar menjadi desimal
      }
      // else if(/(([1-9.,]+)[0]{2,})/.test(value) ){
      //   return value.replace(/[0]{2,}/,'');
      // }
      else if(/[.]/g.test(value)){
        if(/[.]{2,}/g.test(value) || /[0]{2,}/g.test(value)){
          return value='';
        }
        return value.replace(/([^0-9.])/g,"").replace(/\B(?=(\d{3})+(?!\d))/g,",").replace(/(\d{3})$/g,"");
        
      }
      else{
        return value
      .replace(/([^0-9.])/g,"")  // mencari yang bukan (^) angka 0-9 kecuali . mengganti dengan nilai kosong
      .replace(/\B(?=(\d{3})+(?!\d))/g,",") // membuat otomatis angka menjadi ribuan, ratusan dll
      
      }
      
    });
  
});
// $('input.currency').focusout(function(event){
//   if(event.which >= 37 && event.which <= 40){return;}
  
//     $(this).val(function(index, value){
      
//       if(/[^1-9,.]/.test(value)){
//         alert("angka yang anda masukkan tidak sesuai!");
//       }
//       return value
//       .replace(//,'')
//       .replace(/\B(?=(\d{3})+(?!\d))/g,",");
      
//     });
  
// });
$('input.pengajuan').keyup(function(event){
  if(event.which >= 37 && event.which <= 40){return;}
    
    $(this).val(function(index, value){
      //if(/(-{2,})/g.test(value)) return ;
      return value.replace(/[^-0-9]/g,'').replace(/(-{2,})/g,'-').replace(/(^-)/,'');;
      
    });
  
});
$('input.pengajuan').focusout(function(event){
  if(event.which >= 37 && event.which <= 40){return;}
  
    $(this).val(function(index, value){
      
      return value.replace(/(-$)/g,'');
      
    });
  
});

</script>
</body>
</html>
