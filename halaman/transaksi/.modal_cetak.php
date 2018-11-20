 <div id="cetak" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times</button>
                      <h4 class="modal-title">Cetak Transksi</h4>
                  </div>
                    <div class="modal-body">
                      <form action="../../report/cetak_transaksi.php" method="post" target="blank">
                        <table>
                           <tr>
                             <td>
                               <div class="form-group">Dari Tanggal</div>
                             </td>
                             <td align="center" width="5%">
                                <div class="form-group">:</div>    
                             </td>
                             <td>
                               <div class="form-group">
                                <input type="date" class="form-control" name="tanggal_awal" required>           
                               </div>
                             </td>
                           </tr>
                            <tr>
                             <td>
                               <div class="form-group">Sampai Tanggal</div>
                             </td>
                             <td align="center" width="5%">
                                <div class="form-group">:</div>    
                             </td>
                             <td>
                               <div class="form-group">
                                <input type="date" class="form-control" name="tanggal_akhir" required>           
                               </div>
                             </td>
                           </tr>
                           <tr>
                             <td></td>
                             <td></td>
                             <td>
                              <div class="form-group">
                              <input type="submit" class="btn btn-warning" name="cetak_tanggal" value="cetak_tanggal">
                             </div>
                             </td>
                           </tr>
                        </table>

                      </form>
                      
                    </div>
                    <div class="modal-footer">
                      <a class="btn btn-warning" href="../../report/cetak_transaksi.php" target="blank">
                        Cetak Semua
                      </a>
                    </div>
                </div>
              </div>
              

            </div>