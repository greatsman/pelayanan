<?php  
	class Gambar {
		private $mysqli;

		function __construct($conn) {
			$this->mysqli = $conn;
		}

		public function tampil($id = null) {
			$db = $this->mysqli->conn;
			$sql = "SELECT * FROM gambar";
			if($id != null){
				$sql .= " WHERE id = $id";
			}
			$query = $db->query($sql) or die ($db->error);
			return $query;
		}

		public function tambah($nama_gambar){
			$db = $this->mysqli->conn;
			$db->query ("INSERT INTO gambar VALUES ('', '$nama_gambar')") or die ($db->error);
		}

		public function edit($sql){
			$db = $this->mysqli->conn;
			$db->query($sql) or die ($db->error);
		}
		public function hapus ($id){
			$db = $this->mysqli->conn;
			$db->query ("DELETE FROM gambar WHERE id = '$id' ") or die ($db->error);
		}

	}

 ?>

