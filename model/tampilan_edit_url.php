<?php 
ob_start();
require_once('../koneksi/+koneksi.php');
require_once('../model/database.php');
include "m_tampilan.php";

$connection = new Database($host, $user, $pass, $database);
$tampilan = new Tampilan($connection);

$id = $_POST['id'];
$url = $connection->conn->real_escape_string($_POST['url']);

$tampilan->edit("UPDATE tulisan SET url = '$url' WHERE id = '$id'");
echo "<script>window.location='?halaman=tampilan';</script>";
 ?>