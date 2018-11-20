<?php 
include "../../model/m_gambar.php";

$gambar = new Gambar($connection);
if(@$_GET['act'] == ''){
 ?>
<!-- /.pembatas  -->
<div class="container">
<!-- /.mulai Section atas  -->
<section class="content-header">
        <h1>
          Konfigurasi Gambar Halaman Utama
        </h1>
</section>
<!-- /.akhir section atas  -->

<!-- /.awal content  -->
<section class="content">


       
        <div class="row">
          <div class="col-lg-12">
<!-- /.button tambah  -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah Gambar</button>
             <button type="button" class="btn btn-danger" onclick="history.back(-1)">
            Kembali
            </button> 
<!-- /.button tambah  -->
            <br>
            <br>
<!-- /.awal table  -->
              <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
              <?php 
                $tampil= $gambar->tampil();
                while($data = $tampil->fetch_object()){
               ?>
                <tr>
                  <td><?=$data->nama_gambar; ?></td>
                  <td align="right">
<!-- /.tombol edit data  -->
<!-- /.tombol edit data  -->
                    <a href="?halaman=edit_gambar&act=del&id=<?=$data->id; ?>" onclick="return confirm('Apakah anda yakin ?')">
                    <button class="btn btn-danger btn-xs">Hapus</button>
                    </a>
                  </td>
                </tr>
<!-- /.php menampilkan data  -->              
                <tr>
                  <td align="center" colspan="2"><img src="../../gambar/halaman_utama/<?=$data->nama_gambar; ?>" width="960" height="294"></td>
                </tr>
               <?php } ?>
                
<!-- /.php menampilkan data  -->
              </table>
            </div>
             <?php 
                  include '.modal_tambah_gambar.php';
            ?>
            
<!-- /.form modal tambah admin  -->         
<!-- /.form modal tambah admin  --> 

<!-- /.form modal edit  -->
 

<!-- /.form modal edit  --> 

          </div>
        </div>

<!-- /.akhir table  -->

</section>
<!-- /. akhir untuk section  -->
</div>
 <?php 
}else if(@$_GET['act']=='del') {
  $direktori = "../../gambar/halaman_utama/";
  $tampil= $gambar->tampil($_GET['id']);
  $data = $tampil->fetch_object();
  unlink($direktori.$data->nama_gambar);
  $gambar->hapus($_GET['id']);
  header("location: ?halaman=edit_gambar");
}