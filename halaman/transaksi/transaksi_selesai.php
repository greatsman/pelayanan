<?php 
include "../../model/m_transaksi.php";

$transaksi = new Transaksi($connection);
if(@$_GET['act'] == ''){
 ?>
<!-- /.pembatas  -->
<div class="container-flud">
<!-- /.mulai Section atas  -->

<!-- /.akhir section atas  -->

<!-- /.awal content  -->
<section class="content">

<h1 align="center">
          <b>Halaman Transaksi Selesai</b>
 </h1>
       
        <div class="row">
          <div class="col-lg-12">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah" style="margin-bottom :5px"><i class="fa fa-plus"></i> Tambah Transaksi</button> 
             <a class="btn btn-danger"  href="index.php" style="margin-bottom :5px">
            Data Transaksi
        </a>
            <br>
            <br>
<!-- /.awal table  -->
              <div class="table-responsive">
              <table id="example1" class="table table-bordered table-hover table-striped">
              <thead>
                 <tr>
                  <th>No.</th>
                  <th>No Invoice</th>
                  <th>Tanggal Masuk</th>
                  <th>Tanggal Keluar</th>
                  <th>Nama Pengambil</th>
                </tr>
            </thead>
<!-- /.php menampilkan data  -->
            <tbody>
                <?php 
                  $no = 1;
                  $tampil= $transaksi->tampil_selesai();
                  while($data = $tampil->fetch_object()){
                   ?>
                
                <tr>
                  <td><?=$no++; ?></td>
                  <td><?=$data->invoice; ?> 
                    <a class="btn btn-success btn-xs"  href="?halaman=detail_selesai&invoice=<?=$data->invoice; ?>">
                    Detail
                    </a></td>
                  <td><?=date('d-m-Y', strtotime($data->tanggal_masuk)); ?></td>
                  <td><?=date('d-m-Y', strtotime($data->tanggal_selesai)); ?></td>
                  <td><?=$data->nama_pengambil; ?> </td>
                </tr>
               
                <?php } ?>   
               </tbody>           
                   
<!-- /.php menampilkan data  -->
              </table>
            </div>

            <?php 
              include '.modal_tambah.php';
             ?>

          </div>
        </div>

<!-- /.akhir table  -->

</section>
<!-- /. akhir untuk section  -->
</div>
 <?php 
}else if(@$_GET['act']=='del') {
  $transaksi->hapus($_GET['invoice']);
  header("location: ?halaman=transaksi");
}