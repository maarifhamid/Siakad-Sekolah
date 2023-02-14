				<thead>
					<tr>
						<th>Mata Pelajaran</th>
						<th>Guru</th>
						<th>Ruangan</th>
						<th>Jurusan</th>
						<th>Hari</th>
						<th>Jam</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$queryjadwal = mysqli_query ($konek, "SELECT Id_Jadwal, Kode_Mapel_Jadwal, NIP_Jadwal, Kode_Kelas_Jadwal, Hari,
							Jam, Kode_Mapel, Nama_Mapel, NIP, Nama_Guru, Kode_Kelas, Nama_Kelas, Kode_Jurusan_Sws, Nama_Jurusan FROM jadwal 
							INNER JOIN mapel ON Kode_Mapel_Jadwal=Kode_Mapel
							INNER JOIN guru ON NIP_Jadwal=NIP
							INNER JOIN kelas ON Kode_Kelas_Jadwal=Kode_Kelas
							INNER JOIN jurusan ON Kode_Jurusan_Jadwal=Kode_Jurusan_Sws WHERE NIP_Jadwal='$_SESSION[Username]'");
						if($queryjadwal == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($jadwal = mysqli_fetch_array ($queryjadwal)){
							
							echo "
								<tr>
									<td>$jadwal[Mata_Pelajaran]</td>
									<td>$jadwal[Nama_Guru]</td>
									<td>$jadwal[Nama_Kelas]</td>
									<td>$jadwal[Nama_Jurusan]</td>
									<td>$jadwal[Hari]</td>
									<td>$jadwal[Waktu]</td>
								</tr>";
						}
					?>
				</tbody>