<?php include 'header.php'; 

?>
<section>
	<h2 style="text-align: center;">Edit Data Mahasiswa</h2>
	<div class="container">
		<form class="form" action="" method="post">
			<div class="form-group">
				<label for="nama">Nama :</label>
				<input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Mahasiswa" value="" required>
			</div>
			<div class="form-group">
				<label for="email">Email :</label>
				<input class="form-control" type="text" name="email" id="email" placeholder="Alamat Email" value="" required>
			</div>
			<div class="form-group">
				<label for="tgl_lahir">Tanggal Lahir :</label>
				<input class="form-control" type="date" name="tgl_lahir" id="tgl_lahir" value="" required>
			</div>
			<div class="form-group">
				<label for="kelas">Kelas :</label>
				<select class="form-control" id="kelas" name="kelas" required>
					<option value=""></option>
					<option value="TIF A">TIF A</option>
					<option value="TIF B">TIF B</option>
					<option value="TIF C">TIF C</option>
				</select>
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="Submit" class="btn btn-primary" style="width: 100px">
				<a href="" class="btn btn-success" style="width: 100px">Kembali</a>
			</div>
		</form>
	</div>
</section>
<?php include 'footer.php'; ?>