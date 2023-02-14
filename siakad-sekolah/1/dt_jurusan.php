				<thead>
					<tr>
						<th>Kode Jurusan</th>
						<th>Jurusan</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<!-- <?php
						$queryjurusan = mysqli_query ($konek, "SELECT Kode_Jurusan_Sws, Nama_Jurusan FROM jurusan");
						if($queryjurusan == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($jrs = mysqli_fetch_array ($queryjurusan)){
							
							echo "
								<tr>
									<td>$jrs[Kode_Jurusan_Sws]</td>
									<td>$jrs[Nama_Jurusan]</td>
									<td>
										<a href='#' class='open_modal' id='$jrs[Kode_Jurusan_Sws]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"jurusan_delete.php?Kode_Jurusan_Sws=$jrs[Kode_Jurusan_Sws]\")'>Delete</a>
									</td>
								</tr>";
						}
					?> -->
				</tbody>