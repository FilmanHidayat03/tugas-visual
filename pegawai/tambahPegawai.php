<?php
 if(isset($_POST['Submit'])) {
 	$nik			= $_POST['nik'];
 	$nama			= $_POST['nama'];
 	$posisi			= $_POST['posisi'];
 	$gaji			= $_POST['gaji'];

 	// include database koneksi file
 	include"koneksi.php";

 	// Insert user data into table
 	$result = mysqli_query($connect, "INSERT INTO tbpegawai(nik, nama, posisi, gaji) VALUES('$nik','$nama','$posisi','$gaji')");

 	// Show message user data into table
 	header("location:getPegawai.php");
}
?>


<?php include"header.php" ?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Tambah Data Pegawai</h3>
		</div>
		<div class="panel-body">
			<form method="post" action="tambahPegawai.php" class="form-horizontal">
				<div class="form-group">
					<label for="npm" class="col-sm-2 control-label">NIK</label>
					<div class="col-sm-10">
						<input type="text" maxlength="16" class="form-control" name="nik" placeholder="Masukkan NIK...">
					</div>
				</div>

				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap...">
					</div>
				</div>

				<div class="form-group">
					<label for="posisi" class="col-sm-2 control-label">Posisi</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="posisi" placeholder="Masukkan Posisi...">
					</div>
				</div>

				<div class="form-group">
					<label for="gaji" class="col-sm-2 control-label">Gaji</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="gaji" placeholder="Masukkan Gaji...">
					</div>
				</div>

				<div class="from-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input type="submit" name="Submit" class="btn btn-primary" value="Simpan">
						<input type="reset" name="reset" class="btn btn-warning" value="Reset">
						<body background="img/St.jpg"></body>
					</div>
				</div>
			</form>
		</div>
	</div>
<?php include"footer.php" ?>