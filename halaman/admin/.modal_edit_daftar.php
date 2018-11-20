<div id="edit" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times</button>
                      <h4 class="modal-title"><b>Edit Daftar</b></h4>
                  </div>
                  <form id="form">
                    <div class="modal-body" id="modal-edit">
                      <div class="form-group">
                        <label class="control-label" for="nama">Nama Daftar</label>
                          <input type="hidden" id="id" name="id">
                        <input type="text" name="nama" class="form-control" id="nama" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="harga">Harga</label>
                        <input type="text" name="harga" class="form-control" id="harga" required>
                      </div>    
                    </div>
                    <div class="modal-footer">
                      <input type="submit" class="btn btn-success" name="edit" value="Simpan">
                    </div>

                  </form>
                    <script src="../../tampilan/bower_components/jquery/dist/jquery.min.js">
                    </script>
                    <script type="text/javascript">
                      $(document).on("click", "#edit_daftar", function() {
                          var id = $(this).data('id');
                          var nama = $(this).data('nama');
                          var harga = $(this).data('harga');
                          $("#modal-edit #id").val(id);
                          $("#modal-edit #nama").val(nama);
                          $("#modal-edit #harga").val(harga);
                      })

                      $(document).ready(function(e){
                        $("#form").on("submit", (function(e){
                            e.preventDefault();
                            $.ajax({
                              url : '../../model/daftar_edit.php',
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