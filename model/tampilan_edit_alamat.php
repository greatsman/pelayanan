<?php 
ob_start();
require_once('../koneksi/+koneksi.php');
require_once('../model/database.php');
include "m_tampilan.php";

$connection = new Database($host, $user, $pass, $database);
$tampilan = new Tampilan($connection);

$id = $_POST['id'];
$alamat = $connection->conn->real_escape_string($_POST['alamat']);

$tampilan->edit("UPDATE tulisan SET alamat = '$alamat' WHERE id = '$id'");
echo "<script>window.location='?halaman=tampilan';</script>";
 ?>