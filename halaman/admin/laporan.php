<?php 
include "../../model/m_laporan.php";

$laporan = new Laporan($connection);

 ?>
<!-- /.pembatas  -->
<div class="container-flud">
<!-- /.mulai Section atas  -->

<!-- /.akhir section atas  -->

<!-- /.awal content  -->
<section class="content">

<h1 align="center">
          <b>Data Invoice</b>
 </h1>
       
        <div class="row">
          <div class="col-lg-12">
            <a style="margin-bottom :5px" type="button" class="btn btn-default" data-toggle="modal" data-target="#cetak"><i class="fa fa-print"></i> Cetak Data
            </a>
<!-- /.button tambah  -->
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
                  <th>Keluhan</th>
                  <th>Biaya</th>
                </tr>
            </thead>
<!-- /.php menampilkan data  -->
            <tbody>
                <?php 
                  $no = 1;
                  $tampil= $laporan->tampil();
                  while($data = $tampil->fetch_object()){
                   ?>
                
                <tr>
                  <td><?=$no++; ?></td>
                  <td><?=$data->invoice; ?></td>
                  <td><?=date('d-m-Y', strtotime($data->tanggal_masuk)); ?></td>
                  

                 
                  <td><?php if ($data->tanggal_selesai== '0000-00-00')
                    {
                      echo "-";
                    }
                    else {
                     echo date('d-m-Y', strtotime($data->tanggal_selesai));
                    }

                   ?></td>
                  <td><?=$data->keluhan; ?></td>
                  <td>Rp. <?=number_format($data->biaya,0,".","."),',00';
                  ?></td>
                </tr>
               
                <?php } ?>   
               </tbody>           
                   
<!-- /.php menampilkan data  -->
              </table>
            </div>
            <?php 
                  include '.modal_cetak_laporan.php';
            ?>


          </div>
        </div>

<!-- /.akhir table  -->

</section>
<!-- /. akhir untuk section  -->
</div>