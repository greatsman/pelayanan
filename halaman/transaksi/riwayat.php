<?php 
include "../../model/m_riwayat.php";
$riwayat= new Riwayat($connection);

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
            <table id="example1" class="table table-bordered table-hover table-striped">
              <thead>
                
                <tr>
                  <th>No.</th>
                  <th>No.Invoice</th>
                  <th>Tanggal Servis</th>
                  <th>Jenis Servis</th>
                </tr>
            </thead>
<!-- /.php menampilkan data  -->
            <tbody>
             <?php 
                  $no=1;
                  $tampil= $riwayat->lihat(@$_GET['no_identitas']);
                  while($data = $tampil->fetch_object()){
                ?>  
                <tr>
                  <td><?=$no++; ?></td>
                  <td><?=$data->invoice; ?></td>
                  <td><?=$data->tanggal_masuk; ?></td>
                  <td><?=$data->keluhan; ?></td>
                </tr>  
                <?php } ?>
               </tbody>           
                   
<!-- /.php menampilkan data  -->
              </table>          
          </div>
        </div>
        <!-- /.box-body -->
       
        <!-- /.box-footer-->
  </div>
  

  </div>
  </div>
</section>
