<?php
	session_start();
	include '../../koneksi/koneksi.php';
    $id				                    = mysqli_real_escape_string($db,$_POST['id_suratmasuk']);
	$bm_dibayar	        			    = mysqli_real_escape_string($db,$_POST['bm_dibayar']);
	$bm_ditanggung	      				= mysqli_real_escape_string($db,$_POST['bm_ditanggung']);
	$bm_ditunda	      				    = mysqli_real_escape_string($db,$_POST['bm_ditunda']);
	$bm_tidak	                        = mysqli_real_escape_string($db,$_POST['bm_tidak']);
	$bm_bebas	                		= mysqli_real_escape_string($db,$_POST['bm_bebas']);
	$bm_lunas   	            		= mysqli_real_escape_string($db,$_POST['bm_lunas']);

	$bmkite_dibayar	        			= mysqli_real_escape_string($db,$_POST['bmkite_dibayar']);
	$bmkite_ditanggung	      			= mysqli_real_escape_string($db,$_POST['bmkite_ditanggung']);
	$bmkite_ditunda	      				= mysqli_real_escape_string($db,$_POST['bmkite_ditunda']);
	$bmkite_tidak	                    = mysqli_real_escape_string($db,$_POST['bmkite_tidak']);
	$bmkite_bebas	                	= mysqli_real_escape_string($db,$_POST['bmkite_bebas']);
	$bmkite_lunas   	            	= mysqli_real_escape_string($db,$_POST['bmkite_lunas']);
	
	$bmt_dibayar	        			= mysqli_real_escape_string($db,$_POST['bmt_dibayar']);
	$bmt_ditanggung	      				= mysqli_real_escape_string($db,$_POST['bmt_ditanggung']);
	$bmt_ditunda	      				= mysqli_real_escape_string($db,$_POST['bmt_ditunda']);
	$bmt_tidak	                        = mysqli_real_escape_string($db,$_POST['bmt_tidak']);
	$bmt_bebas	                		= mysqli_real_escape_string($db,$_POST['bmt_bebas']);
	$bmt_lunas   	            		= mysqli_real_escape_string($db,$_POST['bmt_lunas']);

	$cukai_dibayar	        			= mysqli_real_escape_string($db,$_POST['cukai_dibayar']);
	$cukai_ditanggung	      			= mysqli_real_escape_string($db,$_POST['cukai_ditanggung']);
	$cukai_ditunda	      				= mysqli_real_escape_string($db,$_POST['cukai_ditunda']);
	$cukai_tidak	                    = mysqli_real_escape_string($db,$_POST['cukai_tidak']);
	$cukai_bebas	                	= mysqli_real_escape_string($db,$_POST['cukai_bebas']);
	$cukai_lunas   	            		= mysqli_real_escape_string($db,$_POST['cukai_lunas']);

    $ppn_dibayar	        			= mysqli_real_escape_string($db,$_POST['ppn_dibayar']);
	$ppn_ditanggung	      				= mysqli_real_escape_string($db,$_POST['ppn_ditanggung']);
	$ppn_ditunda	      				= mysqli_real_escape_string($db,$_POST['ppn_ditunda']);
	$ppn_tidak	                        = mysqli_real_escape_string($db,$_POST['ppn_tidak']);
	$ppn_bebas	                		= mysqli_real_escape_string($db,$_POST['ppn_bebas']);
	$ppn_lunas   	            		= mysqli_real_escape_string($db,$_POST['ppn_lunas']);

	$ppnbm_dibayar	        			= mysqli_real_escape_string($db,$_POST['ppnbm_dibayar']);
	$ppnbm_ditanggung	      			= mysqli_real_escape_string($db,$_POST['ppnbm_ditanggung']);
	$ppnbm_ditunda	      				= mysqli_real_escape_string($db,$_POST['ppnbm_ditunda']);
	$ppnbm_tidak	                    = mysqli_real_escape_string($db,$_POST['ppnbm_tidak']);
	$ppnbm_bebas	              		= mysqli_real_escape_string($db,$_POST['ppnbm_bebas']);
	$ppnbm_lunas   	            		= mysqli_real_escape_string($db,$_POST['ppnbm_lunas']);


	$pph_dibayar	        			= mysqli_real_escape_string($db,$_POST['pph_dibayar']);
	$pph_ditanggung	      				= mysqli_real_escape_string($db,$_POST['pph_ditanggung']);
	$pph_ditunda	      				= mysqli_real_escape_string($db,$_POST['pph_ditunda']);
	$pph_tidak	                        = mysqli_real_escape_string($db,$_POST['pph_tidak']);
	$pph_bebas	                		= mysqli_real_escape_string($db,$_POST['pph_bebas']);
	$pph_lunas   	            		= mysqli_real_escape_string($db,$_POST['pph_lunas']);

	$total_dibayar	        			= mysqli_real_escape_string($db,$_POST['total_dibayar']);
	$total_ditanggung	      			= mysqli_real_escape_string($db,$_POST['total_ditanggung']);
	$total_ditunda	      				= mysqli_real_escape_string($db,$_POST['total_ditunda']);
	$total_tidak	                    = mysqli_real_escape_string($db,$_POST['total_tidak']);
	$total_bebas	              		= mysqli_real_escape_string($db,$_POST['total_bebas']);
	$total_lunas   	            		= mysqli_real_escape_string($db,$_POST['total_lunas']);

    $operator	                        = mysqli_real_escape_string($db,$_POST['operator']);
    date_default_timezone_set('Asia/Jakarta'); 
	$tanggal_entry  = date("Y-m-d H:i:s");

	$sql = "UPDATE tb_suratmasuk set 
		bm_dibayar				= '$bm_dibayar',
		bm_ditanggung			= '$bm_ditanggung', 
		bm_ditunda				= '$bm_ditunda', 
		bm_tidak				= '$bm_tidak', 
		bm_bebas				= '$bm_bebas', 
		bm_lunas				= '$bm_lunas', 

		bmkite_dibayar			= '$bmkite_dibayar',
		bmkite_ditanggung		= '$bmkite_ditanggung', 
		bmkite_ditunda			= '$bmkite_ditunda', 
		bmkite_tidak			= '$bmkite_tidak', 
		bmkite_bebas			= '$bmkite_bebas', 
		bmkite_lunas			= '$bmkite_lunas', 

		bmt_dibayar				= '$bmt_dibayar',
		bmt_ditanggung			= '$bmt_ditanggung', 
		bmt_ditunda				= '$bmt_ditunda', 
		bmt_tidak				= '$bmt_tidak', 
		bmt_bebas				= '$bmt_bebas', 
		bmt_lunas				= '$bmt_lunas',

		cukai_dibayar			= '$cukai_dibayar',
		cukai_ditanggung		= '$cukai_ditanggung', 
		cukai_ditunda			= '$cukai_ditunda', 
		cukai_tidak				= '$cukai_tidak', 
		cukai_bebas				= '$cukai_bebas', 
		cukai_lunas				= '$cukai_lunas', 

		ppn_dibayar				= '$ppn_dibayar',
		ppn_ditanggung			= '$ppn_ditanggung', 
		ppn_ditunda				= '$ppn_ditunda', 
		ppn_tidak				= '$ppn_tidak', 
		ppn_bebas				= '$ppn_bebas', 
		ppn_lunas				= '$ppn_lunas',

		ppnbm_dibayar			= '$ppnbm_dibayar',
		ppnbm_ditanggung		= '$ppnbm_ditanggung', 
		ppnbm_ditunda			= '$ppnbm_ditunda', 
		ppnbm_tidak				= '$ppnbm_tidak', 
		ppnbm_bebas				= '$ppnbm_bebas', 
		ppnbm_lunas				= '$ppnbm_lunas',

		pph_dibayar				= '$pph_dibayar',
		pph_ditanggung			= '$pph_ditanggung', 
		pph_ditunda				= '$pph_ditunda', 
		pph_tidak				= '$pph_tidak', 
		pph_bebas				= '$pph_bebas', 
		pph_lunas				= '$pph_lunas',

		total_dibayar			= '$total_dibayar',
		total_ditanggung		= '$total_ditanggung', 
		total_ditunda			= '$total_ditunda', 
		total_tidak				= '$total_tidak', 
		total_bebas				= '$total_bebas', 
		total_lunas				= '$total_lunas',
		
		operator            	= '$operator',
		tanggal_entry           = '$tanggal_entry'
				
		where id_suratmasuk     = $id";
		
	$execute = mysqli_query($db, $sql);			
						
	 	echo "<!DOCTYPE html>
				<Center>
				<h2><br>Update Success<br>

					Loading...</h2>
			</center>
		
		  <meta http-equiv='refresh' content='2;url=../datasuratmasuk.php'>
	  </html>";;
		
		
       
	?>
	