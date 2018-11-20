 <div id="tambah" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times</button>
                      <h4 class="modal-title"><b>Tambah Daftar</b></h4>
                  </div>
                  <form action="" method="post">
                    <div class="modal-body">
                      <div class="form-group">
                        <label class="control-label" for="nama">Nama Daftar</label>
                        <input type="text" name="nama" class="form-control" id="nama" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="harga">Harga</label>
                        <input type="text" name="harga" class="form-control" id="username" required>
                      </div>                      
                    </div>
                    <div class="modal-footer">
                      <button type="reset" class="btn btn-danger">Reset</button>
                      <input type="submit" class="btn btn-success" name="tambah" value="Simpan">
                    </div>

                  </form>
                    <?php   
                  if(@$_POST['tambah']){
                    $nama = $connection->conn->real_escape_string($_POST['nama']);
                    $harga = $connection->conn->real_escape_string($_POST['harga']);
                    $daftar->tambah($nama, $harga);
                    echo"<script>window.location='?halaman=daftar';</script>";
                  }


               ?>
                </div>
              </div>
              

            </div>