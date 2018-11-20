<?php 
ob_start();
require_once('../koneksi/+koneksi.php');
require_once('../model/database.php');
include "m_tampilan.php";

$connection = new Database($host, $user, $pass, $database);
$tampilan = new Tampilan($connection);

$id = $_POST['id'];
$nama_web = $connection->conn->real_escape_string($_POST['nama_web']);

$tampilan->edit("UPDATE tulisan SET nama_web = '$nama_web' WHERE id = '$id'");
echo "<script>window.location='?halaman=tampilan';</script>";
 ?>