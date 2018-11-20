<?php 
include "model/m_gambar.php";
include('model/m_status.php');
include('model/m_daftar.php');
$connection = new Database($host, $user, $pass, $database);
$status= new Status($connection);
$gambar = new Gambar($connection);
$daftar = new Daftar($connection);
 ?>
 <section>
      <div class="row">
        <div >
          <div>
            <div>
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
              <?php 
                $tampil= $gambar->tampil();
                $data = $tampil->fetch_object()
              ?>
                  <div class="item active">
                    <img class="carousel-image" src="gambar/halaman_utama/<?=$data->nama_gambar; ?>" alt="First slide">
                  </div>
              <?php
                while($data = $tampil->fetch_object()){
               ?>
                  <div class="item">
                    <img class="carousel-image" src="gambar/halaman_utama/<?=$data->nama_gambar; ?>" alt="First slide">
                  </div>
               <?php } ?>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </section>

  <section class="content">
    <div class="container">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-solid">
            <div class="box-body">
            
                <h3 align="center"><b>Cek Status</b></h3>
              
            </div>
            <form method="post" target="blank">
            <div class="form-group">
              <div class="row">
                <div class="col-xs-2">
                </div>
                <div class="col-xs-8">
                  <div class="form-group">
                    <textarea name="input_cek" class="form-control" rows="2" placeholder="Ketik Disini ..." required=""></textarea>
                    <p align="left"><b>Masukkan no kode yang tertera pada nota transaksi anda</b></p>
                  </div>

                  <div class="box-footer">
                     <button name="cek" class="btn btn-info pull-left">Cek</button>
                 </div>
                 <?php
                  if (isset($_POST['cek']))
                  {
                    $input_cek= $_POST['input_cek'];
                    $tampil= $status->cek($input_cek);
                    $cek = mysqli_num_rows($tampil);
                    if ($cek > 0) {
                    echo "<meta http-equiv='refresh' content='1; url=index.php?halaman=status&invoice=$input_cek'>";
                    }
                    else{
                   echo"<meta http-equiv='refresh' content='1; url=index.php?halaman=halaman_404'>";
                    }
                  }
                 ?>
                </div>
              </div>
              </div>
            </form>
          </div>



        </div>

      

        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-solid">
            <div class="box-body">
            
                <h3 align="center"><b>Informasi Estimasi Biaya</b></h3>
              
            </div>
            <form role="form">
            <div class="form-group">
              <div class="row">
                <div class="col-xs-2">
                </div>
                <div class="col-xs-8">
                  <div class="form-group">
                    <select class="form-control select2" style="width: 100%;">
                      <?php 
                      $tampil= $daftar->tampil();
                      while($data = $tampil->fetch_object()){
                      ?>
                      <option><?=$data->nama; ?> (Rp. <?=number_format($data->harga,0,".","."),',00' ?>)</option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                  <p align="left"><b>Harga Dapat Berubah </b></p>
                  <br>
                </div>

                </div>
              </div>
              </div>
            </form>
          </div>
          


        </div>
        <!--/.col (right) -->
      </div>
      </div>
    </section>