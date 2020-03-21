-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Mar 2020 pada 13.32
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `program penjualan toko deras`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_barang`
--

CREATE TABLE `tabel_barang` (
  `kdbrg` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `stok` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_barang`
--

INSERT INTO `tabel_barang` (`kdbrg`, `nama`, `harga`, `stok`) VALUES
('B-0001', 'Oreo', '2000', '200');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_beli`
--

CREATE TABLE `tabel_beli` (
  `no_beli` varchar(10) NOT NULL,
  `total` varchar(20) NOT NULL,
  `kd_suplier` varchar(10) NOT NULL,
  `tgl` date NOT NULL,
  `idusr` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_beli`
--

INSERT INTO `tabel_beli` (`no_beli`, `total`, `kd_suplier`, `tgl`, `idusr`) VALUES
('P-0001', '15', 'S-101', '2020-03-09', 'U-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_detail`
--

CREATE TABLE `tabel_detail` (
  `notran` int(50) NOT NULL,
  `kdbrg` varchar(50) NOT NULL,
  `jml` int(50) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_detail`
--

INSERT INTO `tabel_detail` (`notran`, `kdbrg`, `jml`, `total`) VALUES
(251, 'B-0001', 20, 40000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_jual`
--

CREATE TABLE `tabel_jual` (
  `notran` varchar(50) NOT NULL,
  `idusr` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_jual`
--

INSERT INTO `tabel_jual` (`notran`, `idusr`, `tgl`, `total`) VALUES
('251', 'U-01', '2020-03-09', '40000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_petugas`
--

CREATE TABLE `tabel_petugas` (
  `idusr` varchar(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `pass` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_petugas`
--

INSERT INTO `tabel_petugas` (`idusr`, `nama`, `pass`) VALUES
('U-01', 'Herman', '123456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_suplier`
--

CREATE TABLE `tabel_suplier` (
  `kd_suplier` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `notelp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_suplier`
--

INSERT INTO `tabel_suplier` (`kd_suplier`, `nama`, `alamat`, `notelp`) VALUES
('S-101', 'Oreo Co', 'Jakarta', '021234110');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_barang`
--
ALTER TABLE `tabel_barang`
  ADD PRIMARY KEY (`kdbrg`);

--
-- Indeks untuk tabel `tabel_beli`
--
ALTER TABLE `tabel_beli`
  ADD PRIMARY KEY (`no_beli`);

--
-- Indeks untuk tabel `tabel_detail`
--
ALTER TABLE `tabel_detail`
  ADD PRIMARY KEY (`notran`),
  ADD KEY `kdbrg` (`kdbrg`);

--
-- Indeks untuk tabel `tabel_jual`
--
ALTER TABLE `tabel_jual`
  ADD PRIMARY KEY (`notran`),
  ADD KEY `idusr` (`idusr`);

--
-- Indeks untuk tabel `tabel_petugas`
--
ALTER TABLE `tabel_petugas`
  ADD PRIMARY KEY (`idusr`);

--
-- Indeks untuk tabel `tabel_suplier`
--
ALTER TABLE `tabel_suplier`
  ADD PRIMARY KEY (`kd_suplier`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
