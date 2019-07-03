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

		function base_url(){
			return 'http://localhost/crud_oop/';
		}

		// query
		function getMahasiswa()
		{
			try {
				$stmt = $this->con->prepare("SELECT * FROM kmps_mahasiswa");
				$stmt->execute();
				return $stmt;
			} catch (Exception $e) {
				return $e->getMessage;
			}
		}
	}


?>