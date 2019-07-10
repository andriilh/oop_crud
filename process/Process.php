<?php
include_once "../includes/DbOperation.php";
$db = new DbOperation();
if (isset($_GET['kode'])) {
	switch ($_GET['kode']) {
		case 'insert':
			$nama = $_POST['nama'];
			$email = $_POST['email'];
			$tgl_lahir = $_POST['tgl_lahir'];
			$kelas = $_POST['kelas'];
			$add = $db->insertMahasiswa($nama, $email, $tgl_lahir, $kelas);
			if ($add) {
				header("location:" . $db->base_url());
			}
			break;

		case 'update':
			$id = $_SESSION['id'];
			$nama = $_POST['nama'];
			$email = $_POST['email'];
			$tgl_lahir = $_POST['tgl_lahir'];
			$kelas = $_POST['kelas'];
			$edit = $db->update_mahasiswa($nama, $email, $tgl_lahir, $kelas, $id);
			if ($edit) {
				header("location:" . $db->base_url());
			}
			break;

		case 'delete':
			$id = $_GET['id'];
			$delete = $db->delete_mahasiswa($id);
			if ($delete) {
				header("location:" . $db->base_url());
			}
			break;
	}
} else {
	header("location:" . $db->base_url());
}
