				<thead>
					<tr>
						<th>Nama</th>
						<th>Username</th>
						<th>Jabatan</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$queryuser = mysqli_query ($konek, "SELECT * FROM admin INNER JOIN jabatan ON admin.id_jabatan=jabatan.id_jabatan");
						if($queryuser == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($user = mysqli_fetch_array ($queryuser)){
							
							echo "
								<tr>
									<td>$user[nama]</td>
									<td>$user[username]</td>
									<td>$user[nama_jabatan]</td>
									<td>
										<a href='#' onclick='edit_form(this, ".'"user_modal_edit"'.", ".'"id"'.", ".'"#ModalEditUser"'.")' id='$user[id_admin]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"user_delete.php?id=$user[id_admin]\")'>Hapus</a>
									</td>
								</tr>";
						}
					?>
				</tbody>