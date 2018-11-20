<?php 
ob_start();
require_once('../koneksi/+koneksi.php');
require_once('../model/database.php');
include "m_daftar.php";

$connection = new Database($host, $user, $pass, $database);
$daftar = new Daftar($connection);

$id = $_POST['id'];
$nama = $connection->conn->real_escape_string($_POST['nama']);
$harga = $connection->conn->real_escape_string($_POST['harga']);

$daftar->edit("UPDATE daftar SET nama = '$nama', harga = '$harga' WHERE id = '$id'");
echo "<script>window.location='?halaman=daftar';</script>";
 ?>