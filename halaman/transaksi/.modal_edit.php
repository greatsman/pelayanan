 <div id="edit" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times</button>
                      <h4 class="modal-title"><b>Tambah Transksi</b></h4>
                  </div>
                  <form id="form_edit">
                    <div class="modal-body" id="modal-edit">
                      <div class="form-group">
                        <label class="control-label" for="nama_barang">Nama Barang</label>
                         <input type="hidden" id="id" name="id">
                        <input type="text" name="nama_barang" class="form-control" id="nama_barang" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="nama_pemilik">Nama Pemilik</label>
                        <input type="text" name="nama_pemilik" class="form-control" id="nama_pemilik" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="no_hp">No HP</label>
                        <input type="text" name="no_hp" class="form-control" id="no_hp" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="keluhan">Keluhan</label>
                        <input type="text" name="keluhan" class="form-control" id="keluhan" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="kelengkapan">Kelengkapan</label>
                        <input type="text" name="kelengkapan" class="form-control" id="kelengkapan" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" id="keterangan" required>
                      </div>
                       <div class="form-group">
                        <label class="control-label" for="estimasi">Estimasi Pengerjaan</label>
                        <input type="text" name="estimasi" class="form-control" id="estimasi" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="biaya">Estimasi Biaya</label>
                        <input type="number" name="biaya" class="form-control" id="biaya" required>
                      </div>
                      
                    </div>
                    <div class="modal-footer">
                      <button type="reset" class="btn btn-danger">Reset</button>
                      <input type="submit" class="btn btn-success" name="tambah" value="Simpan">
                    </div>

                  </form>
                  <script type="text/javascript">
                      $(document).on("click", "#edit_transaksi", function() {
                          var id = $(this).data('id');
                          var nama_barang = $(this).data('nama_barang');
                          var nama_pemilik = $(this).data('nama_pemilik');
                          $("#modal-edit #id").val(id);
                          $("#modal-edit #nama_barang").val(nama_barang)
                          $("#modal-edit #nama_pemilik").val(nama_pemilik)
                      })

                      $(document).ready(function(e){
                        $("#form_edit").on("submit", (function(e){
                            e.preventDefault();
                            $.ajax({
                              url : '../../model/transaksi_update.php',
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