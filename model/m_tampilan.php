<?php  
	class Tampilan {
		private $mysqli;

		function __construct($conn) {
			$this->mysqli = $conn;
		}

		public function tampil($id = null) {
			$db = $this->mysqli->conn;
			$sql = "SELECT * FROM tulisan";
			if($id != null){
				$sql .= " WHERE id = $id";
			}
			$query = $db->query($sql) or die ($db->error);
			return $query;
		}

		public function edit($sql){
			$db = $this->mysqli->conn;
			$db->query($sql) or die ($db->error);
		}

		
	}

 ?>

