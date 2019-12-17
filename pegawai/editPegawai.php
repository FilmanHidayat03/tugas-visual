<?php
	// include database koneksi file
	include"koneksi.php";

	// Check if form is submitted for user update, then redirect to homepage after update
	if(isset($_POST['update']))
	{
		$id 			= $_POST['id'];
		$nik			= $_POST['nik'];
		$nama			= $_POST['nama'];
		$posisi			= $_POST['posisi'];
		$gaji			= $_POST['gaji'];

		// update user data
		$result = mysqli_query($connect, "UPDATE  tbpegawai SET nik='$nik', nama='$nama', posisi='$posisi', gaji='$gaji' WHERE id=$id");

		// Redirect to homepage to display updated user in list
		header("location:getPegawai.php");
	}	
?>

<?php 
	// Display selected user data based on id
	// Getting id from url
	$id = $_GET['id'];

	// Fetech user data based on id
	$result = mysqli_query($connect, "SELECT * FROM tbpegawai WHERE id=$id");

	while($data = mysqli_fetch_array($result))
	{
		$nik			= $data['nik'];
		$nama			= $data['nama'];
		$posisi			= $data['posisi'];
		$gaji			= $data['gaji'];
	}	
?>
<?php include"header.php" ?>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Edit Data Mahasiswa</h3>
	</div>
	<div class="panel-body">
		<form method="post" action="editPegawai.php" class="form-horinzontal">
			<div class="form-group">
				<label for="nik" class="col-sm-2 control-label">NIK</label>
				<div class="col-sm-10">
					<input type="text" maxlength="16" class="form-control" name="nik" placeholder="Masukkan NIK..." value="<?php echo $nik;?>">
				</div>
			</div>	
			
			<div class="form-group">
				<label for="nama" class="col-sm-2 control-label">Nama</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama..." value="<?php echo $nama;?>">
				</div>
			</div>	

			<div class="form-group">
				<label for="posisi" class="col-sm-2 control-label">Posisi</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="posisi" placeholder="Masukkan Posisi..." value="<?php echo $posisi;?>">
				</div>
			</div>	

			<div class="form-group">
				<label for="gaji" class="col-sm-2 control-label">Gaji</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="gaji" placeholder="Masukkan Gaji..." value="<?php echo $gaji;?>">
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
					<!-- <td><input type="submit" name="update" value="Update"</td> -->
					<input type="submit" name="update" class="btn btn-primary" value="Update">
					<input type="reset" name="reset" class="btn btn-warning" value="Reset">
					<body background="img/St.jpg"></body>
				</div>
			</div>
		</form>
	</div>
</div>

<?php include"footer.php" ?>						