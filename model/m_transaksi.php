<?php  
	class Transaksi {
		private $mysqli;

		function __construct($conn) {
			$this->mysqli = $conn;
		}

		public function tampil($invoice = null) {
			$db = $this->mysqli->conn;
			$sql = "SELECT * FROM transaksi";
			if($invoice != null){
				$sql .= " WHERE invoice = $invoice";
			}
			$query = $db->query($sql) or die ($db->error);
			return $query;
		}
		public function tampil_transaksi() {
			$db = $this->mysqli->conn;
			$sql = "SELECT * FROM transaksi WHERE nama_pengambil =''";
			$query = $db->query($sql) or die ($db->error);
			return $query;
		}
		

		public function tampil_selesai() {
			$db = $this->mysqli->conn;
			$sql = "SELECT * FROM transaksi WHERE nama_pengambil !=''";
			$query = $db->query($sql) or die ($db->error);
			return $query;
		}

		public function tambah($invoice, $nama_barang, $nama_pemilik, $alamat, $no_hp, $keluhan, $kelengkapan, $keterangan, $estimasi, $status, $biaya){
			$db = $this->mysqli->conn;
			$db->query ("INSERT INTO transaksi VALUES ('$invoice', now(),'$nama_barang', '$estimasi', '$nama_pemilik', '$alamat', '$no_hp' , '$keluhan','$kelengkapan', '$keterangan','$status','$biaya','null','')") or die ($db->error);
		}

		public function tampil_tanggal($tgl1, $tgl2) {
			$db = $this->mysqli->conn;
			$sql = "SELECT * FROM transaksi WHERE tanggal_masuk BETWEEN '$tgl1' AND '$tgl2' ";
			$query = $db->query($sql) or die ($db->error);
			return $query;
		}

		public function edit($sql){
			$db = $this->mysqli->conn;
			$db->query($sql) or die ($db->error);
		}

		public function hapus ($invoice){
			$db = $this->mysqli->conn;
			$db->query ("DELETE FROM transaksi WHERE invoice = '$invoice' ") or die ($db->error);
		}

		function __destruct(){
			$db = $this->mysqli->conn;
			$db->close();
		}

	}

 ?>