<?php  
	class Status {
		private $mysqli;

		function __construct($conn) {
			$this->mysqli = $conn;
		}


		public function cek($status) {
			$db = $this->mysqli->conn;
			$sql = "SELECT * FROM transaksi WHERE invoice='$status' ";
			$query = $db->query($sql) or die ($db->error);
			return $query;
		}
	}

 ?>