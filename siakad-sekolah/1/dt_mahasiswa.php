				<thead>
					<tr>
						<th>NIS</th>
						<th>Siswa</th>
						<th>Kelas</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>Telpon</th>
						<th>Jurusan</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querysws = mysqli_query ($konek, "SELECT NIS, Nama_Siswa, Kelas, DATE_FORMAT(Tanggal_Lahir, '%d-%m-%Y')as Tanggal_Lahir, JK, No_Telp, Alamat , Nama_Jurusan FROM siswa");
						if($querysws == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
							
						while ($sws = mysqli_fetch_array ($querysws)){
							
							echo "
								<tr>
									<td>$sws[NIS]</td>
									<td>$sws[Nama_Siswa]</td>
									<td>$sws[Kelas]</td>
									<td>$sws[Tanggal_Lahir]</td>
									<td>
								";
									if($sws["JK"] == "L"){
										echo "Laki - laki";
									}
									else{
										echo "Perempuan";
									}
							echo "
									</td>
									<td>$sws[No_Telp]</td>
									<td>$sws[Alamat]</td>
									<td>$sws[Nama_Jurusan]</td>
									<td>
										<a href='#' class='open_modal' id='$sws[NIS]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"mahasiswa_delete.php?NIS=$sws[NIS]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>