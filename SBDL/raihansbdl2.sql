-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Apr 2020 pada 13.52
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `program_penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_barang`
--

CREATE TABLE `tabel_barang` (
  `kd_brg` varchar(50) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jenis_brg` varchar(100) NOT NULL,
  `harga_brg` varchar(50) NOT NULL,
  `stok_brg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_barang`
--

INSERT INTO `tabel_barang` (`kd_brg`, `nama_brg`, `jenis_brg`, `harga_brg`, `stok_brg`) VALUES
('B-0001', 'Chocochip', 'Makanan', '2000', '300'),
('B-0003', 'Chocolatos', 'Makanan', '500', '100');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_beli`
--

CREATE TABLE `tabel_beli` (
  `no_beli` varchar(10) NOT NULL,
  `nama_brg` varchar(200) NOT NULL,
  `jumlah_beli` varchar(20) NOT NULL,
  `tgl_beli` date NOT NULL,
  `total_beli` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_beli`
--

INSERT INTO `tabel_beli` (`no_beli`, `nama_brg`, `jumlah_beli`, `tgl_beli`, `total_beli`) VALUES
('B-001', 'Chocolatos', '15', '2020-04-03', '30000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_jual`
--

CREATE TABLE `tabel_jual` (
  `no_jual` varchar(50) NOT NULL,
  `nama_brg` varchar(100) NOT NULL,
  `jumlah_jual` varchar(100) NOT NULL,
  `tgl_jual` date NOT NULL,
  `total_jual` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_jual`
--

INSERT INTO `tabel_jual` (`no_jual`, `nama_brg`, `jumlah_jual`, `tgl_jual`, `total_jual`) VALUES
('J-232', 'Chocochip', '14', '2020-04-01', '40000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_petugas`
--

CREATE TABLE `tabel_petugas` (
  `id_user` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_petugas`
--

INSERT INTO `tabel_petugas` (`id_user`, `username`, `password`) VALUES
('u_123', 'raihan', 'daa6b8d04ce72d953d5501adc53ddd82');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_suplier`
--

CREATE TABLE `tabel_suplier` (
  `kd_suplier` varchar(50) NOT NULL,
  `nama_sup` varchar(50) NOT NULL,
  `alamat_sup` varchar(50) NOT NULL,
  `notelp_sup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_suplier`
--

INSERT INTO `tabel_suplier` (`kd_suplier`, `nama_sup`, `alamat_sup`, `notelp_sup`) VALUES
('S-0001', 'Oreo co', 'Jakarta', '02031231');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_barang`
--
ALTER TABLE `tabel_barang`
  ADD PRIMARY KEY (`kd_brg`);

--
-- Indeks untuk tabel `tabel_beli`
--
ALTER TABLE `tabel_beli`
  ADD PRIMARY KEY (`no_beli`);

--
-- Indeks untuk tabel `tabel_jual`
--
ALTER TABLE `tabel_jual`
  ADD PRIMARY KEY (`no_jual`);

--
-- Indeks untuk tabel `tabel_petugas`
--
ALTER TABLE `tabel_petugas`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tabel_suplier`
--
ALTER TABLE `tabel_suplier`
  ADD PRIMARY KEY (`kd_suplier`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
