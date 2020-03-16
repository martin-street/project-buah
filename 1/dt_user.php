				<thead>
					<tr>
						<th>ID</th>
						<th>NIP</th>
						<th>Nama</th>
						<th>Username</th>
						<th>Hak Akses</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$queryuser = mysqli_query ($konek, "SELECT * FROM pengguna INNER JOIN usergroup ON Id_User_Akses=Id_Usergroup");
						if($queryuser == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($user = mysqli_fetch_array ($queryuser)){
							
							echo "
								<tr>
									<td>$user[id_pengguna]</td>
									<td>$user[nip]</td>
									<td>$user[nama_pengguna]</td>
									<td>$user[username]</td>
									<td>$user[Nama_Usergroup]</td>
									<td>
										<a href='#' onclick='edit_form(this, ".'"user_modal_edit"'.", ".'"id"'.", ".'"#ModalEditUser"'.")' id='$user[id_pengguna]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"user_delete.php?id=$user[id_pengguna]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>