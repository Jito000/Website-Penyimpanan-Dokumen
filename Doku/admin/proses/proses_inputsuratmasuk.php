<!DOCTYPE html>
<Center>
<?php
	error_reporting(0);	//disable this if you want debug code
	session_start();
	include '../../koneksi/koneksi.php';
	
	
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
	$pengirim_kode_negara				= mysqli_real_escape_string($db, strtoupper($_POST['pengirim_kode_negara']));
	$pengirim_nama_negara				= mysqli_real_escape_string($db, strtoupper($_POST['pengirim_nama_negara']));

	$penjual_nama	        			= mysqli_real_escape_string($db,$_POST['penjual_nama']);
	$penjual_alamat	        			= mysqli_real_escape_string($db,strtoupper($_POST['penjual_alamat']));
	$penjual_kode_negara				= mysqli_real_escape_string($db, strtoupper($_POST['penjual_kode_negara']));
	$penjual_nama_negara				= mysqli_real_escape_string($db, strtoupper($_POST['penjual_nama_negara']));
	
	$importir_jenis_identitas	        = mysqli_real_escape_string($db,$_POST['importir_jenis_identitas']);
	$importir_nomor_identitas			= mysqli_real_escape_string($db,$_POST['importir_nomor_identitas']);
	$importir_nama	       				= mysqli_real_escape_string($db,$_POST['importir_nama']);
	$importir_alamat					= mysqli_real_escape_string($db,strtoupper($_POST['importir_alamat']));
	$importir_ijin						= mysqli_real_escape_string($db,strtoupper($_POST['importir_ijin']));

	$pemilik_jenis_identitas	        = mysqli_real_escape_string($db,$_POST['pemilik_jenis_identitas']);
	$pemilik_nomor_identitas			= mysqli_real_escape_string($db,$_POST['pemilik_nomor_identitas']);
	$pemilik_nama	       				= mysqli_real_escape_string($db,$_POST['pemilik_nama']);
	$pemilik_alamat						= mysqli_real_escape_string($db,strtoupper($_POST['pemilik_alamat']));

	$pendaftaran_nomor					= mysqli_real_escape_string($db,strtoupper($_POST['pendaftaran_nomor']));
	$pendaftaran_tanggal                = mysqli_real_escape_string($db,$_POST['pendaftaran_tanggal']);
	$pendaftaran_tgl					= date('Y-m-d', strtotime($pendaftaran_tanggal));
	$respon 	                       	= mysqli_real_escape_string($db,$_POST['respon']);
    $cara_angkut                       	= mysqli_real_escape_string($db,$_POST['cara_angkut']);
	$nama_pengangkut		            = mysqli_real_escape_string($db,$_POST['nama_pengangkut']);
	$perkiraan_tiba                     = mysqli_real_escape_string($db,$_POST['perkiraan_tiba']);
	$perkiraan__tiba					= date('Y-m-d', strtotime($perkiraan_tiba));
	$pelabuhan_muat   	            	= mysqli_real_escape_string($db,$_POST['pelabuhan_muat']);
	$pelabuhan_tujuan                  	= mysqli_real_escape_string($db,$_POST['pelabuhan_tujuan']);

	$invoice_nomor	        			= mysqli_real_escape_string($db, strtoupper($_POST['invoice_nomor']));
	$invoice_tanggal					= mysqli_real_escape_string($db,$_POST['invoice_tanggal']);
	$invoice_tgl						= date('Y-m-d', strtotime($invoice_tanggal));
	$transaksi	       					= mysqli_real_escape_string($db, strtoupper($_POST['transaksi']));
	$bl_nomor	       					= mysqli_real_escape_string($db, strtoupper($_POST['bl_nomor']));
	$bl_tanggal							= mysqli_real_escape_string($db,$_POST['bl_tanggal']);
	$bl_tgl								= date('Y-m-d', strtotime($bl_tanggal));
	$manifest_nomor	        			= mysqli_real_escape_string($db, strtoupper($_POST['manifest_nomor']));
	$manifest_pos						= mysqli_real_escape_string($db, strtoupper($_POST['manifest_pos']));
	$manifest_subpos					= mysqli_real_escape_string($db,$_POST['manifest_subpos']);
	$manifest_tanggal	       			= mysqli_real_escape_string($db,$_POST['manifest_tanggal']);
	$manifest_tgl						= date('Y-m-d', strtotime($manifest_tanggal));
	$tempat_penimbunan					= mysqli_real_escape_string($db,strtoupper($_POST['tempat_penimbunan']));


	$kurs								= mysqli_real_escape_string($db,$_POST['kurs']);
	$nilai_cif	      	 				= mysqli_real_escape_string($db,$_POST['nilai_cif']);
	$asuransi							= mysqli_real_escape_string($db,$_POST['asuransi']);
    $freight                	       	= mysqli_real_escape_string($db,$_POST['freight']);
	$ndpbm		           				= mysqli_real_escape_string($db,$_POST['ndpbm']);
	$nilai_pabean                   	= mysqli_real_escape_string($db,$_POST['nilai_pabean']);
	$peti_kemas							= mysqli_real_escape_string($db,$_POST['peti_kemas']);
	$jjm   	    	        			= mysqli_real_escape_string($db,$_POST['jjm']);
	$berat_kotor   		            	= mysqli_real_escape_string($db,$_POST['berat_kotor']);
	$berat_bersih       	           	= mysqli_real_escape_string($db,$_POST['berat_bersih']);

	$jenis_file   	            		= mysqli_real_escape_string($db,$_POST['jenis_file']);
    $operator	                        = mysqli_real_escape_string($db,$_POST['operator']);

    date_default_timezone_set('Asia/Jakarta'); 
	$tanggal_entry  					= date("Y-m-d H:i:s");
	$nama_file_lengkap 					= $_FILES['file_suratmasuk']['name'];
	$nama_file 							= substr($nama_file_lengkap, 0, strripos($nama_file_lengkap, '.'));
	$ext_file							= substr($nama_file_lengkap, strripos($nama_file_lengkap, '.'));
	$tipe_file 							= $_FILES['file_suratmasuk']['type'];
	$ukuran_file 						= $_FILES['file_suratmasuk']['size'];
	$tmp_file 							= $_FILES['file_suratmasuk']['tmp_name'];
	
    $sql  		= "SELECT * FROM tb_suratmasuk where nomor_pengajuan='".$nomor_pengajuan."'";                        
	$query  	= mysqli_query($db, $sql);
	$data 		= mysqli_fetch_array($query);
	if (is_null($data["nomor_pengajuan"]==false) ) {
		echo "<h2><br>Loading...</h2>
		  			
					<script type='text/javascript'>
						alert('Nomor Pengajuan Telah ada!');
					</script>
		  			<meta http-equiv='refresh' content='2;url=../inputsuratmasuk.php'>
				  ";	
	}
	else{
		if($nama_file_lengkap==null){

			$sql = "INSERT INTO tb_suratmasuk(tanggal_masuk,kode_kantor, kantor_pabean, nomor_pengajuan, halaman, keterangan, jenis_pib, jenis_impor, cara_pembayaran, 
					pengirim_nama, pengirim_alamat, pengirim_kode_negara, pengirim_nama_negara, penjual_nama, penjual_alamat, penjual_kode_negara, penjual_nama_negara,
					importir_jenis_identitas, importir_nomor_identitas, importir_nama, importir_alamat, importir_ijin,
					pemilik_jenis_identitas, pemilik_nomor_identitas, pemilik_nama, pemilik_alamat,
					pendaftaran_nomor, pendaftaran_tanggal, respon, cara_angkut, nama_pengangkut, perkiraan_tiba, pelabuhan_muat, pelabuhan_tujuan, 
					invoice_nomor, invoice_tanggal, transaksi, bl_nomor, bl_tanggal, manifest_nomor, manifest_pos, manifest_subpos, manifest_tanggal, tempat_penimbunan,
					kurs, nilai_cif, asuransi, freight, ndpbm, nilai_pabean, peti_kemas, jjm, berat_kotor, berat_bersih,
					jenis_file, operator, tanggal_entry )
					values ('$tgl_masuk', '$kode_kantor', '$kantor_pabean', '$nomor_pengajuan', '$halaman', '$keterangan', '$jenis_pib', '$jenis_impor', '$cara_pembayaran', 
					'$pengirim_nama', '$pengirim_alamat', '$pengirim_kode_negara', '$pengirim_nama_negara', '$penjual_nama', '$penjual_alamat', '$penjual_kode_negara', '$penjual_nama_negara',
					'$importir_jenis_identitas', '$importir_nomor_identitas', '$importir_nama', '$importir_alamat', '$importir_ijin', 
					'$pemilik_jenis_identitas', '$pemilik_nomor_identitas', '$pemilik_nama', '$pemilik_alamat', 
					'$pendaftaran_nomor', '$pendaftaran_tgl', '$respon', '$cara_angkut', '$nama_pengangkut', '$perkiraan__tiba', '$pelabuhan_muat', '$pelabuhan_tujuan',
					'$invoice_nomor', '$invoice_tgl', '$transaksi', '$bl_nomor', '$bl_tgl', '$manifest_nomor', '$manifest_pos', '$manifest_subpos', '$manifest_tgl', '$tempat_penimbunan',
					'$kurs', '$nilai_cif', '$asuransi', '$freight', '$ndpbm', '$nilai_pabean', '$peti_kemas', '$jjm', '$berat_kotor', '$berat_bersih',
					'$jenis_file', '$operator', '$tanggal_entry')";
			$execute = mysqli_query($db, $sql);
			
			$check=$sql;

			$sql  		= "SELECT * FROM tb_suratmasuk where nomor_pengajuan='".$nomor_pengajuan."'";                        
			$query  	= mysqli_query($db, $sql);
			$data 		= mysqli_fetch_array($query);
                            
			echo "<h2><br>Input Success<br>
					$check
					Loading...</h2>
				<meta http-equiv='refresh' content='2;url=../editdatatable.php?id_suratmasuk=".$data["id_suratmasuk"]."'>";
		}
		else if (!($tgl_masuk=='') and !($kode_kantor =='') and !($kantor_pabean =='')  and !($nomor_pengajuan =='') and !($halaman =='') and !($keterangan =='') and !($jenis_pib =='') and !($jenis_impor =='') and !($cara_pembayaran =='')
			and !($pengirim_nama =='') and !($pengirim_alamat =='') and !($pengirim_kode_negara =='') and !($pengirim_nama_negara =='')and !($penjual_nama =='') and !($penjual_alamat =='')and !($penjual_kode_negara =='') and !($penjual_nama_negara =='')
			and !($importir_jenis_identitas =='')and !($importir_nomor_identitas =='') and !($importir_nama =='') and !($importir_alamat =='') and !($importir_ijin =='')
			and !($pemilik_jenis_identitas =='')and !($pemilik_nomor_identitas =='') and !($pemilik_nama =='') and !($pemilik_alamat =='')
			and !($pendaftaran_nomor =='') and !($pendaftaran_tgl =='') and !($respon =='') and !($cara_angkut =='')and !($nama_pengangkut =='') and !($perkiraan__tiba =='') and !($pelabuhan_muat =='')  and !($pelabuhan_tujuan =='')
			and !($invoice_nomor=='') and !($invoice_tanggal =='') and !($transaksi =='') and !($bl_nomor =='') and !($bl_tanggal =='') and !($manifest_nomor =='') and !($manifest_pos =='') and !($manifest_subpos =='') and !($manifest_tanggal =='') and !($tempat_penimbunan =='')
			and !($kurs=='') and !($nilai_cif =='') and !($asuransi =='')  and !($freight =='') and !($ndpbm =='') and !($nilai_pabean =='') and !($peti_kemas =='') and !($jjm =='') and !($berat_kotor =='') and !($berat_bersih =='')
			and !($jenis_file =='') and !($operator =='') and !($tanggal_entry =='')

			and ($tipe_file == "application/pdf") and ($ukuran_file <= 10340000)){		
			
			$nama_baru = $kode_kantor.'_'.$nomor_pengajuan.'_'.$halaman. $ext_file;
			$path = "../surat_masuk/".$nama_baru;
			move_uploaded_file($tmp_file, $path);

			$sql = "INSERT INTO tb_suratmasuk(tanggal_masuk,kode_kantor, kantor_pabean, nomor_pengajuan, halaman, keterangan, jenis_pib, jenis_impor, cara_pembayaran, 
					pengirim_nama, pengirim_alamat, pengirim_kode_negara, pengirim_nama_negara, penjual_nama, penjual_alamat, penjual_kode_negara, penjual_nama_negara,
					importir_jenis_identitas, importir_nomor_identitas, importir_nama, importir_alamat, importir_ijin,
					pemilik_jenis_identitas, pemilik_nomor_identitas, pemilik_nama, pemilik_alamat,
					pendaftaran_nomor, pendaftaran_tanggal, respon, cara_angkut, nama_pengangkut, perkiraan_tiba, pelabuhan_muat, pelabuhan_tujuan, 
					invoice_nomor, invoice_tanggal, transaksi, bl_nomor, bl_tanggal, manifest_nomor, manifest_pos, manifest_subpos, manifest_tanggal, tempat_penimbunan,
					kurs, nilai_cif, asuransi, freight, ndpbm, nilai_pabean, peti_kemas, jjm, berat_kotor, berat_bersih,
					jenis_file,  file_suratmasuk, operator, tanggal_entry )
					values ('$tgl_masuk', '$kode_kantor', '$kantor_pabean', '$nomor_pengajuan', '$halaman', '$keterangan', '$jenis_pib', '$jenis_impor', '$cara_pembayaran', 
					'$pengirim_nama', '$pengirim_alamat', '$pengirim_kode_negara', '$pengirim_nama_negara', '$penjual_nama', '$penjual_alamat', '$penjual_kode_negara', '$penjual_nama_negara',
					'$importir_jenis_identitas', '$importir_nomor_identitas', '$importir_nama', '$importir_alamat', '$importir_ijin', 
					'$pemilik_jenis_identitas', '$pemilik_nomor_identitas', '$pemilik_nama', '$pemilik_alamat', 
					'$pendaftaran_nomor', '$pendaftaran_tgl', '$respon', '$cara_angkut', '$nama_pengangkut', '$perkiraan__tiba', '$pelabuhan_muat', '$pelabuhan_tujuan',
					'$invoice_nomor', '$invoice_tgl', '$transaksi', '$bl_nomor', '$bl_tgl', '$manifest_nomor', '$manifest_pos', '$manifest_subpos', '$manifest_tgl', '$tempat_penimbunan',
					'$kurs', '$nilai_cif', '$asuransi', '$freight', '$ndpbm', '$nilai_pabean', '$peti_kemas', '$jjm', '$berat_kotor', '$berat_bersih',
					'$jenis_file',  '$nama_baru', '$operator', '$tanggal_entry')";
			$execute = mysqli_query($db, $sql);
			
			$check=$sql;

			$sql  		= "SELECT * FROM tb_suratmasuk where nomor_pengajuan='".$nomor_pengajuan."'";                        
			$query  	= mysqli_query($db, $sql);
			$data 		= mysqli_fetch_array($query);
                            
			echo "<h2><br>Input Success<br>
					$check
					Loading...</h2>
				<meta http-equiv='refresh' content='2;url=../editdatatable.php?id_suratmasuk=".$data["id_suratmasuk"]."'>";
		}
		else{
			echo "<h2>Silahkan isi semua kolom lalu tekan submit</h2>
					<meta http-equiv='refresh' content='2;url=../inputsuratmasuk.php'>";
		}
	}
    
	
?>
</Center>
</html>	