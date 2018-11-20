<?php
require_once('../koneksi/+koneksi.php');
require_once('../model/database.php');
include('../model/m_transaksi.php');
include('../library/phpqrcode/qrlib.php');
include "../model/m_tampilan.php";

$connection = new Database($host, $user, $pass, $database);
$tampilan = new Tampilan($connection);
$transaksi = new Transaksi($connection);
$tampil= $transaksi->tampil(@$_GET['invoice']);
$link=$tampilan->tampil();
$data=$link->fetch_object();
$web=$data->url;
$nama_toko= $data->nama_web;
$telepon=$data->telepon;
$alamat=$data->alamat;
while($data = $tampil->fetch_object()){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Invoice <?=$data->invoice; ?></title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <body onload="window.print();">
    <header class="clearfix">
      <div id="logo">
        <?php
            QRcode::png("$web/index.php?halaman=status&invoice=$data->invoice", "../gambar/qr/code.png", "M", 10, 1);
            echo "<img src='../gambar/qr/code.png' />Scan kode berikut untuk melihat update";
          ?>
      </div>
      <div id="company">
        <br>
        <h2 class="name"><?php echo "$nama_toko";?></h2>
        <div><?php echo "$telepon";?></div>
        <div><?php echo "$alamat";?></div>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">Kode : <?=$data->invoice; ?></div>
          <div class="name">Nama Pemilik : <?=$data->nama_pemilik; ?></div>
          <div class="address">Alamat : <?=$data->alamat; ?> </div>
          <div class="email">No HP :<?=$data->no_hp; ?></a></div>
        </div>
        <div id="invoice">
          <div class="date">Tanggal : <?=date('d/m/Y'); ?></div>
          <div class="date">Estimasi Selesai : <?=$data->estimasi; ?></div>
          <div class="date">Estimasi Biaya : Rp.<?=number_format($data->biaya,0,".","."); ?>,00</div>
        </div>
      </div>
      <table border="1" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <td>Nama Barang :</td>
            <td colspan="4"><?=$data->nama_barang; ?></td>   
          </tr>
          <tr>
            <td>Keluhan :</td>
            <td colspan="4"><?=$data->keluhan; ?></td> 
          </tr>
          <tr>
            <td>Kelengkapan :</td>
            <td colspan="4"><?=$data->kelengkapan; ?></td> 
          </tr>
          <tr>
            <td>Keterangan :</td>
            <td colspan="4"><?=$data->keterangan; ?></td> 
          </tr>
        </thead>
      </table>
       <table border="0" cellspacing="0" cellpadding="0">
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2"><p align="center">Pelanggan <br> <br> <br> <br> <hr></p> </td>
            <td colspan="2"><p align="center">Petugas <br> <br> <br> <br> <hr></p> </td>
          </tr>
          <tr>
          </tr>
           <tr>
          </tr>
        </tfoot>
        </table>
      <?php } ?>
    </main>
  </body>
</html>