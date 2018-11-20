<div id="tambah" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times</button>
                      <h4 class="modal-title">Tambah Gambar</h4>
                  </div>
                  <form method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                      <div class="form-group">
                        <label class="control-label" for="gambar">Pilih File</label>
                        <input type="file" name="nama_gambar" class="form-control" id="nama_gambar" required>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <input type="submit" class="btn btn-success" name="tambah" value="Simpan">
                    </div>

                  </form>  
                   <?php   
                  if(@$_POST['tambah']){
                  $nama_gambar = $connection->conn->real_escape_string($_POST['nama_gambar']);
                  $nama_gambar = $_FILES['nama_gambar']['name'];
                  $tmp = $_FILES['nama_gambar']['tmp_name'];
                  $direktori = "../../gambar/halaman_utama/";

                  move_uploaded_file($tmp,$direktori.$nama_gambar);
                  $gambar->tambah($nama_gambar);
                  echo"<script>window.location='?halaman=edit_gambar';</script>";
                  }


               ?>          
                </div>
              </div>
              

</div>