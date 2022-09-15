<?php 
	 include '../koneksi/koneksi.php';
			$sql  		= "SELECT * FROM tb_admin where id_admin='".$_SESSION['id']."'";                        
			$query  	= mysqli_query($db, $sql);
			$data 		= mysqli_fetch_array($query);
?>
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" >
              <a href="index.php" class="site_title"><span>Dashboard</span></a>
            </div>

            <div class="clearfix"></div>

            

            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="glyphicon glyphicon-user"></i> &emsp; Akun </a>
                    <ul class="nav child_menu">
                      <li><a href="profile.php"><i class="fa"></i>Profil</a></li>
                      <li><a href="../koneksi/proses_logout.php"><i class="fa"></i>Logout</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>
