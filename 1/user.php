<?php

session_start();
include "../koneksi.php";
include "auth_user.php";

?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>SINAR</title>
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
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <p></p>
            </div>
          </div><!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
			<li class="header"><h4><b><center>Menu Panel</center></b></h4></li>
              <li ><a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
			        <li><a href="murid.php"><i class="fa fa-user"></i><span>Murid</span></a></li>
					<li class="active"><a href="user.php"><i class="fa fa-user-circle-o"></i><span>Pengguna</span></a></li>
					<li><a href="walikelas.php"><i class="fa fa-cube"></i><span>Wali Kelas</span></a></li>
					<li><a href="guru.php"><i class="fa fa-graduation-cap"></i><span>Guru</span></a></li>
					<li><a href="mapel.php"><i class="fa fa-asterisk"></i><span>Mata Pelajaran</span></a></li>
					<li><a href="nilaiharian.php"><i class="fa fa-list-ul"></i><span>Nilai Harian</span></a></li>
					<li><a href="nilaiujian.php"><i class="fa fa-list-ol"></i><span>Nilai Ujian</span></a></li>
			</ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Pengguna
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user-circle-o"></i> Pengguna</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">

                </div><!-- /.box-header -->
                <div class="box-body">
				<a href="#"><button class="btn btn-success" type="button" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Tambah Pengguna</button></a>
                  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
						<?php
							include "dt_user.php";
						?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
		
		<!-- Modal Popup Dosen -->
		<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Form Tambah Pengguna</h4>
						<br />
					</div>
					<div class="modal-body">
						<form action="user_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>ID</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="id" type="text" class="form-control" placeholder="ID Pengguna"/>
									</div>
							</div>
							<div class="form-group">
								<label>NIP</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="nip" type="text" class="form-control" placeholder="Nomor Induk Pegawai"/>
									</div>
							</div>
							<div class="form-group">
								<label>Nama</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="nama" type="text" class="form-control" placeholder="Nama Pengguna"/>
									</div>
							</div>
							<div class="form-group">
								<label>Username</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="username" type="text" class="form-control" placeholder="Username Pengguna"/>
									</div>
							</div>
							<div class="form-group">
								<label>Password</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-unlock"></i>
										</div>
										<input name="password" type="text" class="form-control" placeholder="Password Pengguna"/>
									</div>
							</div>
							<div class="form-group">
								<label>Hak Akses</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-arrow-circle-o-right"></i>
										</div>
										<select name="akses" class="form-control">
											<option selected>Pilih Hak Akses Pengguna</option>
											<option value="1">Administrator</option>
											<option value="2">Wali Kelas</option>
											<option value="2">Guru</option>
										</select>
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Simpan
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Batal
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal Popup Dosen Edit -->
		<div id="ModalEditUser" class="modal fade" tabindex="-1" role="dialog"></div>
				
		<!-- Modal Popup untuk delete--> 
		<div class="modal fade" id="modal_delete">
			<div class="modal-dialog">
				<div class="modal-content" style="margin-top:100px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" style="text-align:center;">Yakin ingin menghapus informasi ini ?</h4>
					</div>    
					<div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
						<a href="#" class="btn btn-danger" id="delete_link">Hapus aja</a>
						<button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
					</div>
				</div>
			</div>
		</div>
		
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