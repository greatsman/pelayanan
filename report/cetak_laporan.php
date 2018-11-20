<?php
require_once('../koneksi/+koneksi.php');
require_once('../model/database.php');
include('../model/m_laporan.php');
date_default_timezone_set('Asia/Jakarta');
$login=$_GET['login'];
$connection = new Database($host, $user, $pass, $database);
$laporan = new Laporan($connection);

$content = "
<page>
      
         
        <div align='center'><h3>Laporan Transaksi</h3></div>
            
       
        <hr><br><br>
        
<br>
Di cetak pada tanggal ".date('d-m-Y  H:i')." oleh ".$login."
<br>
<br>
  <table cellpadding=0 cellspacing=0>
       <tr>
            <th width='10'>&nbsp;&nbsp;</th>
            <th align='center' width='25' style='border:1px solid #000; background-color: #32b6d1; padding: 2px;'>No</th>
            <th align='center' width='200' style='border:1px solid #000; background-color: #32b6d1; padding: 2px;'>No Invoice</th>
            <th align='center' width='100' style='border:1px solid #000; background-color: #32b6d1; padding: 2px;'>Tanggal Masuk</th>
            <th align='center' width='100' style='border:1px solid #000; background-color: #32b6d1; padding: 2px;'>Tanggal Keluar</th>
            <th align='center' width='400' style='border:1px solid #000; background-color: #32b6d1; padding: 2px;'> Jenis Servis</th>
            <th align='center' width='100' style='border:1px solid #000; background-color: #32b6d1; padding: 2px;'>Biaya</th>
          </tr>";

    $no = 1;
    if (@$_POST['cetak_tanggal']) {
       $tampil= $laporan->tampil_tanggal(@$_POST['tanggal_awal'],@$_POST['tanggal_akhir']);
    }else{
    $tampil= $laporan->tampil();
    }
         while($data = $tampil->fetch_object()){
          if ($data->tanggal_selesai== '0000-00-00'){
            $tanggal_selesai='-';
          }
          else {
            $tanggal_selesai= date('d-m-Y', strtotime($data->tanggal_selesai));
          }

$content.="
      <tr>
            <th width='10'>&nbsp;&nbsp;</th>
            <th align='center' width='25' style='border:1px solid #000;  padding: 2px;'>".$no++.".</th>
            <th align='center' width='200' style='border:1px solid #000;  padding: 2px;'>".$data->invoice."</th>
            <th align='center' width='100' style='border:1px solid #000;  padding: 2px;'>".date('d-m-Y', strtotime($data->tanggal_masuk))."</th>

            <th align='center' width='100' style='border:1px solid #000;  padding: 2px;'>".$tanggal_selesai."</th>
            <th align='center' width='400' style='border:1px solid #000;  padding: 2px;'>".$data->keluhan."</th>
            <th align='center' width='100' style='border:1px solid #000;  padding: 2px;'> Rp. ".number_format($data->biaya,0,'.','.').",00</th>
          </tr>";
        }
$content.= "
      </table>
 </page>";
require_once('../library/html2pdf/html2pdf.class.php');
$html2pdf= new HTML2PDF('L','A4','en');
$html2pdf->WriteHTML($content);
$html2pdf->Output('print.pdf');
 ?>