<?php

session_start();
include "../koneksi.php";
include "auth_user.php";
?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>SIAKAD SEKOLAH</title>
	<!-- Library CSS -->
	<?php
		include "bundle_css.php";
	?>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php
        include 'content_header.php';
       ?>
      <!-- Left side column. contains the logo and sidebar -->
      
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
		<ul class="sidebar-menu">
		   <!-- Sidebar user panel -->
		   <div class="user-panel">
				<div class="pull-left image">
					<img src="../aset/foto/<?php echo "".$_SESSION["Foto"]."" ?>" class="img-circle"  alt="Foto">
					<p></p>
				</div>
				
				<div class="pull-left info">
					<p><?php echo "".$_SESSION["Username"]."" ?></p>
					<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
				</div>
          </div>
		  <!-- sidebar menu: : style can be found in sidebar.less -->
		  
              <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU UTAMA</li>
			  <li><a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>   
			        <li class="treeview">
						<a href="#"><i class="fa fa-calendar"></i> <span>Kelola Data Master</span><i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
							<li><a href="dosen.php"><i class="fa fa-user"></i><span>Guru</span></a></li>
							<li><a href="mahasiswa.php"><i class="fa fa-users"></i><span>Siswa</span></a></li>
							<li><a href="ruangan.php"><i class="fa fa-columns"></i><span>Ruangan</span></a></li>
							<li><a href="matakuliah.php"><i class="fa fa-book"></i><span>Mata Pelajaran</span></a></li>
							<li><a href="jurusan.php"><i class="fa fa-university"></i><span>Jurusan</span></a></li>
							<li><a href="jenjang.php"><i class="fa fa-graduation-cap"></i><span>Kurikulum</span></a></li>
							<li><a href="jadwal.php"><i class="fa fa-calendar"></i><span>Jadwal</span></a></li>
						</ul>
					</li>
					
					<li class="treeview">
						<a href="#"><i class="fa fa-calendar"></i> <span>Kelola Data User</span><i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
							<li><a href="user.php"><i class="fa fa-user-circle-o"></i><span>User</span></a></li>
						</ul>
					</li>

			        <li class="active"><a href="about.php"><i class="fa fa-info-circle"></i><span>Tentang Aplikasi</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Tentang Aplikasi
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-info-circle"></i> Tentang Aplikasi</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
				  <h1><center><b>SIAKAD SEKOLAH</b></center></h1>
          <center><img src="../aset/foto/sekolah.jpg" width="445" height="225" /></center>
          <center><h2><b>SIAKAD Developer Copyright &copy;  <?php echo date ('Y') ?></b></h2></center>
          <center><h4><b>Made with <strong><i class="fa fa-code"></i></strong> and <i class="fa fa-heart"></i> by Kelompok SIAKAD</b></h4></center>
                </div><!-- /.box-header -->
                <div class="box-body">
					
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
		
    </div><!-- /.content-wrapper -->
	<?php
		include	"content_footer.php";
	?>
    </div><!-- ./wrapper -->
	<!-- Library Scripts -->
	<?php
		include "bundle_script.php";
	?>
  </body>
</html>
