<?php 
session_start();
require_once('../koneksi/+koneksi.php');
require_once('../model/database.php');
include "../model/m_login.php";
$connection = new Database($host, $user, $pass, $database);
$login = new Login($connection);
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../tampilan/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../tampilan/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../tampilan/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../tampilan/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../tampilan/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan Login</p>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input name="username" type="text" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="password" type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
      <select name="level" class="form-control" required>
        <option value="admin">Admin</option>
        <option value="staff">Staff</option>
        </select>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="login" value="login" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <?php 
    if(@$_POST['login']){
      $username = $connection->conn->real_escape_string($_POST['username']);
      $password = $connection->conn->real_escape_string($_POST['password']);
      $level = $connection->conn->real_escape_string($_POST['level']);

      if ($level == 'admin'){
         $tampil= $login->admin($username,$password);
         $data=$tampil->fetch_array();
         $_SESSION['nama'] = $data['nama'];
         $id = $data[0];
         $cek = mysqli_num_rows($tampil);
         if ($cek > 0) {
           $_SESSION['admin'] = $id;
             echo"<script>window.location='../halaman/admin';</script>";
         }
         else
         {
             echo"<script>alert('Password atau Username Salah;');</script>";
         }
      }
      else if ($level == 'staff'){
         $tampil= $login->staff($username,$password);
         $data=$tampil->fetch_array();
         $_SESSION['nama'] = $data['nama'];
         $id = $data[0];
         $cek = mysqli_num_rows($tampil);
         if ($cek > 0) {
           $_SESSION['staff'] = $id;
             echo"<script>window.location='../halaman/transaksi';</script>";
         }
         else
         {
             echo"<script>alert('Password atau Username Salah;');</script>";
         }
      }
    }


     ?>

    <!-- /.social-auth-links -->
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../tampilan/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../tampilan/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../tampilan/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
