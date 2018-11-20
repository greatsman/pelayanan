<?php 
ob_start();
require_once('../koneksi/+koneksi.php');
require_once('../model/database.php');
include "../model/m_transaksi.php";

$connection = new Database($host, $user, $pass, $database);
$transaksi = new Transaksi($connection);

$invoice = $_POST['invoice'];
$biaya = $connection->conn->real_escape_string($_POST['biaya']);
$status = $connection->conn->real_escape_string($_POST['status']);

$transaksi->edit("UPDATE transaksi SET biaya = '$biaya', status = '$status' WHERE invoice = '$invoice'");
echo "<script>window.location='?halaman=transaksi';</script>";
 ?>