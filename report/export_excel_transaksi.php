<?php 
require_once('../koneksi/+koneksi.php');
require_once('../model/database.php');
include('../model/m_transaksi.php');
$connection = new Database($host, $user, $pass, $database);
$transaksi = new Transaksi($connection);

$filename = "excel_transaksi-(".date('d-m-Y').").xls";

header("Content-Disposition: attachment; filename='$filename'");
header("Content-Type; application/vnd.ms-excel");
 ?>

 <table border="1px">
 	<tr>
                  <th>No.</th>
                  <th>No Invoice</th>
                  <th>Tanggal Masuk</th>
                  <th>Nama Pemilik</th>
                  <th>No Hp</th>
                  <th>Jenis Kerusakan</th>
                  <th>Biaya</th>
                  <th>Status</th>
 	</tr>
 	<tr>
 		<?php 
 		$no = 1;
 		$tampil= $transaksi->tampil();
         while($data = $tampil->fetch_object()){
         	echo "<tr>";
       		echo "<td align=center>".$no++."</td>";
       		echo "<td align=center>".$data->invoice."</td>";
       		echo "<td align=center>".$data->tanggal_masuk++."</td>";
       		echo "<td align=center>".$data->nama_pemilik."</td>";
       		echo "<td align=center>".$data->no_hp."</td>";
       		echo "<td align=center>".$data->jenis_servis."</td>";
       		echo "<td align=center>".$data->biaya."</td>";
       		echo "<td align=center>".$data->status."</td>";
       		echo "</tr>";
         }
 		 ?>

 	</tr>


 </table>