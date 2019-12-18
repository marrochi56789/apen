-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Nov 2019 pada 02.46
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `laba` int(11) NOT NULL,
  `total_laba` int(11) NOT NULL,
  `kode_suply` varchar(10) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `harga_barang`, `harga_jual`, `jumlah`, `laba`, `total_laba`, `kode_suply`, `foto`, `keterangan_foto`) VALUES
(23, 'benk benk', 1000, 2000, 159, 1000, 125000, 'xx1', '2017-bengbeng.png', 'Makanan ringan yg lumayan banyak dinikmati'),
(24, 'Le Mineral ', 2500, 3000, 171, 500, 66500, 'xx2', '8665b05d3595372dacdb0b369cc5c84680dfc017-large.jpg', 'Minuman mineral yg biasa dibeli'),
(25, 'Aqua', 2500, 3000, 240, 500, 136000, 'xx2', '2642564_8fff405b-851f-4196-b943-acae3d697e63_800_800.png', 'Aqua minuman mineral dari pegunungan'),
(26, 'sukro', 800, 1000, 199, 200, 39800, 'xx1', '10026501_1.jpg', 'sukro sedaaap!!'),
(27, 'nutrisari', 1000, 1500, 192, 500, 96000, 'xx1', 'img-75249-1318-nutrisari-lemon-tea-pls-18px40sx11g.jpg', 'nutrisari sasetan'),
(28, 'C1000', 5000, 7000, 166, 2000, 338000, 'xx2', 'you-c_you-c-1000-minuman-stamina-lemon--botol--140-ml-_full02.jpg', 'miniman bervitamin c'),
(29, 'BeardBrand', 8500, 10000, 189, 1500, 283500, 'xx1', 'nestle_nestle-bear-brand-minuman-susu--2-pcs-_full02.jpg', 'Minuman susah original'),
(30, 'Adem Sari', 1500, 2000, 174, 500, 88500, 'xx2', '0_3a0a7223-6f9c-4a8c-9cf0-786efdc3a88d_600_670.png', 'adem sari obatnya panas dalam'),
(31, 'Yakult', 1700, 2000, 186, 300, 55800, 'xx2', 'Danone-quiet-on-reports-of-Yakult-share-disposal-discussions_wrbm_large.png', 'sayangi usumu minum yakut setiap hari'),
(32, 'Yupi', 300, 500, 197, 200, 39800, 'xx2', 'nHBfsgAAAgAAAAkAFQb6-gAId-Y.jpg.webp', 'permen kesukaan anak anak'),
(33, 'Regal', 2000, 3000, 229, 1000, 234000, 'xx1', '6b28334982a5d40003b3dedb96b28935_tn.jpg', 'bisquit ini enak nih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barangterjual`
--

CREATE TABLE `tbl_barangterjual` (
  `id_bt` int(11) NOT NULL,
  `nb_bt` varchar(32) NOT NULL,
  `hb_bt` int(11) NOT NULL,
  `hj_bt` int(11) NOT NULL,
  `jumlah_bt` int(11) NOT NULL,
  `subt_bt` int(11) NOT NULL,
  `l_bt` int(11) NOT NULL,
  `tl_bt` int(11) NOT NULL,
  `kds_bt` varchar(10) NOT NULL,
  `tgl_bt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_barangterjual`
--

INSERT INTO `tbl_barangterjual` (`id_bt`, `nb_bt`, `hb_bt`, `hj_bt`, `jumlah_bt`, `subt_bt`, `l_bt`, `tl_bt`, `kds_bt`, `tgl_bt`) VALUES
(23, 'benk benk', 1000, 2000, 12, 24000, 1000, 12000, 'xx1', '2019-10-15 23:03:16'),
(24, 'Le Mineral ', 2500, 3000, 4, 12000, 500, 2000, 'xx2', '2019-10-15 23:03:19'),
(24, 'Le Mineral ', 2500, 3000, 3, 9000, 500, 1500, 'xx2', '2019-10-30 18:12:04'),
(25, 'Aqua', 2500, 3000, 2, 6000, 500, 1000, 'xx2', '2019-10-30 18:12:06'),
(28, 'C1000', 5000, 7000, 3, 21000, 2000, 6000, 'xx2', '2019-10-30 18:12:08'),
(30, 'Adem Sari', 1500, 2000, 3, 6000, 500, 1500, 'xx2', '2019-10-30 18:12:11'),
(32, 'Yupi', 300, 500, 2, 1000, 200, 400, 'xx2', '2019-10-30 18:12:13'),
(33, 'Regal', 2000, 3000, 5, 15000, 1000, 5000, 'xx1', '2019-10-30 18:12:19'),
(24, 'Le Mineral ', 2500, 3000, 3, 9000, 500, 1500, 'xx2', '2019-11-04 08:27:36'),
(25, 'Aqua', 2500, 3000, 30, 90000, 500, 15000, 'xx2', '2019-11-06 23:58:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penjualan`
--

CREATE TABLE `tbl_penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `nb_penjualan` varchar(32) NOT NULL,
  `hb_penjualan` int(11) NOT NULL,
  `hj_penjualan` int(11) NOT NULL,
  `jumlah_penjualan` int(11) NOT NULL,
  `subt_penjualan` int(11) NOT NULL,
  `l_penjualan` int(11) NOT NULL,
  `tl_penjualan` int(11) NOT NULL,
  `kds_penjualan` varchar(10) NOT NULL,
  `tgl_penjualan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penjualan2`
--

CREATE TABLE `tbl_penjualan2` (
  `id_penjualan` int(11) NOT NULL,
  `nb_penjualan` varchar(32) NOT NULL,
  `hb_penjualan` int(11) NOT NULL,
  `hj_penjualan` int(11) NOT NULL,
  `jumlah_penjualan` int(11) NOT NULL,
  `subt_penjualan` int(11) NOT NULL,
  `l_penjualan` int(11) NOT NULL,
  `tl_penjualan` int(11) NOT NULL,
  `kds_penjualan` varchar(10) NOT NULL,
  `tgl_penjualan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_penjualan2`
--

INSERT INTO `tbl_penjualan2` (`id_penjualan`, `nb_penjualan`, `hb_penjualan`, `hj_penjualan`, `jumlah_penjualan`, `subt_penjualan`, `l_penjualan`, `tl_penjualan`, `kds_penjualan`, `tgl_penjualan`) VALUES
(25, 'Aqua', 2500, 3000, 30, 90000, 500, 15000, 'xx2', '2019-11-06 23:58:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_suply`
--

CREATE TABLE `tbl_suply` (
  `kode_suply` varchar(10) NOT NULL,
  `nama_suply` varchar(35) NOT NULL,
  `kontak_suply` varchar(35) NOT NULL,
  `alamat_suply` varchar(100) NOT NULL,
  `cv_suply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_suply`
--

INSERT INTO `tbl_suply` (`kode_suply`, `nama_suply`, `kontak_suply`, `alamat_suply`, `cv_suply`) VALUES
('xx1', 'Erdin', '0812-3422-7722', 'Jl.hidayah', 'PT.Makmur'),
('xx2', 'Rani', '0877-9802-2099', 'jl.harapan', 'PT.Jaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `pass_user` varchar(25) NOT NULL,
  `pOne` varchar(100) NOT NULL,
  `jOne` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `pass_user`, `pOne`, `jOne`) VALUES
(1, 'admin', 'admin', 'Kamu suka apa?', 'aku suka kamu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tbl_suply`
--
ALTER TABLE `tbl_suply`
  ADD PRIMARY KEY (`kode_suply`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
