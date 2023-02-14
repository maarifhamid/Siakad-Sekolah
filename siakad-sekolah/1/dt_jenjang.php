				<thead>
					<tr>
						<th>Kode Kurikulum</th>
						<th>Kurikulum</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querykurikulum = mysqli_query ($konek, "SELECT * FROM kurikulum");
						if($querykurikulum == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($kurikulum = mysqli_fetch_array ($querykurikulum)){
							
							echo "
								<tr>
									<td>$kurikulum[Kode_Kurikulum]</td>
									<td>$kurikulum[Kurikulum]</td>
									<td>
										<a href='#' class='open_modal' id='$kurikulum[Kode_Kurikulum]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"jenjang_delete.php?Kode_Kurikulum=$kurikulum[Kode_Kurikulum]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>