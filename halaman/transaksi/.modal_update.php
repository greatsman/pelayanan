<div id="update" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times</button>
                      <h4 class="modal-title"><b>Update Transaksi</b></h4>
                  </div>
                  <form id="form_update">
                    <div class="modal-body" id="modal-update">
                      <div class="form-group">
                        <label class="control-label" for="status">Status</label>
                        <input type="hidden" id="invoice" name="invoice">
                         <input type="text" name="status" class="form-control" id="status" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="biaya">Biaya</label>
                         <input type="text" name="biaya" class="form-control" id="biaya" required>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <input type="submit" class="btn btn-success" name="update" value="update">
                    </div>

                  </form>
                    <script type="text/javascript">
                      $(document).on("click", "#update_transaksi", function() {
                          var invoice = $(this).data('invoice');
                          var status = $(this).data('status');
                          var biaya = $(this).data('biaya');
                          $("#modal-update #invoice").val(invoice);
                          $("#modal-update #status").val(status)
                          $("#modal-update #biaya").val(biaya)
                      })

                      $(document).ready(function(e){
                        $("#form_update").on("submit", (function(e){
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