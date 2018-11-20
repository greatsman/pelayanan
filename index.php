<!-- Batas Atas Untuk Kode Php -->
<?php 
include "model/m_tampilan.php";
require_once('koneksi/+koneksi.php');
require_once('model/database.php');
$connection = new Database($host, $user, $pass, $database);
$tampilan = new Tampilan($connection);
 ?>
<!-- Batas Penutup Kode PHP -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Halaman Utama Pelanggan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
 <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="tampilan/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="tampilan/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="tampilan/bower_components/Ionicons/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="tampilan/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="tampilan/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="tampilan/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="tampilan/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="tampilan/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="tampilan/bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="tampilan/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="tampilan/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

<!-- Awal Menampilkan data tulisan -->  
  <?php 
    $tampil= $tampilan->tampil();
    while($data = $tampil->fetch_object()){
  ?>

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand"><b><?=$data->nama_web; ?></b></a> <!-- Menampilkan Nama Web -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse pull-right" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php?halaman=halaman_help"><b>Hubungi Kami</b>&nbsp; <b>(&nbsp;<i class="fa fa-phone"></i>&nbsp;&nbsp;<?=$data->telepon; ?>)</b></a> </li>
          </ul>
        </div>
  <?php } ?>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->

      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
   <div class="content-wrapper">
    <!-- Awal Menampilkan Halaman-->
   <?php 
   if(@$_GET['halaman']=='status'){
      include "halaman/pelanggan/status.php";
   }
   else if (@$_GET['halaman']=='biaya') {
      include "halaman/pelanggan/biaya.php";
   }
   else if (@$_GET['halaman']=='halaman_404') {
      include "halaman/pelanggan/halaman_404.php";
   }
   else if (@$_GET['halaman']=='halaman_help') {
      include "halaman/pelanggan/halaman_help.php";
   }
   else {
      include "halaman/pelanggan/utama.php";
   }

    ?>
  </div>
  <?php 
    $tampil= $tampilan->tampil();
    while($data = $tampil->fetch_object()){
  ?>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <strong> <?=$data->alamat; ?></strong>
    </div>
    <!-- /.container -->
  </footer>
  <?php } ?>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="tampilan/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="tampilan/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="tampilan/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="tampilan/plugins/input-mask/jquery.inputmask.js"></script>
<script src="tampilan/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="tampilan/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="tampilan/bower_components/moment/min/moment.min.js"></script>
<script src="tampilan/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="tampilan/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="tampilan/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="tampilan/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="tampilan/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="tampilan/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="tampilan/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="tampilan/dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
</body>
</html>
