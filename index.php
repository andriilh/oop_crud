<?php include 'header.php'; ?>
<section>
	<style type="text/css">
		thead th {
			text-align: center;
		}
	</style>
	<div class="container">
		<a href=<?php echo $db->base_url() . 'insert.php' ?> class="btn btn-primary" style="margin-bottom: 10px"> + Tambah Data</a>
		<table class="table table-bordered table-stripped table-hover">
			<thead>
				<tr>
					<th width="1%">No</th>
					<th width="25%">Nama</th>
					<th width="25%">Email</th>
					<th width="15%">Tanggal Lahir</th>
					<th width="10%">Kelas</th>
					<th width="15%" colspan="2">Aksi</th>

				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				$mhs = $db->getMahasiswa()->get_result();
				while ($data_mhs = $mhs->fetch_object()) {

					?>

					<tr>
						<td align="center" style="vertical-align: middle;"><?= $no; ?></td>
						<td style="vertical-align: middle;"><?= $data_mhs->nama; ?></td>
						<td style="vertical-align: middle;"><?= $data_mhs->email; ?></td>
						<td style="vertical-align: middle;"><?= $data_mhs->tgl_lahir; ?></td>
						<td style="vertical-align: middle;"><?= $data_mhs->kelas; ?></td>
						<td style="vertical-align: middle;"><a href="update.php" class="btn btn-success btn-sm">Edit</a></td>
						<td style="vertical-align: middle;"><a href="#" class="btn btn-danger btn-sm">Hapus</a></td>
					</tr>

					<?php
					$no++;
				}
				?>

			</tbody>
		</table>
	</div>
</section>
<?php include 'footer.php'; ?>