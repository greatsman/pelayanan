<div id="edit_web" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times</button>
                      <h4 class="modal-title"><b>Edit Web</b></h4>
                  </div>
                  <form id="form_web">
                    <div class="modal-body" id="modal-nama_web">
                      <div class="form-group">
                        <label class="control-label" for="nama_web">Nama Web</label>
                        <input type="hidden" id="id" name="id">
                        <input type="text" name="nama_web" class="form-control" id="nama_web" required>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <input type="submit" class="btn btn-success" name="edit" value="Simpan">
                    </div>

                  </form>
                   <script src="../../tampilan/bower_components/jquery/dist/jquery.min.js">
                    </script>
                    <script type="text/javascript">
                      $(document).on("click", "#edit_nama_web", function() {
                          var id = $(this).data('id');
                          var nama_web = $(this).data('nama_web');
                          $("#modal-nama_web #id").val(id);
                          $("#modal-nama_web #nama_web").val(nama_web);

                      })

                      $(document).ready(function(e){
                        $("#form_web").on("submit", (function(e){
                            e.preventDefault();
                            $.ajax({
                              url : '../../model/tampilan_edit_web.php',
                              type : 'POST',
                              data : new FormData(this),
                              contentType : false,
                              cache : false,
                              processData : false,
                              success : function(msg) {
                                $('.table').html(msg);
                              }
                            });

                        }));
                      })
                    </script>
                   
                </div>
              </div>
              

</div>

<div id="edit_url" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times</button>
                      <h4 class="modal-title"><b>Edit URL Nota</b></h4>
                  </div>
                  <form id="form_url">
                    <div class="modal-body" id="modal-url">
                      <div class="form-group">
                        <label class="control-label" for="telepon">Url Nota</label>
                        <input type="hidden" id="id" name="id">
                        <input type="text" name="url" class="form-control" id="url" required>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <input type="submit" class="btn btn-success" name="edit" value="Simpan">
                    </div>

                  </form>
                   <script src="../../tampilan/bower_components/jquery/dist/jquery.min.js">
                    </script>
                    <script type="text/javascript">
                      $(document).on("click", "#edit_url_nota", function() {
                          var id = $(this).data('id');
                          var url = $(this).data('url');
                          $("#modal-url #id").val(id);
                          $("#modal-url #url").val(url);

                      })

                      $(document).ready(function(e){
                        $("#form_url").on("submit", (function(e){
                            e.preventDefault();
                            $.ajax({
                              url : '../../model/tampilan_edit_url.php',
                              type : 'POST',
                              data : new FormData(this),
                              contentType : false,
                              cache : false,
                              processData : false,
                              success : function(msg) {
                                $('.table').html(msg);
                              }
                            });

                        }));
                      })
                      
                    </script>
                   
                </div>
              </div>
              

</div>

<div id="edit_tlpn" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times</button>
                      <h4 class="modal-title"><b>Edit Telepon</b></h4>
                  </div>
                  <form id="form_telepon">
                    <div class="modal-body" id="modal-telepon">
                      <div class="form-group">
                        <label class="control-label" for="telepon">Telepon</label>
                        <input type="hidden" id="id" name="id">
                        <input type="text" name="telepon" class="form-control" id="telepon" required>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <input type="submit" class="btn btn-success" name="edit" value="Simpan">
                    </div>

                  </form>
                   <script src="../../tampilan/bower_components/jquery/dist/jquery.min.js">
                    </script>
                    <script type="text/javascript">
                      $(document).on("click", "#edit_telepon", function() {
                          var id = $(this).data('id');
                          var telepon = $(this).data('telepon');
                          $("#modal-telepon #id").val(id);
                          $("#modal-telepon #telepon").val(telepon);

                      })

                       $(document).ready(function(e){
                        $("#form_telepon").on("submit", (function(e){
                            e.preventDefault();
                            $.ajax({
                              url : '../../model/tampilan_edit_telepon.php',
                              type : 'POST',
                              data : new FormData(this),
                              contentType : false,
                              cache : false,
                              processData : false,
                              success : function(msg) {
                                $('.table').html(msg);
                              }
                            });

                        }));
                      })

                    </script>
                   
                </div>
              </div>
              

</div>

<div id="edit_almt" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times</button>
                      <h4 class="modal-title"><b>Edit Alamat</b></h4>
                  </div>
                  <form id="form_alamat">
                    <div class="modal-body" id="modal-alamat">
                      <div class="form-group">
                        <label class="control-label" for="telepon">Alamat</label>
                        <input type="hidden" id="id" name="id">
                        <input type="text" name="alamat" class="form-control" id="alamat" required>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <input type="submit" class="btn btn-success" name="edit" value="Simpan">
                    </div>

                  </form>
                   <script src="../../tampilan/bower_components/jquery/dist/jquery.min.js">
                    </script>
                    <script type="text/javascript">
                      $(document).on("click", "#edit_alamat", function() {
                          var id = $(this).data('id');
                          var alamat = $(this).data('alamat');
                          $("#modal-alamat #id").val(id);
                          $("#modal-alamat #alamat").val(alamat);

                      })

                      $(document).ready(function(e){
                        $("#form_alamat").on("submit", (function(e){
                            e.preventDefault();
                            $.ajax({
                              url : '../../model/tampilan_edit_alamat.php',
                              type : 'POST',
                              data : new FormData(this),
                              contentType : false,
                              cache : false,
                              processData : false,
                              success : function(msg) {
                                $('.table').html(msg);
                              }
                            });

                        }));
                      })


                      
                    </script>
                   
                </div>
              </div>
              

</div>