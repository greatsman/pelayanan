<?php 
ob_start();
require_once('../koneksi/+koneksi.php');
require_once('../model/database.php');
include "../model/m_transaksi.php";

$connection = new Database($host, $user, $pass, $database);
$transaksi = new Transaksi($connection);

$id = $_POST['id'];
$nama_barang = $connection->conn->real_escape_string($_POST['nama_barang']);
$nama_pemilik = $connection->conn->real_escape_string($_POST['nama_pemilik']);
$alamat = $connection->conn->real_escape_string($_POST['alamat']);
$no_hp = $connection->conn->real_escape_string($_POST['no_hp']);
$keluhan = $connection->conn->real_escape_string($_POST['keluhan']);
$kelengkapan = $connection->conn->real_escape_string($_POST['kelengkapan']);
$keterangan = $connection->conn->real_escape_string($_POST['keterangan']);
$estimasi = $connection->conn->real_escape_string($_POST['estimasi']);
$biaya = $connection->conn->real_escape_string($_POST['biaya']);

$transaksi->edit("UPDATE transaksi SET nama_barang = '$nama_barang', nama_pemilik = '$nama_pemilik' WHERE id = '$id'");
echo "<script>window.location='?halaman=transaksi';</script>";
 ?>