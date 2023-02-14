<?php

include "../koneksi.php";

$Kode_Kurikulum	= $_GET["Kode_Kurikulum"];

$querykurikulum = mysqli_query($konek, "SELECT * FROM kurikulum WHERE Kode_Kurikulum='$Kode_Kurikulum'");
if($querykurikulum == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($kurikulum = mysqli_fetch_array($querykurikulum)){

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
<!-- Modal Popup Kurikuum -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Kurikulum</h4>
					</div>
					<div class="modal-body">
						<form action="jenjang_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Kode Kurikulum</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-graduation-cap"></i>
										</div>
										<input name="Kode_Kurikulum" type="text" class="form-control" value="<?php echo $kurikulum["Kode_Kurikulum"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Kurikulum</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-graduation-cap"></i>
										</div>
										<input name="Kurikulum" type="text" class="form-control" value="<?php echo $kurikulum["Kurikulum"]; ?>"/>
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