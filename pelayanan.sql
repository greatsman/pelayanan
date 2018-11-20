-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 Feb 2018 pada 05.47
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelayanan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `harga` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`id`, `nama`, `harga`) VALUES
(4, 'Pasang Infus Printer', 50000),
(5, 'Install Windows 10', 35000),
(6, 'Penggantian LCD (Harga Mulai)', 400000),
(7, 'Ganti Keyboard', 150000),
(8, 'Menambah RAM 8gb', 225000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `nama_gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id`, `nama_gambar`) VALUES
(14, '1.jpg'),
(15, '2.jpg'),
(16, '3.jpg'),
(17, '4.jpg'),
(18, 'ii.jpg'),
(19, 'KOMUNIKASI EFEKTIF 2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `no_identitas` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `no_hp` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`no_identitas`, `nama`, `alamat`, `no_hp`) VALUES
('19950313', 'Kurnia Wahyu Lestari', 'Sorong', '08124854228'),
('19950927', 'Agung Septyanto Putra', 'Sorong', '085243031355'),
('19960316', 'Ima Rosyidhah', 'Sragen', '08124854228');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` int(10) NOT NULL,
  `no_pelanggan` varchar(225) NOT NULL,
  `no_transaksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `riwayat`
--

INSERT INTO `riwayat` (`id_riwayat`, `no_pelanggan`, `no_transaksi`) VALUES
(3, '19950313', '20180202140434'),
(4, '19950313', '20180202145057'),
(5, '19950927', '20180202145133');

-- --------------------------------------------------------

--
-- Struktur dari tabel `st_user`
--

CREATE TABLE `st_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `st_user`
--

INSERT INTO `st_user` (`id`, `nama`, `username`, `password`) VALUES
(2, 'Anjasmara', 'staff', 'staff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sup_user`
--

CREATE TABLE `sup_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sup_user`
--

INSERT INTO `sup_user` (`id`, `nama`, `username`, `password`) VALUES
(9, 'Agung Septyanto Putra', 'agung123', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `invoice` varchar(50) NOT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `estimasi` varchar(50) DEFAULT NULL,
  `nama_pemilik` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `keluhan` varchar(100) DEFAULT NULL,
  `kelengkapan` varchar(100) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `biaya` int(25) DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `nama_pengambil` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`invoice`, `tanggal_masuk`, `nama_barang`, `estimasi`, `nama_pemilik`, `alamat`, `no_hp`, `keluhan`, `kelengkapan`, `keterangan`, `status`, `biaya`, `tanggal_selesai`, `nama_pengambil`) VALUES
('20180202140434', '2018-02-02', 'Printer Epson', '2 Hari', 'Kurnia Wahyu Lestari', 'Sorong', '08124854228', 'Pemasangan Refill', 'Power Supply dan Kardus', '-', 'Pemeriksaan Awal', 250000, '0000-00-00', ''),
('20180202145057', '2018-02-02', 'Laptop AUS', '1 Hari', 'Kurnia Wahyu Lestari', 'Sorong', '08124854228', 'Tambah RAM 8gb', 'Laptop Charger', '-', 'Pemeriksaan Awal', 300000, '0000-00-00', ''),
('20180202145133', '2018-02-02', 'Laptop Acer', '1 Hari', 'Agung Septyanto Putra', 'Sorong', '085243031355', 'Ganti LCD', 'Laptop TAS', '-', 'Pemeriksaan Awal', 650000, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tulisan`
--

CREATE TABLE `tulisan` (
  `id` int(5) NOT NULL,
  `nama_web` varchar(25) DEFAULT NULL,
  `url` varchar(25) DEFAULT NULL,
  `telepon` varchar(25) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tulisan`
--

INSERT INTO `tulisan` (`id`, `nama_web`, `url`, `telepon`, `alamat`) VALUES
(1, 'Agung Komputer', 'www.baikinhardware.com', '0853xxxxxxxx', 'Jl. S.Warmun RT 001/RW 004 Kel. Klamana Kec. Sorong Timur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`no_identitas`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `no_pelanggan` (`no_pelanggan`),
  ADD KEY `no_transaksi` (`no_transaksi`);

--
-- Indexes for table `st_user`
--
ALTER TABLE `st_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sup_user`
--
ALTER TABLE `sup_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`invoice`);

--
-- Indexes for table `tulisan`
--
ALTER TABLE `tulisan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_riwayat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `st_user`
--
ALTER TABLE `st_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sup_user`
--
ALTER TABLE `sup_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tulisan`
--
ALTER TABLE `tulisan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD CONSTRAINT `riwayat_ibfk_1` FOREIGN KEY (`no_pelanggan`) REFERENCES `pelanggan` (`no_identitas`),
  ADD CONSTRAINT `riwayat_ibfk_2` FOREIGN KEY (`no_transaksi`) REFERENCES `transaksi` (`invoice`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
