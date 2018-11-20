<?php  
	class Riwayat {
		private $mysqli;

		function __construct($conn) {
			$this->mysqli = $conn;
		}

		public function tampil($id_riwayat = null) {
			$db = $this->mysqli->conn;
			$sql = "SELECT * FROM riwayat";
			if($id_riwayat != null){
				$sql .= " WHERE id_riwayat = $id_riwayat";
			}
			$query = $db->query($sql) or die ($db->error);
			return $query;
		}

		public function lihat($no_identitas) {
			$db = $this->mysqli->conn;
			$sql = "SELECT * FROM transaksi,riwayat,pelanggan WHERE riwayat.no_pelanggan=pelanggan.no_identitas AND transaksi.nama_pemilik=pelanggan.nama AND transaksi.invoice=riwayat.no_transaksi AND riwayat.no_pelanggan=$no_identitas";
			$query = $db->query($sql) or die ($db->error);
			return $query;
		}

		public function tambah($no_pelanggan, $no_transaksi){
			$db = $this->mysqli->conn;
			$db->query ("INSERT INTO riwayat VALUES ('','$no_pelanggan', '$no_transaksi')") or die ($db->error);
		}		
		function __destruct(){
			$db = $this->mysqli->conn;
			$db->close();
		}

	}

 ?>

