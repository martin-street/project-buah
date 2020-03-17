<?php

include "../koneksi.php";

$id	= $_GET["id"];

$queryuser = mysqli_query($konek, "SELECT * FROM admin WHERE id_admin='$id'");
if($queryuser == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($user = mysqli_fetch_array($queryuser)){

?>
	
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- page script -->
    
<!-- Modal Popup User -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Form Edit Pengguna</h4>
					</div>
					<div class="modal-body">
						<form action="user_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
						<input name="id" type="hidden" class="form-control" value="<?php echo $user["id_admin"]; ?>"/>
						
							<div class="form-group">
								<label>Nama</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="nama" type="text" class="form-control" value="<?php echo $user["nama"]; ?>" />
									</div>
							</div>
							<div class="form-group">
								<label>Username</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="username" type="text" class="form-control" value="<?php echo $user["username"]; ?>" />
									</div>
							</div>
							<div class="form-group">
								<label>Password</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-unlock"></i>
										</div>
										<input name="password" type="text" class="form-control" placeholder="********"/>
									</div>
							</div>
							<div class="form-group">
								<label>Jabatan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-arrow-circle-o-right"></i>
										</div>
										<select name="jabatan" class="form-control">
											<option value="<?php echo $user["id_jabatan"]; ?>" selected>
											<?php
												if ($user["id_jabatan"]=="1"){
													echo "Admin";
												}
												else if($user["id_jabatan"]=="2"){
													echo "Admin Gudang";
												}
											?>
											</option>
											<?php
												if ($user["id_jabatan"]=="1"){
													echo "<option value='1'>Admin</option>";
												}
												else if($user["id_jabatan"]=="2"){
													echo "<option value='2'>Admin Gudang</option>";
												}
											?>
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
			
			
<?php
			}

?>