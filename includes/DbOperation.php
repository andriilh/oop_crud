<?php

/**
 * 
 */
class DbOperation
{
	private $con;

	function __construct()
	{
		require_once "DbConnect.php";
		$db = new DbConnect();
		$this->con = $db->connect();
	}

	function base_url()
	{
		return 'http://localhost/crud_oop/';
	}

	// query
	function getMahasiswa()
	{
		try {
			$stmt = $this->con->prepare('SELECT * FROM kmps_mahasiswa');
			$stmt->execute();
			return $stmt;
		} catch (Exception $e) {
			return $e->getMessage;
		}
	}

	function insertMahasiswa($nama, $email, $tgl_lahir, $kelas)
	{
		try {
			$stmt = $this->con->prepare("INSERT INTO kmps_mahasiswa(nama,email,tgl_lahir,kelas) VALUES (?,?,?,?)");
			$stmt->bind_param('ssss', $nama, $email, $tgl_lahir, $kelas);
			$stmt->execute();
			$stmt->store_result();
			return true;
		} catch (Exception $e) {
			return false;
		}
	}

	function editMahasiswa($nama, $email, $tgl_lahir, $kelas)
	{
		try {
			$stmt = $this->con->prepare("INSERT INTO kmps_mahasiswa(nama,email,tgl_lahir,kelas) VALUES (?,?,?,?)");
			$stmt->bind_param('ssss', $nama, $email, $tgl_lahir, $kelas);
			$stmt->execute();
			$stmt->store_result();
			return true;
		} catch (Exception $e) {
			return false;
		}
	}

	function getMahasiswa_byId($id)
	{
		try {
			$stmt = $this->con->prepare("SELECT * FROM kmps_mahasiswa WHERE id = ?");
			$stmt->bind_param('s', $id);
			$stmt->execute();
			$stmt->store_result();
			return true;
		} catch (Exception $e) {
			return false;
		}
	}
}
