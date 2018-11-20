<?php 
ob_start();
require_once('../koneksi/+koneksi.php');
require_once('../model/database.php');
include "m_staff.php";

$connection = new Database($host, $user, $pass, $database);
$admin = new Staff($connection);

$id = $_POST['id'];
$nama = $connection->conn->real_escape_string($_POST['nama']);
$username = $connection->conn->real_escape_string($_POST['username']);
$password = $connection->conn->real_escape_string($_POST['password']);

$admin->edit("UPDATE st_user SET nama = '$nama', username = '$username', password = '$password' WHERE id = '$id'");
echo "<script>window.location='?halaman=staff';</script>";
 ?>