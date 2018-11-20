<?php 
require_once('koneksi/+koneksi.php');
require_once('model/database.php');
include('model/m_status.php');
$connection = new Database($host, $user, $pass, $database);
$status= new Status($connection);
 ?>
<?php 
$tampil= $status->cek(@$_GET['invoice']);
while($data = $tampil->fetch_object()){
?>
 <section class="content">
  <div class="container">
      <div class="row">
  <div class="col">
      <!-- Default box -->
      <div class="box box-solid box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Informasi Status Barang</h3>
        </div>
        <div class="box-body">
          <div class="table-responsive">
              <h2><b>No. Invoice</b></h2>
              <h4><?=$data->invoice; ?></h4>
              <h2><b>Status</b></h2>
              <h4><?=$data->status; ?></h4>
              <h2><b>Nama Pelanggan</b></h2>
              <h4><?=$data->nama_pemilik; ?></h4>
              <h2><b>Biaya</b></h2>
              <h4><?="Rp. "    ?>
                <?=number_format($data->biaya,0,".",".");
                  ?></h4>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
       
        <!-- /.box-footer-->
  </div>
   <div class="col">
          <div class="box box-solid box-primary collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">Identitas Barang</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="table-responsive">
              <table>
                <tr>
                  <td><h4><b>Nama Barang &nbsp;</b></h4></td>
                  <td><h4> : <?=$data->nama_barang; ?></h4></td>
                </tr>
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
              </table>
            <?php } ?>         
            </div>
          </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

  </div>
  </div>
</section>
