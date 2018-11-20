 <div id="tambah" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times</button>
                      <h4 class="modal-title"><b>Tambah Admin</b></h4>
                  </div>
                  <form action="" method="post">
                    <div class="modal-body">
                      <div class="form-group">
                        <label class="control-label" for="nama">Nama Admin</label>
                        <input type="text" name="nama" class="form-control" id="nama" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="user">Username</label>
                        <input type="text" name="username" class="form-control" id="username" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="pass">Password</label>
                        <input type="text" name="password" class="form-control" id="password" required>
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
                    $username = $connection->conn->real_escape_string($_POST['username']);
                    $password = $connection->conn->real_escape_string($_POST['password']);

                    $admin->tambah($nama, $username, $password);
                    echo"<script>window.location='?halaman=admin';</script>";
                  }


               ?>
                </div>
              </div>
              

            </div>