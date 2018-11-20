<?php  
	class Daftar {
		private $mysqli;

		function __construct($conn) {
			$this->mysqli = $conn;
		}

		public function tampil($id = null) {
			$db = $this->mysqli->conn;
			$sql = "SELECT * FROM daftar";
			if($id != null){
				$sql .= " WHERE id = $id";
			}
			$query = $db->query($sql) or die ($db->error);
			return $query;
		}

		public function tambah($nama, $harga){
			$db = $this->mysqli->conn;
			$db->query ("INSERT INTO daftar VALUES ('', '$nama', '$harga')") or die ($db->error);
		}

		public function edit($sql){
			$db = $this->mysqli->conn;
			$db->query($sql) or die ($db->error);
		}

		public function hapus ($id){
			$db = $this->mysqli->conn;
			$db->query ("DELETE FROM daftar WHERE id = '$id' ") or die ($db->error);
		}

		function __destruct(){
			$db = $this->mysqli->conn;
			$db->close();
		}

	}

 ?>

