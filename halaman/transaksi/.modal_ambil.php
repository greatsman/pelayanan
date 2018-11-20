<div id="ambil" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times</button>
                      <h4 class="modal-title"><b>Pengambilan Barang</b></h4>
                  </div>
                  <form id="form_ambil">
                    <div class="modal-body" id="modal-ambil_barang">
                      <div class="form-group">
                        <label class="control-label" for="nama_pengambil">Nama Pengambil</label>
                        <input type="hidden" id="invoice" name="invoice">
                         <input type="text" name="nama_pengambil" class="form-control" id="nama_pengambil" required>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <input type="submit" class="btn btn-success" name="ambil" value="ambil">
                    </div>

                  </form>
                    <script type="text/javascript">
                      $(document).on("click", "#ambil_barang", function() {
                          var invoice = $(this).data('invoice');
                          var nama_pengambil = $(this).data('nama_pengambil');
                          $("#modal-ambil_barang #invoice").val(invoice);
                          $("#modal-ambil_barang #nama_pengambil").val(nama_pengambil)
                      })

                      $(document).ready(function(e){
                        $("#form_ambil").on("submit", (function(e){
                            e.preventDefault();
                            $.ajax({
                              url : '../../model/transaksi_selesai.php',
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