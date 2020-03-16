<?php

include "../koneksi.php";

$id	= $_GET["id"];

$queryuser = mysqli_query($konek, "SELECT * FROM pengguna WHERE id_pengguna='$id'");
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
						<input name="id" type="hidden" class="form-control" value="<?php echo $user["id_pengguna"]; ?>"/>
							<div class="form-group">
								<label>NIP</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="nip" type="text" class="form-control" value="<?php echo $user["nip"]; ?>" />
									</div>
							</div>
							<div class="form-group">
								<label>Nama</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="nama" type="text" class="form-control" value="<?php echo $user["nama_pengguna"]; ?>" />
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
										<input name="password" type="text" class="form-control" placeholder="*****"/>
									</div>
							</div>
							<div class="form-group">
								<label>Hak Akses</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-arrow-circle-o-right"></i>
										</div>
										<select name="akses" class="form-control">
											<option value="<?php echo $user["Id_User_Akses"]; ?>" selected>
											<?php
												if ($user["Id_User_Akses"]=="1"){
													echo "Administrator";
												}
												else if($user["Id_User_Akses"]=="2"){
													echo "Wali Kelas";
												} else {
													echo "Guru";
												}
											?>
											</option>
											<?php
												if ($user["Id_User_Akses"]=="1"){
													echo "<option value='1'>Administrator</option>";
												}
												else if($user["Id_User_Akses"]=="2"){
													echo "<option value='2'>Wali Kelas</option>";
												} else {
													echo "<option value='4'>Guru</option>";
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