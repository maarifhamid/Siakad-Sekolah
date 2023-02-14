<?php

include "../koneksi.php";

$NIS 	= $_GET["NIS"];

$querysws = mysqli_query($konek, "SELECT * FROM siswa WHERE NIS='$NIS'");
if($querysws == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($sws = mysqli_fetch_array($querysws)){

?>
	
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- page script -->
    <script>
      $(function () {	
		// Daterange Picker
		  $('#Tanggal_Lahir2').daterangepicker({
			  singleDatePicker: true,
			  showDropdowns: true,
			  format: 'YYYY-MM-DD'
		  });
      });
    </script>
<!-- Modal Popup Siswa -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Siswa</h4>
					</div>
					<div class="modal-body">
						<form action="mahasiswa_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>NIS</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="NIS" type="text" class="form-control" value="<?php echo $sws["NIS"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Siswa</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="Nama_Siswa" type="text" class="form-control" value="<?php echo $sws["Nama_Siswa"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Tanggal Lahir</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input id="Tanggal_Lahir2" name="Tanggal_Lahir" type="text" class="form-control" value="<?php echo $sws["Tanggal_Lahir"]; ?>">
									</div>
							</div>
							<div class="form-group">
								<label>Jenis Kelamin</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user-o"></i>
										</div>
										<select name="JK" class="form-control">
											<option value="<?php echo $sws["JK"]; ?>" selected>
											<?php
												if ($sws["JK"]=="L"){
													echo "Laki - laki";
												}
												else{
													echo "Perempuan";
												}
											?>
											</option>
											<?php
												if ($sws["JK"]=="L"){
													echo "<option value='P'>Perempuan</option>";
												}
												else{
													echo "<option value='L'>Laki - laki</option>";
												}
											?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>No. Telp</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-phone"></i>
										</div>
										<input name="No_Telp" type="text" class="form-control" value="<?php echo $sws["No_Telp"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="Alamat" type="text" class="form-control" value="<?php echo $sws["Alamat"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Jurusan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-graduation-cap"></i>
										</div>
										<select name="Nama_Jurusan" class="form-control">
										<?php
										
											$queryswsjrs=mysqli_query($konek, "SELECT Kode_Jurusan_Sws, Nama_Jurusan FROM siswa INNER JOIN jurusan ON Kode_Jurusan_Sws=Kode_Jurusan WHERE NIS='$NIS'");
											if($queryswsjrs==false){
												die("Terdapat Kesalahan : ".mysqli_error($konek));
											}
											while($swsjrs=mysqli_fetch_array($queryswsjrs)){
												echo "<option value=$swsjrs[Kode_Jurusan_Sws] selected>$swsjrs[Nama_Jurusan]</option>";
											}
										
											$queryjrs = mysqli_query($konek, "SELECT * FROM jurusan");
											if($queryjrs==false){
												die("Terdapat Kesalahan : ". mysqli_error($konek));
											}
											while($jrs=mysqli_fetch_array($queryjrs)){
												if($jrs["Kode_Jurusan"]!=$sws["Kode_Jurusan_Sws"]){
													echo "<option value=$jrs[Kode_Jurusan]>$jrs[Nama_Jurusan]</option>";
												}
											}
											
										?>
										</select>
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Save
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			
<?php
			}

?>