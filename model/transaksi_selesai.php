<?php 
ob_start();
require_once('../koneksi/+koneksi.php');
require_once('../model/database.php');
include "../model/m_transaksi.php";

$connection = new Database($host, $user, $pass, $database);
$transaksi = new Transaksi($connection);

$invoice = $_POST['invoice'];
$nama_pengambil = $connection->conn->real_escape_string($_POST['nama_pengambil']);


$transaksi->edit("UPDATE transaksi SET tanggal_selesai = now(),nama_pengambil = '$nama_pengambil' WHERE invoice = '$invoice'");
echo "<script>window.location='?halaman=transaksi';</script>";
 ?>