<?php  
	class Login {
		private $mysqli;

		function __construct($conn) {
			$this->mysqli = $conn;
		}


		public function admin($username,$password) {
			$db = $this->mysqli->conn;
			$sql = "SELECT * FROM sup_user WHERE username='$username' AND password='$password'  ";
			$query = $db->query($sql) or die ($db->error);
			return $query;
		}

		public function staff($username,$password) {
			$db = $this->mysqli->conn;
			$sql = "SELECT * FROM st_user WHERE username='$username' AND password='$password'  ";
			$query = $db->query($sql) or die ($db->error);
			return $query;
		}
	}

 ?>