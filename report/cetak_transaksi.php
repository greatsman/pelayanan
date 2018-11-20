<?php
require_once('../koneksi/+koneksi.php');
require_once('../model/database.php');
include('../model/m_transaksi.php');
$connection = new Database($host, $user, $pass, $database);
$transaksi = new Transaksi($connection);

$content = '
<style type="text/css">
.tabel { border-collapse:collapse;}
.tabel th { padding:8px 5px; background-color:#f60; color:#fff; }
</style>';
$content .= '
<page>
    <div style="padding:4mm; border:1px solid;" align="center">
      <span style="font-size:25px;"> Skripsiku</span>
    </div>
    <div style="padding:20px; 0 10px 0; font-size:15px;">
      Laporan Transaksi
    </div>
    <table border="1px" class="tabel">
    <tr>
    <th>No.</th>
        <th>No Invoice</th>
        <th>Tanggal Masuk</th>
        <th>Nama Pemilik</th>
        <th>No Hp</th>
        <th>Jenis Kerusakan</th>
        <th>Biaya</th>
        <th>Status</th>
    </tr>';

    $no = 1;
    if (@$_POST['cetak_tanggal']) {
       $tampil= $transaksi->tampil_tanggal(@$_POST['tanggal_awal'],@$_POST['tanggal_akhir']);
    }else{
    $tampil= $transaksi->tampil();
    }
         while($data = $tampil->fetch_object()){

$content.='
      <tr>
          <td align="center">'.$no++.'.</td>
          <td align="center">'.$data->invoice.'</td>
          <td align="center">'.$data->tanggal_masuk.'</td>
          <td align="center">'.$data->nama_pemilik.'</td>
          <td align="center">'.$data->no_hp.'</td>
          <td align="center">'.$data->jenis_servis.'</td>
          <td align="center">'.$data->biaya.'</td>
          <td align="center">'.$data->status.'</td>
          </tr>';
        }
$content.= '
      </table>
 </page>';
require_once('../library/html2pdf/html2pdf.class.php');
$html2pdf= new HTML2PDF('L','A4','en');
$html2pdf->WriteHTML($content);
$html2pdf->Output('print.pdf');
 ?>