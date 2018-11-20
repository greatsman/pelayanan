<?php  
	class Pelanggan {
		private $mysqli;

		function __construct($conn) {
			$this->mysqli = $conn;
		}

		public function tampil($no_identitas = null) {
			$db = $this->mysqli->conn;
			$sql = "SELECT * FROM pelanggan";
			if($no_identitas != null){
				$sql .= " WHERE no_identitas = $no_identitas";
			}
			$query = $db->query($sql) or die ($db->error);
			return $query;
		}

		public function tambah($no_identitas, $nama, $alamat, $no_hp){
			$db = $this->mysqli->conn;
			$db->query ("INSERT INTO pelanggan VALUES ('$no_identitas','$nama', '$alamat', '$no_hp')") or die ($db->error);
		}

		public function edit($sql){
			$db = $this->mysqli->conn;
			$db->query($sql) or die ($db->error);
		}

		public function hapus ($no_identitas){
			$db = $this->mysqli->conn;
			$db->query ("DELETE FROM pelanggan WHERE no_identitas = '$no_identitas' ") or die ($db->error);
		}

		function __destruct(){
			$db = $this->mysqli->conn;
			$db->close();
		}

	}

 ?>

