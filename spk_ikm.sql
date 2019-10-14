-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Okt 2019 pada 04.28
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_ikm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama_alternatif_industri` varchar(200) NOT NULL,
  `desa` varchar(200) NOT NULL,
  `alias` varchar(10) NOT NULL,
  `tenaga_kerja` int(50) NOT NULL,
  `investasi` int(50) NOT NULL,
  `kapasitas_produksi` int(50) NOT NULL,
  `nilai_produksi` int(50) NOT NULL,
  `bahan_baku` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif_industri`, `desa`, `alias`, `tenaga_kerja`, `investasi`, `kapasitas_produksi`, `nilai_produksi`, `bahan_baku`) VALUES
(1, 'Bubut Kayu - Keswadi', 'Betet - Kasiman', 'A1', 0, 0, 0, 0, 0),
(2, 'Bubut Kayu - H. Suwito', 'Sambeng - Kasiman ', 'A2', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `batas_max` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kriteria`, `keterangan`, `batas_max`) VALUES
(1, 'C1', 'Tenaga Kerja', '19'),
(2, 'C2', 'Nilai Investasi', '1000000000'),
(3, 'C3', 'Kapasitas Produksi', '6000'),
(4, 'C4', 'Nilai Produksi', '925000000'),
(5, 'C5', 'Nilai Bahan Baku', '198000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_alternatif`
--

CREATE TABLE `kriteria_alternatif` (
  `id_kriteria_alternatif` int(20) NOT NULL,
  `id_kriteria` int(20) NOT NULL,
  `id_alternatif` int(20) NOT NULL,
  `nilai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `matriks_perbandingan`
--

CREATE TABLE `matriks_perbandingan` (
  `id_perbandingan` int(20) NOT NULL,
  `id_kriteria1` varchar(20) NOT NULL,
  `id_kriteria2` varchar(20) NOT NULL,
  `nilai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matriks_perbandingan`
--

INSERT INTO `matriks_perbandingan` (`id_perbandingan`, `id_kriteria1`, `id_kriteria2`, `nilai`) VALUES
(51, '1', '1', '1'),
(52, '1', '2', '0,5'),
(53, '1', '3', '0,25'),
(54, '1', '4', '0,25'),
(55, '1', '5', '0.33'),
(56, '2', '1', '2'),
(57, '2', '2', '1'),
(58, '2', '3', '0,33'),
(59, '2', '4', '0,25'),
(60, '2', '5', '0,50'),
(61, '3', '1', '4'),
(62, '3', '2', '3'),
(63, '3', '3', '1'),
(64, '3', '4', '1'),
(65, '3', '5', '2'),
(66, '4', '1', '4'),
(67, '4', '2', '4'),
(68, '4', '3', '1'),
(69, '4', '4', '1'),
(70, '4', '5', '3'),
(71, '5', '1', '3'),
(72, '5', '2', '2'),
(73, '5', '3', '0,50'),
(74, '5', '4', '0,33'),
(75, '5', '5', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `kriteria_alternatif`
--
ALTER TABLE `kriteria_alternatif`
  ADD PRIMARY KEY (`id_kriteria_alternatif`);

--
-- Indexes for table `matriks_perbandingan`
--
ALTER TABLE `matriks_perbandingan`
  ADD PRIMARY KEY (`id_perbandingan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kriteria_alternatif`
--
ALTER TABLE `kriteria_alternatif`
  MODIFY `id_kriteria_alternatif` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `matriks_perbandingan`
--
ALTER TABLE `matriks_perbandingan`
  MODIFY `id_perbandingan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
