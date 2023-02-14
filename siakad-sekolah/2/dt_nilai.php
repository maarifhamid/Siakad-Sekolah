				<thead>
					<tr>
						<th>Siswa</th>
						<th>Mata Pelajaran</th>
						<th>Semester</th>
						<th>Nilai</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querynilai = mysqli_query ($konek, "SELECT Id_Nilai, NIS_Nilai, Kode_Mapel_Nilai, semester, Nilai, NIS, Nama_Siswa, Kode_Mapel, Nama_Mapel FROM nilai
										INNER JOIN siswa ON NIS_Nilai=NIS
										INNER JOIN mapel ON Kode_Mapel_Nilai=Kode_Mapel");
						if($querynilai == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($nilai = mysqli_fetch_array ($querynilai)){
							
							echo "
								<tr>
									<td>$nilai[Nama_Siswa]</td>
									<td>$nilai[Mata_Pelajaran]</td>
									<td>$nilai[semester]</td>
									<td>$nilai[Nilai]</td>
									<td>
										<a href='#' class='open_modal' id='$nilai[Id_Nilai]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"nilai_delete.php?Id_Nilai=$nilai[Id_Nilai]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>