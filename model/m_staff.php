<?php  
	class Staff {
		private $mysqli;

		function __construct($conn) {
			$this->mysqli = $conn;
		}

		public function tampil($id = null) {
			$db = $this->mysqli->conn;
			$sql = "SELECT * FROM st_user";
			if($id != null){
				$sql .= " WHERE id = $id";
			}
			$query = $db->query($sql) or die ($db->error);
			return $query;
		}

		public function tambah($nama, $username, $password){
			$db = $this->mysqli->conn;
			$db->query ("INSERT INTO st_user VALUES ('', '$nama', '$username', '$password')") or die ($db->error);
		}

		public function edit($sql){
			$db = $this->mysqli->conn;
			$db->query($sql) or die ($db->error);
		}

		public function hapus ($id){
			$db = $this->mysqli->conn;
			$db->query ("DELETE FROM st_user WHERE id = '$id' ") or die ($db->error);
		}

		function __destruct(){
			$db = $this->mysqli->conn;
			$db->close();
		}

	}

 ?>

