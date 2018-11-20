<?php 
include "../../model/m_staff.php";

$staff = new Staff($connection);
if(@$_GET['act'] == ''){
 ?>
<!-- /.pembatas  -->
<div class="container">
<!-- /.mulai Section atas  -->
<section class="content-header">
        <h1>
          <b>Data Staff</b>
        </h1>
</section>
<!-- /.akhir section atas  -->

<!-- /.awal content  -->
<section class="content">


       
        <div class="row">
          <div class="col-lg-12">
            <!-- /.button tambah  -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah Staff</button>
<!-- /.button tambah  -->
            <br>
            <br>
<!-- /.awal table  -->
              <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
                <tr>
                  <th>Nama</th>
                  <th>User</th>
                  <th>Password</th>
                  <th>Pilihan</th>
                </tr>
<!-- /.php menampilkan data  -->              
                <?php 
                  $tampil= $staff->tampil();
                  while($data = $tampil->fetch_object()){

                   ?>
                <tr>

                  <td><?=$data->nama; ?></td>
                  <td><?=$data->username; ?></td>
                  <td><?=$data->password; ?></td>
                 
                  <td>
<!-- /.tombol edit data  -->
                    <a id="edit_staff" data-toggle="modal" data-target="#edit"
                      data-id="<?=$data->id; ?>"
                      data-nama="<?=$data->nama; ?>"
                      data-username="<?=$data->username; ?>"
                      data-password="<?=$data->password; ?>">
                    <button class="btn btn-info btn-xs">Edit</button>
                    </a>
<!-- /.tombol edit data  -->
                    <a href="?halaman=staff&act=del&id=<?=$data->id; ?>" onclick="return confirm('Apakah anda yakin ?')">
                    <button class="btn btn-danger btn-xs">Hapus</button>
                    </a>
                  </td>
                </tr>
                <?php } ?>
<!-- /.php menampilkan data  -->
              </table>
            </div>

             <?php 
                  include '.modal_edit_staff.php';
                  include '.modal_tambah_staff.php';
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
  $staff->hapus($_GET['id']);
  header("location: ?halaman=staff");
}
