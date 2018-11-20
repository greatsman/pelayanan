<?php  
	class Laporan {
		private $mysqli;

		function __construct($conn) {
			$this->mysqli = $conn;
		}

		public function tampil($id = null) {
			$db = $this->mysqli->conn;
			$sql = "SELECT * FROM transaksi";
			if($id != null){
				$sql .= " WHERE id = $id";
			}
			$query = $db->query($sql) or die ($db->error);
			return $query;
		}

		public function tampil_tanggal($tgl1, $tgl2) {
			$db = $this->mysqli->conn;
			$sql = "SELECT * FROM transaksi WHERE tanggal_masuk BETWEEN '$tgl1' AND '$tgl2' ";
			$query = $db->query($sql) or die ($db->error);
			return $query;
		}
	}

 ?>