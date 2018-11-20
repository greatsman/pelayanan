<?php 
include "../../model/m_transaksi.php";
$transaksi= new Transaksi($connection);
 ?>

<?php 
$tampil= $transaksi->tampil(@$_GET['invoice']);
while($data = $tampil->fetch_object()){
?>
 <section class="content">
  <div class="container">
      <div class="row">
  <div class="col">
      <!-- Default box -->
      <div class="box box-solid box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Detail Barang</h3>
                  <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" onclick="history.back(-1)"><i class="fa fa-times"></i></button>
              </div>
        </div>

        <div class="box-body">
         <div class="table-responsive">
              <table>
                <tr>
                  <td><h4><b>No Invoice &nbsp;</b></h4></td>
                  <td><h4> : <?=$data->invoice; ?></h4></td>
                </tr>         
                <tr>
                  <td><h4><b>Tanngal Keluar &nbsp;</b></h4></td>
                  <td><h4> : <?=date('d/m/Y', strtotime($data->tanggal_selesai)); ?></h4></td>
                </tr>
                <tr>
                  <td><h4><b>Nama Pengambil &nbsp;</b></h4></td>
                  <td><h4> : <?=$data->nama_pengambil; ?></h4></td>
                </tr>
                <tr>
                  <td><h4><b>Tanggal Masuk &nbsp;</b></h4></td>
                  <td><h4> : <?=date('d/m/Y', strtotime($data->tanggal_masuk)); ?></h4></td>
                </tr>
                <tr>
                  <td><h4><b>Nama Barang &nbsp;</b></h4></td>
                  <td><h4> : <?=$data->nama_barang; ?></h4></td>
                </tr>
                <tr>
                  <td><h4><b>Lama Pengerjaan &nbsp;</b></h4></td>
                  <td><h4> : <?=$data->estimasi; ?></h4></td>
                </tr>
                <tr>
                  <td><h4><b>Status &nbsp;</b></h4></td>
                  <td><h4> : <?=$data->status; ?></h4></td>
                </tr>
                <tr>
                  <td><h4><b>Nama Pemilik &nbsp;</b></h4></td>
                  <td><h4> : <?=$data->nama_pemilik; ?></h4></td>
                </tr>
                 <tr>
                  <td><h4><b>No HP &nbsp;</b></h4></td>
                  <td><h4> : <?=$data->no_hp; ?></h4></td>
                </tr>
                 <tr>
                  <td><h4><b>Alamat &nbsp;</b></h4></td>
                  <td><h4> : <?=$data->alamat; ?></h4></td>
                </tr
                <tr>
                  <td><h4><b>Keluhan &nbsp;</b></h4></td>
                  <td><h4> : <?=$data->keluhan; ?></h4></td>
                </tr>
                <tr>
                  <td><h4><b>Kelengkapan &nbsp;</b></h4></td>
                  <td><h4> : <?=$data->kelengkapan; ?></h4></td>
                </tr>
                <tr>
                  <td><h4><b>keterangan &nbsp;</b></h4></td>
                  <td><h4> : <?=$data->keterangan; ?></h4></td>
                </tr>
                 <tr>
                  <td><h4><b>Biaya &nbsp;</b></h4></td>
                  <td><h4> : Rp. <?=number_format($data->biaya,0,".","."),',00';
                  ?></h4></td>
                </tr>
              </table>
            <?php } ?>         
            </div>
        </div>
        <!-- /.box-body -->
       
        <!-- /.box-footer-->
  </div>
  

  </div>
  </div>
</section>
