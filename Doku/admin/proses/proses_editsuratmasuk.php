<?php
	session_start();
	include '../../koneksi/koneksi.php';
    $id				                    = mysqli_real_escape_string($db,$_POST['id_suratmasuk']);
	$tanggal_masuk	        			= mysqli_real_escape_string($db,$_POST['tanggal_masuk']);
	$tgl_masuk                  		= date('Y-m-d', strtotime($tanggal_masuk));
	$kode_kantor	      				= mysqli_real_escape_string($db,$_POST['kode_kantor']);
	$kantor_pabean	      				= mysqli_real_escape_string($db,$_POST['kantor_pabean']);
	$nomor_pengajuan	                = mysqli_real_escape_string($db,$_POST['nomor_pengajuan']);
	$halaman	                		= mysqli_real_escape_string($db,$_POST['halaman']);
	$keterangan   	            		= mysqli_real_escape_string($db,$_POST['keterangan']);
	$jenis_pib	        				= mysqli_real_escape_string($db,$_POST['jenis_pib']);
	$jenis_impor	        			= mysqli_real_escape_string($db,$_POST['jenis_impor']);
	$cara_pembayaran	        		= mysqli_real_escape_string($db,$_POST['cara_pembayaran']);

	$pengirim_nama	        			= mysqli_real_escape_string($db,$_POST['pengirim_nama']);
	$pengirim_alamat	        		= mysqli_real_escape_string($db,strtoupper($_POST['pengirim_alamat']));

	$penjual_nama	        			= mysqli_real_escape_string($db,$_POST['penjual_nama']);
	$penjual_alamat	        			= mysqli_real_escape_string($db,strtoupper($_POST['penjual_alamat']));
	
	$importir_jenis_identitas	        = mysqli_real_escape_string($db,$_POST['importir_jenis_identitas']);
	$importir_nomor_identitas			= mysqli_real_escape_string($db,$_POST['importir_nomor_identitas']);
	$importir_nama	       				= mysqli_real_escape_string($db,$_POST['importir_nama']);
	$importir_alamat					= mysqli_real_escape_string($db,strtoupper($_POST['importir_alamat']));

	$pemilik_jenis_identitas	        = mysqli_real_escape_string($db,$_POST['pemilik_jenis_identitas']);
	$pemilik_nomor_identitas			= mysqli_real_escape_string($db,$_POST['pemilik_nomor_identitas']);
	$pemilik_nama	       				= mysqli_real_escape_string($db,$_POST['pemilik_nama']);
	$pemilik_alamat						= mysqli_real_escape_string($db,strtoupper($_POST['pemilik_alamat']));

    $cara_angkut                       	= mysqli_real_escape_string($db,$_POST['cara_angkut']);
	$nama_pengangkut		            = mysqli_real_escape_string($db,$_POST['nama_pengangkut']);
	$perkiraan_tiba                     = mysqli_real_escape_string($db,$_POST['perkiraan_tiba']);
	$perkiraan__tiba					= date('Y-m-d', strtotime($perkiraan_tiba));
	$pelabuhan_muat   	            	= mysqli_real_escape_string($db,$_POST['pelabuhan_muat']);
	$pelabuhan_transit   	            = mysqli_real_escape_string($db,$_POST['pelabuhan_transit']);
	$pelabuhan_tujuan                  	= mysqli_real_escape_string($db,$_POST['pelabuhan_tujuan']);

	$invoice_nomor	        			= mysqli_real_escape_string($db, strtoupper($_POST['invoice_nomor']));
	$invoice_tanggal					= mysqli_real_escape_string($db,$_POST['invoice_tanggal']);
	$invoice_tgl						= date('Y-m-d', strtotime($invoice_tanggal));
	$bl_nomor	       					= mysqli_real_escape_string($db, strtoupper($_POST['bl_nomor']));
	$bl_tanggal							= mysqli_real_escape_string($db,$_POST['bl_tanggal']);
	$bl_tgl								= date('Y-m-d', strtotime($bl_tanggal));
	$manifest_nomor	        			= mysqli_real_escape_string($db, strtoupper($_POST['manifest_nomor']));
	$manifest_pos						= mysqli_real_escape_string($db, strtoupper($_POST['manifest_pos']));
	$manifest_tanggal	       			= mysqli_real_escape_string($db,$_POST['manifest_tanggal']);
	$manifest_tgl						= date('Y-m-d', strtotime($manifest_tanggal));
	$tempat_penimbunan					= mysqli_real_escape_string($db,strtoupper($_POST['tempat_penimbunan']));


	$valuta								= mysqli_real_escape_string($db,$_POST['valuta']);
	$nilai_cif	      	 				= mysqli_real_escape_string($db,$_POST['nilai_cif']);
	$asuransi							= mysqli_real_escape_string($db,$_POST['asuransi']);
    $freight                	       	= mysqli_real_escape_string($db,$_POST['freight']);
	$ndpbm		           				= mysqli_real_escape_string($db,$_POST['ndpbm']);
	$nilai_pabean                   	= mysqli_real_escape_string($db,$_POST['nilai_pabean']);
	$peti_kemas							= mysqli_real_escape_string($db,$_POST['peti_kemas']);
	$jjm   	    	        			= mysqli_real_escape_string($db,$_POST['jjm']);
	$berat_kotor   		            	= mysqli_real_escape_string($db,$_POST['berat_kotor']);
	$berat_bersih       	           	= mysqli_real_escape_string($db,$_POST['berat_bersih']);

	$hs_code   	            			= mysqli_real_escape_string($db,$_POST['hs_code']);
    $operator	                        = mysqli_real_escape_string($db,$_POST['operator']);

	$file_suratmasuk			        = $_FILES['file_suratmasuk']['name'];
    date_default_timezone_set('Asia/Jakarta'); 
	$tanggal_entry  					= date("Y-m-d H:i:s");
    $thnNow 							= date("Y");
	
	$sql  		= "SELECT * FROM tb_suratmasuk where id_suratmasuk='".$id."'";                        
	$query  	= mysqli_query($db, $sql);
	$data 		= mysqli_fetch_array($query);
	
    //jika file tidak ada
	if ($file_suratmasuk == ''  ){
		if ($nomor_pengajuan!=$data['nomor_pengajuan']) {
			echo "<!DOCTYPE html>
					<Center>
						<h2><br>Loading...</h2>
		  			</center>
					<script type='text/javascript'>
						alert('Input Tidak Sesui! ulangi kembali...');
					</script>
		  			<meta http-equiv='refresh' content='2;url=../editsuratmasuk.php?id_suratmasuk=".$id."'>
				  </html>";
		}
		else if ($halaman!=$data['halaman']) {
			echo "<!DOCTYPE html>
					<Center>
						<h2><br>Loading...</h2>
		  			</center>
					<script type='text/javascript'>
						alert('Input Tidak Sesui! ulangi kembali...');
					</script>
		  			<meta http-equiv='refresh' content='2;url=../editsuratmasuk.php?id_suratmasuk=".$id."'>
				  </html>";
		}
		else{
			$sql = "UPDATE tb_suratmasuk set 
				tanggal_masuk				='$tgl_masuk',
				kode_kantor					='$kode_kantor', 
				kantor_pabean				='$kantor_pabean', 
				nomor_pengajuan				='$nomor_pengajuan', 
				halaman						='$halaman', 
				keterangan					='$keterangan', 
				jenis_pib					='$jenis_pib', 
				jenis_impor					='$jenis_impor',
				cara_pembayaran				='$cara_pembayaran',
				pengirim_nama				='$pengirim_nama',
				pengirim_alamat				='$pengirim_alamat',
				penjual_nama				='$penjual_nama',
				penjual_alamat				='$penjual_alamat',
				importir_jenis_identitas	='$importir_jenis_identitas',
				importir_nomor_identitas	='$importir_nomor_identitas',
				importir_nama				='$importir_nama',
				importir_alamat				='$importir_alamat',
				pemilik_jenis_identitas		='$pemilik_jenis_identitas',
				pemilik_nomor_identitas		='$pemilik_nomor_identitas',
				pemilik_nama				='$pemilik_nama',
				pemilik_alamat				='$pemilik_alamat',
				cara_angkut					='$cara_angkut',
				nama_pengangkut				='$nama_pengangkut',
				perkiraan_tiba				='$perkiraan__tiba',
				pelabuhan_muat				='$pelabuhan_muat',
				pelabuhan_transit			='$pelabuhan_transit', 
				pelabuhan_tujuan			='$pelabuhan_tujuan',
				invoice_nomor				='$invoice_nomor',
				invoice_tanggal				='$invoice_tgl',
				bl_nomor					='$bl_nomor',
				bl_tanggal					='$bl_tgl',
				manifest_nomor				='$manifest_nomor',
				manifest_pos				='$manifest_pos',
				manifest_tanggal			='$manifest_tgl',
				tempat_penimbunan			='$tempat_penimbunan',
				valuta						='$valuta',
				nilai_cif					='$nilai_cif',
				asuransi					='$asuransi',
				freight						='$freight',
				ndpbm						='$ndpbm',
				nilai_pabean				='$nilai_pabean',
				peti_kemas					='$peti_kemas',
				jjm							='$jjm',
				berat_kotor					='$berat_kotor',
				berat_bersih				='$berat_bersih',
				hs_code						= '$hs_code',
                operator            	    = '$operator',
                tanggal_entry               = '$tanggal_entry'
                        
				where id_suratmasuk = $id";
				
			$execute = mysqli_query($db, $sql);			
						
			echo "<!DOCTYPE html>
			<Center>
				<h2><br>Update Success<br>
	
					Loading...</h2>
			  </center>
			  <meta http-equiv='refresh' content='2;url=../detail-suratmasuk.php?id_suratmasuk=".$id."'>
		  </html>";	
		}
		
	}	
	else{
		
        $tipe_file 		= $_FILES['file_suratmasuk']['type'];
        $ukuran_file 	= $_FILES['file_suratmasuk']['size'];
		if (($tipe_file == "application/pdf") and ($ukuran_file <= 10340000)){	
			unlink("../surat_masuk/".$data['file_suratmasuk']);
			$ext_file		= substr($file_suratmasuk, strripos($file_suratmasuk, '.'));			
			$tmp_file 		= $_FILES['file_suratmasuk']['tmp_name'];
			
			$nama_baru =  $kode_kantor.'_'.$nomor_pengajuan.'_'.$halaman. $ext_file;
			$path = "../surat_masuk/".$nama_baru;
			move_uploaded_file($tmp_file, $path);
			
			$sql = "UPDATE tb_suratmasuk set 
				tanggal_masuk				='$tgl_masuk',
				kode_kantor					='$kode_kantor', 
				kantor_pabean				='$kantor_pabean', 
				nomor_pengajuan				='$nomor_pengajuan', 
				halaman						='$halaman', 
				keterangan					='$keterangan', 
				jenis_pib					='$jenis_pib', 
				jenis_impor					='$jenis_impor',
				cara_pembayaran				='$cara_pembayaran',
				pengirim_nama				='$pengirim_nama',
				pengirim_alamat				='$pengirim_alamat',
				penjual_nama				='$penjual_nama',
				penjual_alamat				='$penjual_alamat',
				importir_jenis_identitas	='$importir_jenis_identitas',
				importir_nomor_identitas	='$importir_nomor_identitas',
				importir_nama				='$importir_nama',
				importir_alamat				='$importir_alamat',
				pemilik_jenis_identitas		='$pemilik_jenis_identitas',
				pemilik_nomor_identitas		='$pemilik_nomor_identitas',
				pemilik_nama				='$pemilik_nama',
				pemilik_alamat				='$pemilik_alamat',
				cara_angkut					='$cara_angkut',
				nama_pengangkut				='$nama_pengangkut',
				perkiraan_tiba				='$perkiraan__tiba',
				pelabuhan_muat				='$pelabuhan_muat',
				pelabuhan_transit			='$pelabuhan_transit', 
				pelabuhan_tujuan			='$pelabuhan_tujuan',
				invoice_nomor				='$invoice_nomor',
				invoice_tanggal				='$invoice_tgl',
				bl_nomor					='$bl_nomor',
				bl_tanggal					='$bl_tgl',
				manifest_nomor				='$manifest_nomor',
				manifest_pos				='$manifest_pos',
				manifest_tanggal			='$manifest_tgl',
				tempat_penimbunan			='$tempat_penimbunan',
				valuta						='$valuta',
				nilai_cif					='$nilai_cif',
				asuransi					='$asuransi',
				freight						='$freight',
				ndpbm						='$ndpbm',
				nilai_pabean				='$nilai_pabean',
				peti_kemas					='$peti_kemas',
				jjm							='$jjm',
				berat_kotor					='$berat_kotor',
				berat_bersih				='$berat_bersih',
				hs_code						= '$hs_code',
                operator            	    = '$operator',
                tanggal_entry               = '$tanggal_entry', 
				file_suratmasuk				= '$nama_baru' 
				where id_suratmasuk = $id";
				
			$execute = mysqli_query($db, $sql);			
		
			echo "<!DOCTYPE html>
					<Center>
						<h2><br>Update Success<br>
			
							Loading...</h2>
		  			</center>
		  			<meta http-equiv='refresh' content='2;url=../detail-suratmasuk.php?id_suratmasuk=".$id."'>
				  </html>";			
		}
		else{
			echo "<!DOCTYPE html>
					<Center>
						<h2><br>Loading...</h2>
		  			</center>
					<script type='text/javascript'>
						alert('Input Tidak Sesui! ulangi kembali...');
					</script>
		  			<meta http-equiv='refresh' content='2;url=../editsuratmasuk.php?id_suratmasuk=".$id."'>
				  </html>";		
		}
	
	}
	?>
	