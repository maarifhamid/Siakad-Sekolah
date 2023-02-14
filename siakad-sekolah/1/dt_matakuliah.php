				<thead>
					<tr>
						<th>Kode Mata Pelajaran</th>
						<th>Nama Mata Pelajaran</th>
						<th>Waktu/Jam</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querymapel = mysqli_query ($konek, "SELECT * FROM mapel");
						if($querymapel == false){
							die ("Terdapat Kesalahan : ". mysqli_error($konek));
						}
						while($mapel = mysqli_fetch_array($querymapel)){
							echo "
								<tr>
									<td>$mapel[Kode_Mapel]</td>
									<td>$mapel[Nama_Mapel]</td>
									<td>$mapel[Jam]</td>
									<td>
										<a href='#' class='open_modal' id='$mapel[Kode_Mapel]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"matakuliah_delete.php?Kode_Mapel=$mapel[Kode_Mapel]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>