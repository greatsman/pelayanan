<?php 
include "../../model/m_tampilan.php";

$tampilan = new Tampilan($connection);
 ?>
<!-- /.pembatas  -->
<div class="container">
<!-- /.mulai Section atas  -->
<section class="content-header">
        <h1>
          <b>Pengaturan</b>
        </h1>
</section>
<!-- /.akhir section atas  -->

<!-- /.awal content  -->
<section class="content">
        <div class="row">
          <div class="col-lg-12">
              <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
<!-- /.awal penampilan data  -->              	
              <?php 
                  $tampil= $tampilan->tampil();
                  while($data = $tampil->fetch_object()){
                   ?>
                <tr>
                  <td><b>Nama Web</b></td>
                  <td></td>
                  <td><?=$data->nama_web; ?></td>
                  <td>
                  	<a class="btn btn-info btn-xs" id="edit_nama_web" data-toggle="modal" data-target="#edit_web"
                  	data-id="<?=$data->id; ?>"
                    data-nama_web="<?=$data->nama_web; ?>">
                  	Edit
                  	</a>
                  </td>
                </tr>
                <tr>
                  <td><b>URL Nota</b></td>
                  <td></td>
                  <td><?=$data->url; ?></td>
                  <td>
                  	<a class="btn btn-info btn-xs" id="edit_url_nota" data-toggle="modal" data-target="#edit_url"
                  	data-id="<?=$data->id; ?>"
                    data-url="<?=$data->url; ?>">
                  	Edit
                  	</a>
                  </td>
                </tr>
                <tr>
                  <td><b>Telepon</b></td>
                  <td></td>
                  <td><?=$data->telepon; ?></td>
                  <td>
                  	<a class="btn btn-info btn-xs" id="edit_telepon" data-toggle="modal" data-target="#edit_tlpn"
                  	data-id="<?=$data->id; ?>"
                    data-telepon="<?=$data->telepon; ?>">
                  	Edit
                  	</a>
                  </td>
                </tr>
                 <tr>
                  <td><b>Alamat</b></td>
                  <td></td>
                  <td><?=$data->alamat; ?></td>
                  <td>
                  	<a class="btn btn-info btn-xs" id="edit_alamat" data-toggle="modal" data-target="#edit_almt"
                  	data-id="<?=$data->id; ?>"
                    data-alamat="<?=$data->alamat; ?>">
                  	Edit
                  	</a>
              	  </td>
                 </tr>
                <?php } ?>
                <tr>
                  <td><b>Tambah Daftar</b></td>
                  <td></td>
                  <td></td>
                  <td><a class="btn btn-info btn-xs" href="index.php?halaman=daftar">Ke Menu</a></td>
                </tr>
                <tr>
                  <td><b>Pengaturan Gambar</b></td>
                  <td></td>
                  <td></td>
                  <td><a class="btn btn-info btn-xs" href="index.php?halaman=edit_gambar">Atur</a></td>
                </tr>
<!-- /.awal penampilan data  --> 
              </table>
          
            </div>
			      <?php 
                  include '.modal_edit_tampilan.php';
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