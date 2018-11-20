 <div id="tambah" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times</button>
                      <h4 class="modal-title"><b>Tambah Transksi</b></h4>
                  </div>
                  <form action="" method="post">
                    <div class="modal-body">
                      <div class="form-group">
                        <label class="control-label" for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" id="nama_barang" required>
                      </div>
                      <div class="form-group">
                         <select class="form-control select2" name="pilih_pelanggan" style="width: 100%;">
                                     <?php  $tampil= $pelanggan->tampil();
                                       while($data = $tampil->fetch_object()){?>
                                      <option value="<?=$data->no_identitas; ?>"><?=$data->no_identitas; ?>
                                      <?=$data->nama; ?></option>
                                     <?php }?>
                                     <?php  $tampil= $pelanggan->tampil($_POST['pilih_pelanggan']);
                                       while($data = $tampil->fetch_object()){?>
                                       <?php
                                        $a1=$data->no_identitas;
                                        $a= $data->nama;
                                        $b= $data->alamat;
                                        $c= $data->no_hp;
                                        ?>
                                     <?php }?>

                    </select>
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
                  <?php   
                  if(@$_POST['tambah']){
                    $invoice = date("YmdHis");
                    $no_transaksi = date("YmdHis");
                    $nama_barang = $connection->conn->real_escape_string($_POST['nama_barang']);
                    $no_pelanggan = $a1;
                    $nama_pemilik = $a;
                    $alamat = $b;
                    $no_hp = $c;
                    $keluhan = $connection->conn->real_escape_string($_POST['keluhan']);
                    $kelengkapan = $connection->conn->real_escape_string($_POST['kelengkapan']);
                    $keterangan = $connection->conn->real_escape_string($_POST['keterangan']);
                    $estimasi = $connection->conn->real_escape_string($_POST['estimasi']);
                    $status = "Pemeriksaan Awal";
                    $biaya = $_POST['biaya'];


                    $transaksi->tambah($invoice, $nama_barang, $nama_pemilik, $alamat, $no_hp, $keluhan, $kelengkapan, $keterangan, $estimasi, $status, $biaya);

                    $riwayat->tambah($no_pelanggan, $no_transaksi);
                    echo"<script>window.location='?halaman=transaksi';</script>";

                  }
                  ?>
                </div>
              </div>
              

            </div>