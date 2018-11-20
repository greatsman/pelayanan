<?php 
include "../../model/m_transaksi.php";
include "../../model/m_pelanggan.php";
include "../../model/m_riwayat.php";

$riwayat = new Riwayat($connection);
$pelanggan = new Pelanggan($connection);
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
          <b>Halaman Transaksi </b>
 </h1>
       
        <div class="row">
          <div class="col-lg-12">
<!-- /.button tambah  -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah" style="margin-bottom :5px"><i class="fa fa-plus"></i> Tambah Transaksi</button> 
<!-- /.button tambah  -->
            <a class="btn btn-danger"  href="index.php?halaman=transaksi_selesai" style="margin-bottom :5px">
            Data Transaksi Selesai
            </a>
            <a class="btn btn-info"  href="index.php?halaman=data_pelanggan" style="margin-bottom :5px">
            Data Pelanggan
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
                  <th>Status</th>
                  <th>Pilihan</th>
                </tr>
            </thead>
<!-- /.php menampilkan data  -->
            <tbody>
                <?php 
                  $no = 1;
                  $tampil= $transaksi->tampil_transaksi();
                  while($data = $tampil->fetch_object()){
                   ?>
                
                <tr>
                  <td><?=$no++; ?></td>
                  <td><?=$data->invoice; ?> 
                    <a class="btn btn-success btn-xs"  href="?halaman=detail&invoice=<?=$data->invoice; ?>">
                    Detail
                    </a></td>
                  <td><?=date('d-m-Y', strtotime($data->tanggal_masuk)); ?></td>
                  <td><?=$data->status; ?></td>
                  <td>
<!-- /.tombol edit data  -->
                    <a class="btn btn-default btn-xs" href="../../report/cetak_invoice.php?invoice=<?=$data->invoice; ?>" target="_blank">
                    Cetak 
                    </a>
                    <a class="btn btn-info btn-xs" id="update_transaksi" data-toggle="modal" data-target="#update"
                      data-invoice="<?=$data->invoice; ?>"
                      data-status="<?=$data->status; ?>"
                      data-biaya="<?=$data->biaya; ?>"
                    >Update
                    </a>
                     <a class="btn btn-warning btn-xs" id="ambil_barang" data-toggle="modal" data-target="#ambil"
                      data-invoice="<?=$data->invoice; ?>"
                      data-nama_pengambil="<?=$data->nama_pengambil; ?>"
                    >Ambil
                    </a>
<!-- /.tombol edit data  -->
                    <a class="btn btn-success btn-xs" href="sms:<?=$data->no_hp; ?>?body=Diberitahukan%20kepada%20pelanggan%20dengan%20No.Invoice%20<?=$data->invoice; ?>%20,Status%20barang%20anda%20<?=$data->status; ?>">
                    SMS 
                    </a>
                    <a class="btn btn-danger btn-xs"  href="?halaman=transaksi&act=del&invoice=<?=$data->invoice; ?>" onclick="return confirm('Apakah anda yakin ?')">
                    Hapus
                    </a>
<!-- /.tombol edit data 
                    <a class="btn btn-info btn-xs" id="edit_transaksi" data-toggle="modal" data-target="#edit"
                      data-id="<?=$data->id; ?>"
                      data-nama_barang="<?=$data->nama_barang; ?>"
                      data-nama_pemilik="<?=$data->nama_pemilik; ?>"
                    >Update
                    </a>
                  -->
                  </td>
                </tr>
               
                <?php } ?>   
               </tbody>           
                   
<!-- /.php menampilkan data  -->
              </table>
            </div>

            <?php 
              include '.modal_update.php';
              include '.modal_tambah.php';
              include '.modal_cetak.php';
              include '.modal_ambil.php';
              include '.modal_edit.php';

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
